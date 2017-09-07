<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>管理员管理-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
 <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/page.js" ></script>
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;-</span>&nbsp;管理员管理
			</div>
		</div>

		<div class="page">
			<!-- user页面样式 -->
			<div class="connoisseur">
				<div class="conform">
					<form action="<?php echo U('User/add');?>" method="post">
						<div class="cfD">
							<input class="userinput" type="text" placeholder="输入用户名" name="username" />&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;&nbsp;
							<input class="userinput vpr" type="password" placeholder="输入用户密码" name="pwd" />
							<input type="submit" value="添加" class="userbtn">
						</div>
					</form>
				</div>
				<!-- user 表格 显示 -->
				<div class="conShow" id="show">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="400px" class="tdColor">用户名</td>
							<td width="630px" class="tdColor">添加时间</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr height="40px">
							<td><?php echo ($v["id"]); ?></td>
							<td><?php echo ($v["username"]); ?></td>
							<td><?php echo ($v["date"]); ?></td>
							<td><a href="<?php echo U('User/update');?>?page=<?php echo ($page); ?>&id=<?php echo ($v["id"]); ?>"><img class="operation"
									src="/month_3/AppAdmin/Public/Admin/img/update.png"></a> <img class="operation delban"
								src="/month_3/AppAdmin/Public/Admin/img/delete.png" onclick="del(<?php echo ($v["id"]); ?>)"></td>
						</tr><?php endforeach; endif; ?>
						<tr>
							<td colspan="4">
								<input type="hidden" value="<?php echo ($page); ?>" id="page">
								<?php echo ($show); ?>
							</td>
						</tr>
					</table>
				</div>
				<!-- user 表格 显示 end-->
			</div>
			<!-- user页面样式end -->
		</div>

	</div>
</body>

<script type="text/javascript">
// 广告弹出框
$(".delban").click(function(){
  $(".banDel").show();
});
$(".close").click(function(){
  $(".banDel").hide();
});
$(".no").click(function(){
  $(".banDel").hide();
});
//分页
function page(page){
	var ajax=new XMLHttpRequest();
	ajax.open("get","<?php echo U('User/listshow');?>?page="+page);
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
		ajax.open("get","<?php echo U('User/del');?>?page="+page+"&id="+id);
		ajax.send(null);
		ajax.onreadystatechange=function(){
			if(ajax.readyState==4 && ajax.status==200){
				document.getElementById('show').innerHTML = ajax.responseText
			}
		}
	}
}
// 广告弹出框 end
</script>
</html>