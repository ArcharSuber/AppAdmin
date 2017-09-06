<?php
namespace Admin\Controller;
use Org\Util\Page;
use Org\Util\Upload;
class UserController extends CommonController {
    function user(){
        $d=D('Login');
        $page=I('get.page',1);
        $count=$d->select_count();
        $data=$d->select_data($page);
        $upload=new Page($count,3);
        $config=array(
            'left'=>'上一页',
            'right'=>'下一页'
        );
        $upload->SetConfig($config);
        $show=$upload->Ajaxpage();
        $this->assign("data",$data);
        $this->assign("page",$page);
        $this->assign("show",$show);
        $this->display('user');
    }
    function listshow(){
        $d=D('Login');
        $page=$_GET['page'];
        $count=$d->select_count();
        $data=$d->select_data($page);
        $upload=new Page($count,3);
        $config=array(
            'left'=>'上一页',
            'right'=>'下一页'
        );
        $upload->SetConfig($config);
        $show=$upload->Ajaxpage();
        $this->assign("data",$data);
        $this->assign("page",$page);
        $this->assign("show",$show);
        $this->display('listshow');
    }
    function del(){
        $id=I('get.id','');
        $d=D('Login');
        $res=$d->del($id);
        if($res){
            $this->listshow();
        }
    }
    function update(){
        $page=I('get.page','');
        $id=I('get.id','');
        $d=D('Login');
        $data=$d->select_one($id);
        $this->assign("page",$page);
        $this->assign("data",$data);
        $this->assign("id",$id);
        $this->display('update');
    }
    function update_do(){
        $data=I('post.','');
        $d=D('Login');
        $res=$d->update($data);
        if($res){
          $this->user();
        }
    }
    function check_name(){
        $data=I('get.','');
        $d=D('Login');
        $res=$d->check_name($data);
        if($res){
            echo "no";
        }else{
            echo "ok";
        }
    }
    function add(){
        $data=I('post.','','htmlspecialchars');
        $d=D('Login');
        $res=$d->add($data);
        if($res){
            $this->success("添加成功",U('User/user'));
        }
    }
}