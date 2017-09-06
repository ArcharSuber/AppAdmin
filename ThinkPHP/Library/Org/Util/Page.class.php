<?php
namespace Org\Util;
class Page{
    public $num;
    public $page_num;
    public $page_count;
    public $page;
    public $onclick="page";
    public $page_start_end=2;
    public $config;
    public $href;
    /**
     * 初始化总数据和每页显示的数据，默认为10条
     * @param $num
     * @param int $page_num
     */
    function __construct($num,$page_num=10){
        $this->num=$num;
        $this->page_num=$page_num;
        $this->page=isset($_GET['page'])?$_GET['page']:1;//检测变量是否存在
    }

    /**
     * 分页
     * @return string
     */
    function show()
    {
        $str="";
        //计算总页数
        $this->page_count = $page_count = ceil($this->num / $this->page_num);
        //当前页码前显示的页码  当前页码后显示的页码 页码的处理
        $start=$this->page-$this->page_start_end<1?1:$this->page-$this->page_start_end;
        $end=$this->page+$this->page_start_end>$page_count?$page_count:$this->page+$this->page_start_end;
        for ($i = $start; $i <= $end; $i++) {
            $str .= "<a href='?".$this->onclick."=" . $i . "'>" . $i . "</a>&nbsp;";
        }
        //上一页
        if($this->page>=1){
            $pagv=$this->page-1<1?1:$this->page-1;
            $pagv="<a href='?".$this->onclick."=".$pagv."'>".$this->config['left']."</a>";
        }
        //下一页
        if($this->page<=$page_count){
            $next=$this->page+1>$page_count?$page_count:$this->page+1;
            $next="<a href='?".$this->onclick."=".$next."'>".$this->config['right']."</a>";
        }
        return $pagv.$str.$next;
    }

    /**
     * 设置函数
     * @param $config
     */
    function SetConfig($config){
       $this->config=$config;
    }

    /**
     * Ajax分页
     * @return string
     */
    function Ajaxpage(){
        $str="";
        //计算总页数
        $this->page_count = $page_count = ceil($this->num / $this->page_num);
        //当前页码前显示的页码  当前页码后显示的页码 页码的处理
        $start=$this->page-$this->page_start_end<1?1:$this->page-$this->page_start_end;
        $end=$this->page+$this->page_start_end>$page_count?$page_count:$this->page+$this->page_start_end;
        for ($i = $start; $i <= $end; $i++) {
            $str .= "<a href='javascript:;' onclick='".$this->onclick."(".$i.")'>" . $i . "</a>&nbsp;";
        }
        //上一页
        $pagv=$this->page-1<1?1:$this->page-1;
        $pagv="<a href='javascript:;' onclick='".$this->onclick."(".$pagv.")'>".$this->config['left']."</a>";
        //下一页
        $next=$this->page+1>$page_count?$page_count:$this->page+1;
        $next="<a href='javascript:;' onclick='".$this->onclick."(".$next.")'>".$this->config['right']."</a>";
        return $pagv.$str.$next."<span style='font-size:12px;'>(第".$this->page."页/共".$page_count."页)</span><b>共".$this->num."条数据记录</b>";
    }
}
/*$obj=new Page(100,5);
$config=array(
    'left'=>'<<',
    'right'=>'>>'
);
$obj->SetConfig($config);
echo $obj->show();*/
?>