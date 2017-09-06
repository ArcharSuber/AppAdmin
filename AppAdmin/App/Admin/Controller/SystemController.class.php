<?php
namespace Admin\Controller;
class SystemController extends CommonController {
   function changePwd(){
       $this->display('changepwd');
   }
    function check_pwd(){
        $d=D('Login');
        $pwd=I('get.pwd','');
        $data=$d->select();
        if($data['pwd']==$pwd){
            echo "ok";
        }else{
            echo "no";
        }
    }
    function changepwd_do(){
        $pwd=I('post.pwd','');
        $d=D('Login');
        $res=$d->update_user($pwd);
        if($res){
            $this->success("修改成功");
        }
    }
}