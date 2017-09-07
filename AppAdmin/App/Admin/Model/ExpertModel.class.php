<?php
namespace Admin\Model;
use Think\Model;
class ExpertModel extends Model {
    protected $tableName = 'expert';
    function add($data){
        $m=M('expert');
        return $m->add($data);
    }
    function select_count($where){
        $m=M('expert');
        return $m->where($where)->count();
    }
    function select_data($key,$page,$page_num,$where){
        $m=M('expert');
        $data=$m->join("vip_select on expert.v_id=vip_select.v_id")->where($where)->order('id')->page($page,$page_num)->select();
        foreach($data as $k=>$v){
            $data[$k]['name']=str_replace($key,"<font color='red'>".$key."</font>",$v['name']);
            $data[$k]['tel']=str_replace($key,"<font color='red'>".$key."</font>",$v['tel']);
            $data[$k]['v_city']=str_replace($key,"<font color='red'>".$key."</font>",$v['v_city']);
        }
        return $data;
    }
    function del($id){
        $m=M('expert');
        return $m->where("id=$id")->delete();
    }
    /*
     * 拼  where  语句
     */
    function where_do($v_id,$data){
        //判断关键字是否存在
        if(!empty($data['keyword'])){
            $keyword="(name like '%".$data['keyword']."%' or tel like '%".$data['keyword']."%' or expert.v_id=".$v_id.")";
        }else{
            $keyword="(1)";
        }
        //判断工作年限是否存在
        if(!empty($data['work_time'])){
            $work_time=" and work_time='".$data['work_time']."'";
        }else{
            $work_time="";
        }
        //判断审核状态是否存在
        if(!empty($data['styleshoice1'])){
            $styleshoice1=" and styleshoice1='".$data['styleshoice1']."'";
        }else{
            $styleshoice1="";
        }
        //判断推荐状态是否存在
        if(!empty($data['styleshoice2'])){
            $styleshoice2=" and styleshoice2='".$data['styleshoice2']."'";
        }else{
            $styleshoice2="";
        }
       return $where=$keyword.$work_time.$styleshoice1.$styleshoice2;
    }
}