<?php
namespace Admin\Model;
use Think\Model;
class LoginModel extends Model {
    protected $tableName = 'login';
    protected $_map = array(
        'u' =>'username',
        'p'  =>'pwd',
     );
    public function check_login($data){
        $db=M('login');
        $username=$data['username'];
        $res=$db->where("username='$username'")->find();//查询数据库中关于用户名的信息
        if($res){
            //验证密码
            if($res['pwd']==$data['pwd']){
                return $res;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    function add($data){
        $data['date']=date('Y-m-d H:i:s',time());
        $m=M('login');
        return $m->add($data);
    }
    function select_count(){
        $m=M('login');
        return $m->count();
    }
    function select_data($page){
        $m=M('login');
        return $m->order('id')->page($page,3)->select();
    }
    function del($id){
        $m=M('login');
        return $m->where("id=$id")->delete();
    }
    function select_one($id){
        $m=M('login');
        return $m->where("id=$id")->find();
    }
    function check_name($data){
        $old_name=$data['old_name'];
        $new_name=$data['new_name'];
        $m=M('login');
        return $m->where("`username`!='".$old_name."' and `username`='".$new_name."'")->find();
    }
    function update($data){
        $id=$data['id'];
        $m=M('login');
        return $m->where("id=$id")->save($data);
    }
    function select(){
        $m=M('login');
        $id=cookie('i');
        return $m->where("id=$id")->find();
    }
    function update_user($pwd){
        $id=cookie('i');
        $m=M('login');
        return $m->where("id=$id")->setField('pwd',$pwd);
    }
}