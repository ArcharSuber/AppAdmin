<?php
namespace Admin\Model;
use Think\Model;
class VipModel extends Model {
    protected $tableName = 'vip';
    function add($data){
        $m=M('vip');
        return $m->add($data);
    }
    function select_count($where){
        $m=M('vip');
        return $m->where($where)->count();
    }
    function select_data($key,$page,$page_num,$where){
        $m=M('vip');
        $data=$m->join("vip_select on vip.v_id=vip_select.v_id")->where($where)->order('id')->page($page,$page_num)->select();
        foreach($data as $k=>$v){
            $data[$k]['v_name']=str_replace($key,"<font color='red'>".$key."</font>",$v['v_name']);
            $data[$k]['v_tel']=str_replace($key,"<font color='red'>".$key."</font>",$v['v_tel']);
            $data[$k]['v_city']=str_replace($key,"<font color='red'>".$key."</font>",$v['v_city']);
        }
        return $data;
    }
    function del($id){
        $m=M('vip');
        return $m->where("id=$id")->delete();
    }
    function vip_where($s,$e,$k,$v_id){
        //判断条件是否存在
        if(!empty($k)){
            $where="v_name like '%".$k."%' or v_tel like '%".$k."%' or vip.v_id=$v_id";
            //判断开始时间是否存在
            if(!empty($s)){
                $where="(v_name like '%".$k."%' or v_tel like '%".$k."%' or vip.v_id=".$v_id.") and v_date>='".$s."'";
                //判断结束时间是否存在
                if(!empty($e)){
                    $where="(v_name like '%".$k."%' or v_tel like '%".$k."%' or vip.v_id=".$v_id.") and v_date>='".$s."' and v_date<='".$e."' ";
                }
            }else{
                if(!empty($e)){
                    $where="(v_name like '%".$k."%' or v_tel like '%".$k."%' or vip.v_id=".$v_id.") and v_date<='".$e."'";
                }
            }
        }else{
            $where="1";
            //判断开始时间是否存在
            if(!empty($s)) {
                $where="v_date>='".$s."'";
                //判断结束时间是否存在
                if (!empty($e)) {
                    $where="v_date>='".$s."' and v_date<='".$e."'";
                }
            }else{
                if(!empty($e)){
                    $where="v_date<='".$e."'";
                }
            }
        }
        return $where;
    }
    function vip_money($id,$money){
        $m=M('vip');
        $old_money=$m->where("id=$id")->getField('v_money');
        $m->where("id=$id")->setField('v_money',$old_money+$money);
        return $m->where("id=$id")->getField('v_money');
    }
}