<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>修改密码-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
</head>
<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">系统管理</a>&nbsp;-</span>&nbsp;修改密码
			</div>
		</div>
		<form action="<?php echo U('System/changepwd_do');?>" method="post" onsubmit="return fun()">
		<div class="page ">
			<!-- 修改密码页面样式 -->

			<div class="bacen">
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;管理员UID：&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (cookie('i')); ?></div>
				<div class="bbD">管理员用户名：&nbsp;&nbsp;&nbsp;&nbsp;<?php echo (cookie('u')); ?></div>
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;输入旧密码：<input type="password" class="input3"
						onblur="checkpwd1()" id="pwd1" /> <img class="imga"
						src="/month_3/AppAdmin/Public/Admin/img/ok.png" /><img class="imgb" src="/month_3/AppAdmin/Public/Admin/img/no.png" />
				</div>
				<div class="bbD">
					&nbsp;&nbsp;&nbsp;&nbsp;输入新密码：<input type="password" class="input3"
						onblur="checkpwd2()" id="pwd2" name="pwd" /> <img class="imga"
						src="/month_3/AppAdmin/Public/Admin/img/ok.png" /><img class="imgb" src="/month_3/AppAdmin/Public/Admin/img/no.png" />
				</div>
				<div class="bbD">
					再次确认密码：<input type="password" class="input3" onblur="checkpwd3()"
						id="pwd3" /> <img class="imga" src="/month_3/AppAdmin/Public/Admin/img/ok.png" /><img
						class="imgb" src="/month_3/AppAdmin/Public/Admin/img/no.png" />
				</div>
				<div class="bbD">
					<p class="bbDP">
						<input type="submit" value="提交" class="btn_ok btn_yes">
						<input type="reset" value="重置" class="btn_ok btn_no">
					</p>
				</div>
			</div>

			<!-- 修改密码页面样式end -->
		</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	var flag=0;
function checkpwd1() {
	var user = document.getElementById('pwd1').value.trim();
	var ajax = new XMLHttpRequest();
	ajax.open("get", "<?php echo U('System/check_pwd');?>?pwd=" + user);
	ajax.send(null);
	ajax.onreadystatechange = function () {
		if (ajax.readyState == 4 && ajax.status == 200) {
			if (ajax.responseText == "no") {
				$("#pwd1").parent().find(".imgb").show();
				$("#pwd1").parent().find(".imga").hide();
				flag=0;
			} else {
				$("#pwd1").parent().find(".imga").show();
				$("#pwd1").parent().find(".imgb").hide();
				flag=1;
			}
		}
	}
	return flag;
}
function checkpwd2(){
var user = document.getElementById('pwd2').value.trim();
  $("#pwd2").parent().find(".imga").show();
  $("#pwd2").parent().find(".imgb").hide();
	return true;
}
function checkpwd3(){
var user = document.getElementById('pwd3').value.trim();
var pwd = document.getElementById('pwd2').value.trim();
 if (user == pwd) {
  $("#pwd3").parent().find(".imga").show();
  $("#pwd3").parent().find(".imgb").hide();
	 return true;
 }else{
   $("#pwd3").parent().find(".imgb").show();
  $("#pwd3").parent().find(".imga").hide();
	 return false;
 }
}
	function fun(){
		if(checkpwd1() && checkpwd2() &&checkpwd3()){
			return true;
		}else{
			return false;
		}
	}
</script>
</html>