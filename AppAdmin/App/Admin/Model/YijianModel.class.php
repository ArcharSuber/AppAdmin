<?php
namespace Admin\Model;
use Think\Model;
class YijianModel extends Model {
    protected $tableName = 'yijian';
    function select_count($where){
        $m=M('yijian');
        return $m->where($where)->count();
    }
    function select_data($page,$page_num,$where){
        $m=M('yijian');
        return $m->where($where)->order('id')->page($page,$page_num)->select();
    }
}