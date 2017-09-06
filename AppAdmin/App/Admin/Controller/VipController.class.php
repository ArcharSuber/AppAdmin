<?php
namespace Admin\Controller;
use Org\Util\Page;
class VipController extends CommonController {
    function vip(){
       $this->page_do();
       $this->display();
   }
    function vip_show(){
        $s=I('get.starttime','');
        $e=I('get.endtime','');
        $k=I('get.keyword','');
        $m=M('vip_select');
        $data=$m->where("v_city like '%".$k."%'")->find();
        if($data){
            $v_id=$data['v_id'];
        }else{
            $v_id=0;
        }
        $d=D('Vip');
        $where=$d->vip_where($s,$e,$k,$v_id);
        $this->page_do($k,$where);
        $this->display('vip_show');
    }
    function del(){
        $id=I('get.id');
        $d=D('Vip');
        $res=$d->del($id);
        if($res){
            $this->vip_show();
        }
    }
    function page_do($key,$where="1"){
        $page=I('get.page',1);
        $page_num=2;
        $d=D('Vip');
        $count=$d->select_count($where);
        $page_data=$d->select_data($key,$page,$page_num,$where);
        $Page=new Page($count,$page_num);
        $config=array(
            'left'=>'上一页',
            'right'=>'下一页'
        );
        $Page->SetConfig($config);
        $show=$Page->Ajaxpage();
        $this->assign('data',$page_data);
        $this->assign('page',$page);
        $this->assign('show',$show);
    }
    function add(){
        $m=M('vip_select');
        $data=$m->select();
        $this->assign("data",$data);
        $this->display('vip_add');
    }
    function add_do(){
        $data=I('post.','');
        $arr=$this->upload_do();
        $data=array_merge($data,$arr);
        $d=D('Vip');
        $result=$d->add($data);
        if($result){
            $this->success("提交成功",U('Vip/vip'));
        }else{
            $this->error("提交失败，请核实后重新填写,所填信息均不能为空");
        }
    }
    function upload_do(){
        $upload = new \Think\Upload();// 实例化上传类
        $upload->maxSize   =     3145728 ;// 设置附件上传大小
        $upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
        $upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录
        $upload->rootPath  =      './'; // 设置附件上传根目录
        $info   =   $upload->upload();
        $path=$info['myfile']['savepath'].$info['myfile']['savename'];
        $image = new \Think\Image();
        $image->open($path);// 按照原图的比例生成一个最大为150*150的缩略图并保存为thumb.jpg
        $thumb_path=$info['myfile']['savepath'];
        $thumb_path=str_replace("Uploads","Thumbs",$thumb_path);
        is_dir($thumb_path) or mkdir($thumb_path,0777,true);
        $res=$image->thumb(150, 150)->save($thumb_path.$info['myfile']['savename']);
        if($res)
            $data['v_thumb']=$thumb_path.$info['myfile']['savename'];
        $data['v_path']=$path;
        $data['v_date']=date("Y-m-d",time());
        $data['v_money']=0;
        return $data;
    }
    function vip_add(){
        $id=I('get.id','');
        $money=I('get.money','');
        $d=D('Vip');
        echo $d->vip_money($id,$money);
    }
    function update(){
        $id=I('get.id','');
        $page=I('get.page',1);
        $this->error("本人比较懒哦~，只留下了\nid=$id,page=$page",U('vip'),2);
    }
}