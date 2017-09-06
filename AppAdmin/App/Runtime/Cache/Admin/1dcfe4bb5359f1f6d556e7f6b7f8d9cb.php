<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员管理-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/manhuaDate.1.0.css">
	<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
	<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/manhuaDate.1.0.js"></script>
	<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery-1.7.2.min.js"></script>
	<!-- <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/page.js" ></script> -->
	<script type="text/javascript">
$(function (){
  $("input.mh_date").manhuaDate({
    Event : "click",//可选               
    Left : 0,//弹出时间停靠的左边位置
    Top : -16,//弹出时间停靠的顶部边位置
    fuhao : "-",//日期连接符默认为-
    isTime : false,//是否开启时间值默认为false
    beginY : 2017,//年份的开始默认为1949
    endY :2100//年份的结束默认为2049
  });
});
</script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>">首页</a>&nbsp;-&nbsp;<a
					href="#">会员管理</a>&nbsp;-</span>&nbsp;会员管理
			</div>
		</div>

		<div class="page">
			<!-- vip页面样式 -->
			<div class="vip">
				<div class="conform">
						<div class="cfD">
							时间段：<input class="vinput mh_date" type="text" readonly="true" id="s_time" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<input class="vinput mh_date" type="text" readonly="true" id="e_time" />
						</div>
						<div class="cfD">
							<input class="addUser" type="text" placeholder="输入用户名/手机号/城市" id="keyword" />
							<button class="button" onclick="page(1)">搜索</button>
							<a class="addA addA1" href="<?php echo U('Vip/add');?>">新增会员+</a>
						</div>
				</div>
				<!-- vip 表格 显示 -->
				<div class="conShow" id="show">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="250px" class="tdColor">头像</td>
							<td width="188px" class="tdColor">姓名</td>
							<td width="235px" class="tdColor">手机号码</td>
							<td width="220px" class="tdColor">所在城市</td>
							<td width="290px" class="tdColor">会员余额</td>
							<td width="282px" class="tdColor">注册时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
							<td><?php echo ($v["id"]); ?></td>
							<td><div class="onsImg onsImgv">
									<img src="/month_3/AppAdmin/<?php echo ($v["v_thumb"]); ?>" alt="无法显示图片">
								</div></td>
							<td><?php echo ($v["v_name"]); ?></td>
							<td><?php echo ($v["v_tel"]); ?></td>
							<td><?php echo ($v["v_city"]); ?></td>
							<td><span id="<?php echo ($v["id"]); ?>"><?php echo ($v["v_money"]); ?></span>
								<input class="vipinput" type="text" id="v_<?php echo ($v["id"]); ?>" /><a
								class="vsAdd" href="javascript:;" onclick="vip_add(<?php echo ($v["id"]); ?>)">增加</a></td>
							<td><?php echo ($v["v_date"]); ?></td>
							<td><a href="<?php echo U('Vip/update');?>?id=<?php echo ($v["id"]); ?>&page=<?php echo ($page); ?>"><img class="operation"
									src="/month_3/AppAdmin/Public/Admin/img/update.png"></a> <img class="operation delban"
								src="/month_3/AppAdmin/Public/Admin/img/delete.png" onclick="del(<?php echo ($v["id"]); ?>)"></td>
						</tr><?php endforeach; endif; ?>
						<tr>
							<td colspan="8">
								<input type="hidden" value="<?php echo ($page); ?>" id="page">
								<?php echo ($show); ?>
							</td>
						</tr>
					</table>
				</div>
				<!-- vip 表格 显示 end-->
			</div>
			<!-- vip页面样式end -->
		</div>
	</div>
</body>

<script type="text/javascript">
	function page(page){
		var s_time=document.getElementById('s_time').value
		var e_time=document.getElementById('e_time').value
		var keyword=document.getElementById('keyword').value
		var ajax=new XMLHttpRequest();
		ajax.open("get","<?php echo U('Vip/vip_show');?>?page="+page+"&starttime="+s_time+"&endtime="+e_time+"&keyword="+keyword);
		ajax.send(null);
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4 && ajax.status==200){
				document.getElementById('show').innerHTML = ajax.responseText
			}
		}
	}
	function vip_add(id){
		var money=document.getElementById('v_'+id).value
		var ajax=new XMLHttpRequest();
		ajax.open("get","<?php echo U('Vip/vip_add');?>?id="+id+"&money="+money);
		ajax.send(null);
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4 && ajax.status==200){
				document.getElementById(id).innerHTML = ajax.responseText
			}
		}
	}
	function del(id){
		if(confirm("确认删除?")){
			var page=document.getElementById('page').value
			var ajax=new XMLHttpRequest();
			ajax.open("get","<?php echo U('Vip/del');?>?page="+page+"&id="+id);
			ajax.send(null);
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200){
					document.getElementById('show').innerHTML = ajax.responseText
				}
			}
		}
	}
</script>
</html>