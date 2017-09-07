<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>头部-有点</title>
<link rel="stylesheet" type="text/css"
	href="/month_3/AppAdmin/Public/Admin/css/public.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/public.js"></script>
</head>

<body>
	<!-- 头部 -->
	<div class="head">
		<div class="headL">
			<img class="headLogo" src="/month_3/AppAdmin/Public/Admin/img/headLogo.png" />
		</div>
		<div class="headR">
			<p class="p1">欢迎 <?php echo (cookie('u')); ?> 登录</p>
			<p class="p2">
				<a href="<?php echo U('Admin/System/changePwd');?>" class="resetPWD"
					target="main">重置密码</a>&nbsp;&nbsp;<a
					href="<?php echo U('Login/out');?>" target="_parent" class="goOut"
					onclick="return out()">退出</a>
			</p>
		</div>
		<!-- onclick="{if(confirm(&quot;确定退出吗&quot;)){return true;}return false;}" -->
	</div>
</body>
</html>
<script>
	function out(){
		if(confirm("确认退出吗?")){
			return true;
		}else{
			return false;
		}
	}
</script>