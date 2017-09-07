<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广告-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">公共管理</a>&nbsp;-</span>&nbsp;广告管理
			</div>
		</div>
		<div class="page">
			<!-- banner页面样式 -->
			<div class="banner">
				<div class="add">
					<a class="addA" href="<?php echo U('Adv/banner_do');?>">上传广告&nbsp;&nbsp;+</a>
				</div>
				<!-- banner 表格 显示 -->
				<div class="banShow" id="show">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="315px" class="tdColor">图片</td>
							<td width="308px" class="tdColor">名称</td>
							<td width="450px" class="tdColor">链接</td>
							<td width="215px" class="tdColor">是否显示</td>
							<td width="125px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
							<td><?php echo ($v["id"]); ?></td>
							<td><div class="bsImg">
									<img src="/month_3/AppAdmin/<?php echo ($v["thumb"]); ?>">
								</div></td>
							<td><?php echo ($v["name"]); ?></td>
							<td><a class="bsA" href="<?php echo ($v["url"]); ?>"><?php echo ($v["url"]); ?></a></td>
							<td><?php echo ($v["appear"]); ?></td>
							<td><a href="<?php echo U('Adv/update');?>?page=<?php echo ($page); ?>&id=<?php echo ($v["id"]); ?>"><img class="operation"
									src="/month_3/AppAdmin/Public/Admin/img/update.png"></a> <img class="operation delban"
								src="/month_3/AppAdmin/Public/Admin/img/delete.png" onclick="del(<?php echo ($v["id"]); ?>)"></td>
						</tr><?php endforeach; endif; ?>
						<tr>
							<td colspan="6">
								<input type="hidden" value="<?php echo ($page); ?>" id="page">
								<?php echo ($show); ?>
							</td>
						</tr>
					</table>
				</div>
				<!-- banner 表格 显示 end-->
			</div>
			<!-- banner页面样式end -->
		</div>

	</div>
</body>
</html>
<script>
	function page(page){
		var ajax=new XMLHttpRequest();
		ajax.open("get","<?php echo U('Adv/banner_show');?>?page="+page);
		ajax.send(null);
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4 && ajax.status==200){
				document.getElementById('show').innerHTML = ajax.responseText
			}
		}
	}
	function del(id){
		if(confirm("确认删除?")){
			var page=document.getElementById('page').value
			var ajax=new XMLHttpRequest();
			ajax.open("get","<?php echo U('Adv/del');?>?page="+page+"&id="+id);
			ajax.send(null);
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200){
					document.getElementById('show').innerHTML = ajax.responseText
				}
			}
		}
	}
</script>