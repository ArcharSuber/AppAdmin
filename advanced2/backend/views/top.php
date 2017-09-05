<?php
use yii\helpers\Url;
?>
<div class="topbar-wrap white">
<div class="topbar-inner clearfix">
    <div class="topbar-logo-wrap clearfix">
        <h1 class="topbar-logo none"><a href="<?php Url::toRoute('/site/index')?>" class="navbar-brand">后台管理</a></h1>
        <ul class="navbar-list clearfix">
            <li><a class="on" href="<?php Url::toRoute('/site/index')?>">首页</a></li>
            <li><a href="<?php echo '../../frontend/web/index.php?r=site/index'?>" target="_blank">网站首页</a></li>
        </ul>
    </div>
    <div class="top-info-wrap">
        <ul class="top-info-list clearfix">
            <li><a href="<?php echo Url::toRoute('/site/admin')?>">管理员</a></li>
            <li><a href="<?php echo Url::toRoute('/site/password-change')?>">修改密码</a></li>
            <li><a href="<?=Url::toRoute('/site/logout')?>" data-method="post" onclick="return out()">退出<?='(' . Yii::$app->user->identity->username . ')';?></a></li>
        </ul>
    </div>
</div>
</div>
<script>
    function out(){
        if(confirm("确认退出？")){
            return true;
        }else{
            return false;
        }
    }
</script>