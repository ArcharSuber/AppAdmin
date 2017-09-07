<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>行家-有点</title>
<link rel="stylesheet" type="text/css" href="/month_3/AppAdmin/Public/Admin/css/css.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
<!-- <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/page.js" ></script> -->
</head>

<body>
	<div id="pageAll">
		<div class="pageTop">
			<div class="page">
				<img src="/month_3/AppAdmin/Public/Admin/img/coin02.png" /><span><a href="<?php echo U('Index/index');?>" target="_parent">首页</a>&nbsp;-&nbsp;<a
					href="#">行家管理</a>&nbsp;-</span>&nbsp;行家管理
			</div>
		</div>

		<div class="page">
			<!-- banner页面样式 -->
			<div class="connoisseur">
				<div class="conform">
						<div class="cfD">
							工作年限：<select id="work_time">
							<option value="">--------请  选  择--------</option>
							<option value="1年以内">1年以内</option>
							<option value="1-3年">1-3年</option>
							<option value="3-5年">3-5年</option>
							<option value="5年以上">5年以上</option>
						</select> 审核状态：<label><input
								type="radio" name="styleshoice1" value="未审核"/>&nbsp;未审核</label> <label><input
								type="radio" name="styleshoice1" value="已通过" />&nbsp;已通过</label> <label class="lar"><input
								type="radio" name="styleshoice1" value="不通过" />&nbsp;不通过</label>
							推荐状态：<label><input
								type="radio" name="styleshoice2" value="是"/>&nbsp;是</label><label><input
								type="radio" name="styleshoice2" value="否" />&nbsp;否</label>
						</div>
						<div class="cfD">
							<input class="addUser" type="text" placeholder="输入用户名/手机号/城市" id="keyword"/>
							<button class="button" onclick="page(1)">搜索</button>
							<a class="addA addA1" href="<?php echo U('Expert/add');?>">添加行家+</a>
						</div>
				</div>
				<!-- banner 表格 显示 -->
				<div class="conShow" id="show">
					<table border="1" cellspacing="0" cellpadding="0">
						<tr>
							<td width="66px" class="tdColor tdC">序号</td>
							<td width="170px" class="tdColor">头像</td>
							<td width="135px" class="tdColor">姓名</td>
							<td width="145px" class="tdColor">手机号码</td>
							<td width="140px" class="tdColor">所在城市</td>
							<td width="140px" class="tdColor">任职机构</td>
							<td width="145px" class="tdColor">工作年限</td>
							<td width="145px" class="tdColor">行家头衔</td>
							<td width="145px" class="tdColor">添加时间</td>
							<td width="140px" class="tdColor">审核状态</td>
							<td width="150px" class="tdColor">是否推荐</td>
							<td width="130px" class="tdColor">操作</td>
						</tr>
						<?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
							<td><?php echo ($v["id"]); ?></td>
							<td><div class="onsImg">
									<img src="/month_3/AppAdmin/<?php echo ($v["thumb"]); ?>">
								</div></td>
							<td><?php echo ($v["name"]); ?></td>
							<td><?php echo ($v["tel"]); ?></td>
							<td><?php echo ($v["v_city"]); ?></td>
							<td><?php echo ($v["struct"]); ?></td>
							<td><?php echo ($v["work_time"]); ?></td>
							<td><?php echo ($v["header"]); ?></td>
							<td><?php echo ($v["date"]); ?></td>
							<td><?php echo ($v["styleshoice1"]); ?></td>
							<td><?php echo ($v["styleshoice2"]); ?></td>
							<td><a href="<?php echo U('Expert/update');?>?id=<?php echo ($v["id"]); ?>&page=<?php echo ($page); ?>"><img class="operation"
									src="/month_3/AppAdmin/Public/Admin/img/update.png"></a> <img class="operation delban"
								src="/month_3/AppAdmin/Public/Admin/img/delete.png" onclick="del(<?php echo ($v["id"]); ?>)"></td>
						</tr><?php endforeach; endif; ?>
							<tr>
								<td colspan="12">
									<input type="hidden" value="<?php echo ($page); ?>" name="page" id="page">
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
		var check="";
		var check2="";
		var keyword=document.getElementById('keyword').value
		var work_time=document.getElementById('work_time').value
		var content=document.getElementsByName('styleshoice1')
		for(var i in content){
			if(content[i].checked == true){
				check=content[i].value
			}
		}
		var content2=document.getElementsByName('styleshoice2')
		for(var i in content2){
			if(content2[i].checked == true){
				check2=content2[i].value
			}
		}
		var ajax=new XMLHttpRequest();
		ajax.open("get","<?php echo U('Expert/show');?>?page="+page+"&keyword="+keyword+"&work_time="+work_time+"&styleshoice1="+check+"&styleshoice2="+check2);
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
			ajax.open("get","<?php echo U('Expert/del');?>?page="+page+"&id="+id);
			ajax.send(null);
			ajax.onreadystatechange=function(){
				if(ajax.readyState==4 && ajax.status==200){
					document.getElementById('show').innerHTML = ajax.responseText
				}
			}
		}
	}
</script>