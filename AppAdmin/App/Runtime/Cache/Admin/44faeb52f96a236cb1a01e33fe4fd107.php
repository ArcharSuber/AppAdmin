<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>会员管理-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>">首页</a>&nbsp;-&nbsp;<a
					href="#">会员管理</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Vip/vip');?>">会员管理</a>-&nbsp;</span>&nbsp;会员添加
			</div>
		</div>
		<form action="<?php echo U('Vip/add_do');?>" method="post" enctype="multipart/form-data">
		<div style="margin-left: 80px;">
			<div class="bbD">
				姓名：&nbsp;&nbsp;&nbsp;
				<input type="text" name="v_name" class="input3">
			</div>
			<div class="bbD">
				手机号：
				<input type="tel" name="v_tel" class="input3">
			</div>
			<div class="bbD">
				所在城市：
				<select name="v_id">
					<option value="">--请选择--</option>
					<?php if(is_array($data)): foreach($data as $key=>$v): ?><option value="<?php echo ($v["v_id"]); ?>"><?php echo ($v["v_city"]); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
			<div class="bbD">
				选择头像：
				<input type="file" name="myfile">
			</div>
		</div>
		<div class="bbD" style="margin-left: 50px;">
			<p class="bbDP">
				<input type="submit" value="提交" class="btn_ok btn_yes">
				<input type="reset" value="重置" class="btn_ok btn_no">
			</p>
		</div>
		</form>
	</div>
</body>
</html>