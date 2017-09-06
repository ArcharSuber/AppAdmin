<?php
namespace Admin\Model;
use Think\Model;
class AdvModel extends Model {
    protected $tableName = 'adv';
    function add($data){
        $m=M('adv');
        return $m->add($data);
    }
    function select_count(){
        $m=M('adv');
        return $m->count();
    }
    function select_data($page,$page_num){
        $m=M('adv');
        return $m->order('id')->page($page,$page_num)->select();
    }
    function del($id){
        $m=M('adv');
        return $m->where("id=$id")->delete();
    }
    function select_one($id){
        $m=M('adv');
        return $m->where("id=$id")->find();
    }
    function update($data){
        $id=$data['id'];
        $m=M('adv');
        return $m->where("id=$id")->save($data);
    }
}