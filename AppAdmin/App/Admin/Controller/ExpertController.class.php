<?php
namespace Admin\Controller;
use Org\Util\Page;
class ExpertController extends CommonController {
   function expert(){
       $this->page_do();
       $this->display('connoisseur');
   }
    function add(){
        $m=M('vip_select');
        $city=$m->select();
        $this->assign('city',$city);
        $this->display();
    }
    function page_do($key,$where="1"){
        $page=I('get.page',1);
        $page_num=2;
        $d=D('Expert');
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
    function add_do(){
        $data=I('post.','','htmlspecialchars');
        $arr=$this->upload_do();
        $data=array_merge($data,$arr);
        $d=D('Expert');
        $res=$d->add($data);
        if($res){
            $this->success("添加成功!",U('Expert/expert'),2);
        }else{
            $this->error("请核实信息后重新填写，所填信息均不能为空哦~");
        }
    }
    function del(){
        $id=I('get.id','');
        $d=D('Expert');
        $res=$d->del($id);
        if($res){
            $this->show();
        }else{
            $this->error("删除失败！",U('Expert/expert'),2);
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
            $data['thumb']=$thumb_path.$info['myfile']['savename'];
        $data['path']=$path;
        $data['date']=date("Y-m-d",time());
        return $data;
    }
    function show(){
        $data=I('get.','');
        $key=$data['keyword'];
        $d=D('Expert');
        $m=M('vip_select');
        $arr=$m->where("v_city like '%".$data['keyword']."%'")->find();
        if($arr){
            $v_id=$arr['v_id'];
        }else{
            $v_id=0;
        }
        $where=$d->where_do($v_id,$data);
        //echo $where;die;
        $this->page_do($key,$where);
        $this->display('show');
    }
    function update(){
        $id=I('get.id','');
        $page=I('get.page',1);
        $this->error("本人比较懒哦~，只留下了\nid=$id,page=$page",U('expert'),2);
    }
}