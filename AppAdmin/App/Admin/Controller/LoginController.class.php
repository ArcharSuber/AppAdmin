<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller {
    /**
     * 登入页面
     */
    public function login(){
       $this->display('login');
    }

    /**
     * 生成验证码
     */
    public function verify(){
        $config=array(
            'fontSize'    =>    50,    // 验证码字体大小
            'length'      =>    5,     // 验证码位数
        );
        $Verify = new \Think\Verify($config);
        $Verify->useImgBg = true;
        $Verify->entry();
    }
    /*
     * 验证验证码 用户名 密码
     */
    public function login_do(){
        $d=D('Login');
        $verify=strtolower(I('post.verify',''));
        $data=$d->create();
        $v=$this->check_verify($verify);
        if($v){
            $res=$d->check_login($data);
            if($res){
                //创建cookie和session值
                cookie('u',$res['username']);
                cookie('i',$res['id']);
                session('u',$res['username']);
                $this->success("登录成功",U('Index/index'),3);
            }else{
                $this->error("用户名或密码错误！",U('Login/login'),3);
            }
        }else{
            $this->error("验证码有误！",U('Login/login'),3);
        }
    }
    /*
     * 检测验证码是否正确
     */
    public function check_verify($verify,$id=''){
        $Verify = new \Think\Verify();
        return $Verify->check($verify,$id);
    }
    function out(){
        cookie('u',null);
        cookie('i',null);
        $this->success("退出成功",U('Login/login'));
    }
}