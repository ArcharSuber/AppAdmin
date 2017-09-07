<?php
namespace Admin\Controller;
use Think\Controller;
class CommonController extends Controller {
    function __construct(){
        parent::__construct();
        if(cookie('u') && session('u') && cookie('i')){

        }else{
            $this->error("请先登录！",U('Login/login'),2);
        }
    }
}