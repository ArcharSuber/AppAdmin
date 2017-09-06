<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
 <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/page.js" ></script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;<a href="<?php echo U('Adv/banner');?>">广告管理</a>&nbsp;-</span>&nbsp;广告修改
			</div>
		</div>
		<br><br><br>
		<form action="<?php echo U('Adv/update_do');?>?page=<?php echo ($page); ?>" method="post" enctype="multipart/form-data">
			<div style="margin-left: 100px;">
				<input type="hidden" value="<?php echo ($data["thumb"]); ?>" name="thumb">
				<input type="hidden" value="<?php echo ($data["id"]); ?>" name="id">
				<input type="hidden" value="<?php echo ($data["path"]); ?>" name="path">
						<div class="bbD">
							图片：
							<span><font color="gray">原图:</font></span>
							<img src="/month_3/AppAdmin/<?php echo ($data["thumb"]); ?>" alt="无法显示图片">
							<input type="file" name="myfile">
						</div>
						<div class="bbD">
							名称：
							<input type="text" name="name" value="<?php echo ($data["name"]); ?>" class="input3">
						</div>
						<div class="bbD">
							链接：
							<input type="text" name="url" value="<?php echo ($data["url"]); ?>" class="input3">
						</div>
						<div class="bbD">
							是否显示：
							<?php if( $data["appear"] == 是 ): ?><input type="radio" value="是" name="appear" checked="checked">是
								<input type="radio" value="否" name="appear">否
								<?php else: ?>
								<input type="radio" value="是" name="appear" >是
								<input type="radio" value="否" name="appear" checked="checked">否<?php endif; ?>
						</div>
			</div>
						<div class="bbD">
							<p class="bbDP">
								<input type="submit" value="修改" class="btn_ok btn_yes">
								<input type="reset" value="重置" class="btn_ok btn_no">
							</p>
						</div>
		</form>
			<!-- banner页面样式end -->
		</div>
</body>
</html>