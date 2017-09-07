<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>首页左侧导航</title>
<link rel="stylesheet" type="text/css"
	href="/month_3/AppAdmin/Public/Admin/css/public.css" />
<script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/jquery.min.js"></script>
 <script type="text/javascript" src="/month_3/AppAdmin/Public/Admin/js/public.js" ></script>
<head></head>

<body id="bg">
	<!-- 左边节点 -->
	<div class="container">

		<div class="leftsidebar_box">
			<a href="<?php echo U('Index/main');?>"  target="main"><div class="line">
					<img src="/month_3/AppAdmin/Public/Admin/img/coin01.png" />&nbsp;&nbsp;首页
				</div></a>
			<!-- <dl class="system_log">
			<dt><img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin01.png" /><img class="icon2"src="/month_3/AppAdmin/Public/Admin/img/coin02.png" />
				首页<img class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" /></dt>
		</dl> -->
			<?php if( $_COOKIE['u']== admin ): ?><dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin03.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin04.png" /> 网站管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/User/user');?>" target="main">管理员管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl><?php endif; ?>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin05.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin06.png" /> 公共管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Adv/banner');?>" target="main">广告管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Adv/opinion');?>" target="main">意见反馈</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin07.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin08.png" /> 会员管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Vip/vip');?>" target="main">会员管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin10.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin09.png" /> 行家管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						href="<?php echo U('Admin/Expert/expert');?>" target="main" class="cks">行家管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			<!--想做的话就打开-->
			<!--<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin11.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin12.png" /> 话题管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						href="<?php echo U('Admin/Talks/topic');?>" target="main" class="cks">话题管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin14.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin13.png" /> 心愿管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>

				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Wish/wish');?>" target="main">心愿管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>

			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin15.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin16.png" /> 约见管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Meet/index');?>" target="main">约见管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coin17.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coin18.png" /> 收支管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						class="cks" href="<?php echo U('Admin/Pay/index');?>" target="main">收支管理</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>
			-->
			<dl class="system_log">
				<dt>
					<img class="icon1" src="/month_3/AppAdmin/Public/Admin/img/coinL1.png" /><img
						class="icon2" src="/month_3/AppAdmin/Public/Admin/img/coinL2.png" /> 系统管理<img
						class="icon3" src="/month_3/AppAdmin/Public/Admin/img/coin19.png" /><img
						class="icon4" src="/month_3/AppAdmin/Public/Admin/img/coin20.png" />
				</dt>
				<dd>
					<img class="coin11" src="/month_3/AppAdmin/Public/Admin/img/coin111.png" /><img
						class="coin22" src="/month_3/AppAdmin/Public/Admin/img/coin222.png" /><a
						href="<?php echo U('Admin/System/changePwd');?>" target="main" class="cks">修改密码</a><img
						class="icon5" src="/month_3/AppAdmin/Public/Admin/img/coin21.png" />
				</dd>
			</dl>

		</div>

	</div>
</body>

</html>