<?php
namespace Admin\Controller;
class IndexController extends CommonController {
    /**
     * 登入页面
     */
    function index(){
        $this->display('index');
    }
    /*
     * 主页图片
     */
    function main(){
        $this->display('main');
    }
    /*
     * 头部
     */
    function header(){
        $this->display('head');
    }
    /*
     * 左侧导航
     */
    function left(){
        $this->display('left');
    }
}