<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
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
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;意见反馈
			</div>
		</div>
		<div class="cfD">
			时间段：<input class="vinput mh_date" type="text" readonly="true" id="starttime" name="starttime"/>&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
			<input class="vinput mh_date" type="text" readonly="true" id="endtime" name="endtime"/>
		<button class="button" onclick="page(1)">搜索</button>
		</div>
		<div class="page">
			<!-- opinion 页面样式 -->
			<div class="opinion">
				<!-- opinion 表格 显示 -->
				<div class="opShow" id="show">
					<table border="0" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="440px" class="tdColor">反馈时间</td>
							<td width="396px" class="tdColor">用户名</td>
							<td width="760px" class="tdColor">内容</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr height="40px">
							<td><?php echo ($v["id"]); ?></td>
							<td><?php echo ($v["date"]); ?></td>
							<td><?php echo ($v["username"]); ?></td>
							<td><?php echo ($v["content"]); ?></td>
						</tr><?php endforeach; endif; ?>
						<tr>
							<td colspan="4">
								<?php echo ($show); ?>
							</td>
						</tr>
					</table>
				</div>
				<!-- opinion 表格 显示 end-->
			</div>
			<!-- 页面样式end -->
		</div>
	</div>
</body>
</html>
<script>
	function page(page){
		var starttime=document.getElementById('starttime').value
		var endtime=document.getElementById('endtime').value
		var ajax=new XMLHttpRequest();
		ajax.open("get","<?php echo U('Admin/Adv/opinion_show');?>?page="+page+"&starttime="+starttime+"&endtime="+endtime);
		ajax.send(null);
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4 && ajax.status==200){
				document.getElementById('show').innerHTML = ajax.responseText
			}
		}
	}
</script>