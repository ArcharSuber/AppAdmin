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
					href="#">行家管理</a>&nbsp;-&nbsp;<a
					href="<?php echo U('Expert/expert');?>">行家管理</a>-&nbsp;</span>&nbsp;行家添加
			</div>
		</div>
		<form action="<?php echo U('Expert/add_do');?>" method="post" enctype="multipart/form-data">
		<div style="margin-left: 80px;">
			<div class="bbD">
				姓名：&nbsp;&nbsp;&nbsp;
				<input type="text" name="name" class="input3">
			</div>
			<div class="bbD">
				手机号：
				<input type="tel" name="tel" class="input3">
			</div>
			<div class="bbD">
				所在城市：
				<select name="v_id">
					<option value="">--请选择--</option>
					<?php if(is_array($city)): foreach($city as $key=>$v): ?><option value="<?php echo ($v["v_id"]); ?>"><?php echo ($v["v_city"]); ?></option><?php endforeach; endif; ?>
				</select>
			</div>
			<div class="bbD">
				选择头像：
				<input type="file" name="myfile">
			</div>
			<div class="bbD">
				任职机构：
				<input type="text" name="struct" class="input3">
			</div>
			<div class="bbD">
				行家头衔：
				<input type="text" name="header" class="input3">
			</div>
			<br>
			工作年限：<select name="work_time">
			<option value="">--请选择--</option>
			<option value="1年以内">1年以内</option>
			<option value="1-3年">1-3年</option>
			<option value="3-5年">3-5年</option>
			<option value="5年以上">5年以上</option>
		</select>
			<br>
			<br>
			审核状态：<label><input
				type="radio" checked="checked" name="styleshoice1" value="未审核"/>&nbsp;未审核</label> <label><input
				type="radio" name="styleshoice1" value="已通过" />&nbsp;已通过</label> <label class="lar"><input
				type="radio" name="styleshoice1" value="不通过" />&nbsp;不通过</label>
			<br>
			<br><br>
			推荐状态：<label><input
				type="radio" checked="checked" name="styleshoice2" value="是"/>&nbsp;是</label><label><input
				type="radio" name="styleshoice2" value="否" />&nbsp;否</label>
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