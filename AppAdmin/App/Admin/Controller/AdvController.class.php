<?php
namespace Admin\Controller;
use Org\Util\Page;
class AdvController extends CommonController {
   function banner(){
       $this->page_do();
       $this->display('banner');
   }
    function banner_show(){
        $this->page_do();
        $this->display('banner_show');
    }
    function page_do(){
        $page=I('get.page',1);
        $page_num=2;
        $d=D('Adv');
        $count=$d->select_count();
        $page_data=$d->select_data($page,$page_num);
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
    function banner_do(){
        $this->display();
    }
    function add_do(){
        $data=I('post.','');
        $arr=$this->upload_do();
        $data=array_merge($data,$arr);
        $d=D('Adv');
        $result=$d->add($data);
        if($result){
            $this->success("上传成功",U('Adv/banner'));
        }else{
           $this->error("上传失败，请重新上传");
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
    function del(){
        $id=I('get.id');
        $d=D('Adv');
        $res=$d->del($id);
        if($res){
            $this->banner_show();
        }
    }
    function update(){
        $id=I('get.id','');
        $page=I('get.page',1);
        $d=D('Adv');
        $data=$d->select_one($id);
        $this->assign('data',$data);
        $this->assign('page',$page);
        $this->display('banner_update');
    }
    function update_do(){
        $data=I('post.','');
        $file=$_FILES['myfile'];
        $d=D('Adv');
        if($file['error']==4&&$file['size']==0){
            $data['date']=date("Y-m-d",time());
            $res=$d->update($data);
            if($res){
                $this->banner();
            }else{
                $this->error("修改失败!请核实修改项再修改!",U('Adv/banner'),2);
            }
        }else{
            $arr=$this->upload_do();
            $data=array_merge($data,$arr);
            $result=$d->update($data);
            if($result)
                $this->banner();
            else{
                $this->error("修改失败!请核实修改项再修改!",U('Adv/banner'),2);
            }
        }
    }
    function opinion(){
        $this->opinion_do($where='1');
        $this->display('yijian');
    }
    function opinion_show(){
        $s=I('get.starttime','');
        $e=I('get.endtime','');
        if(empty($s)&&empty($e))
            $where="1";
        if(empty($s)&&$e)
            $where="date<='$e'";
        if(empty($e)&&$s)
            $where="date>='$s'";
        if($s&&$e)
            $where="date>='$s' and date<='$e'";
        $this->opinion_do($where);
        $this->display('opinion_show');
    }
    function opinion_do($where){
        $page=I('get.page',1);
        $page_num=5;
        $d=D('Yijian');
        $count=$d->select_count($where);
        $page_data=$d->select_data($page,$page_num,$where);
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
}