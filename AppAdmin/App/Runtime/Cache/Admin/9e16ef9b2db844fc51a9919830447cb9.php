<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/public.css" />
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/page.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/public.js"></script>
</head>
<body>
	<!-- 登录页面头部 -->
	<div class="logHead">
		<img src="/month_3/AppAdmin/Public/Admin/img/logLOGO.png" />
	</div>
	<!-- 登录页面头部结束 -->

	<!-- 登录body -->
	<div class="logDiv">
		<img class="logBanner" src="/month_3/AppAdmin/Public/Admin/img/logBanner.png" />
		<div class="logGet">
			<!-- 头部提示信息 -->
			<div class="logD logDtip">
				<p class="p1">登录</p>
				<p class="p2">管理人员登录</p>
			</div>
			<!-- 输入框 -->
			<form action="<?php echo U('Login/login_do');?>" method="post">
			<div class="lgD">
				<img class="img1" src="/month_3/AppAdmin/Public/Admin/img/logName.png" /><input type="text"
					placeholder="输入用户名" name="u" />
			</div>
			<div class="lgD">
				<img class="img1" src="/month_3/AppAdmin/Public/Admin/img/logPwd.png" /><input type="password"
					placeholder="输入用户密码" name="p" />
			</div>
			<div class="lgD logD2">
				<input class="getYZM" type="text" name="verify" />
				<div class="logYZM">
					<img src="<?php echo U('Login/verify');?>" width="100px" height="30px" id="v"/>
				</div>
				<a href="javascript:;" style="font-size: 10px" onclick="verify()">看不清？换一换</a>
			</div>
			<div class="logC">
				<input type="submit" value="登   录" style="width: 330px; height: 50px; font-size: 18px; color: white; background: #ee7700;border: 0" >
			</div>
			</form>
		</div>
	</div>
	<!-- 登录body  end -->

	<!-- 登录页面底部 -->
	<div class="logFoot">
		<p class="p1">版权所有：北京八维网络科技学院软件工程1508phpb班</p>
		<p class="p2">北京八维网络科技软工1508phpb 登记序号：北京ICP备747474号-1</p>
	</div>
	<!-- 登录页面底部end -->
</body>
</html>
<script>
	function verify(){
		document.getElementById('v').src="<?php echo U('Login/verify');?>?a="+Math.random();
	}
</script>