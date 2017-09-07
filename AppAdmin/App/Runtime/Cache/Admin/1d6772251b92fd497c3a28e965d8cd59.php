<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;<a href="<?php echo U('Adv/banner');?>">广告管理</a>&nbsp;-</span>&nbsp;上传广告
			</div>
		</div>
		<br><br><br>
		<form action="<?php echo U('Adv/add_do');?>" method="post" enctype="multipart/form-data">
			<div style="margin-left: 100px;">
						<div class="bbD">
							图片：
							<input type="file" name="myfile">
						</div>
						<div class="bbD">
							名称：
							<input type="text" name="name" class="input3">
						</div>
						<div class="bbD">
							链接：
							<input type="text" name="url" class="input3">
						</div>
						<div class="bbD">
							是否显示：
							<input type="radio" value="是" name="appear" checked="checked">是
							<input type="radio" value="否" name="appear">否
						</div>
			</div>
							<div class="bbD">
								<p class="bbDP">
									<input type="submit" value="提交" class="btn_ok btn_yes">
									<input type="reset" value="重置" class="btn_ok btn_no">
								</p>
							</div>
		</form>
			<!-- banner页面样式end -->
		</div>
</body>
</html>