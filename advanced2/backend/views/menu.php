<div class="sidebar-wrap">
    <div class="sidebar-title">
        <h1>菜单</h1>
    </div>
    <div class="sidebar-content">
        <ul class="sidebar-list">
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>常用操作</a>
                <ul class="sub-menu">
                    <li><a href="{:U('Blog/blog_list')}"><i class="icon-font">&#xe005;</i>博文管理</a></li>
                    <li><a href="{:U('Lable/lable_list')}"><i class="icon-font">&#xe006;</i>标签管理</a></li>
                    <li><a href="{:U('Cate/cate_list')}"><i class="icon-font">&#xe004;</i>分类管理</a></li>
                    <li><a href="design.html"><i class="icon-font">&#xe012;</i>评论管理</a></li>
                    <li><a href="{:U('Friends/friends')}"><i class="icon-font">&#xe052;</i>友链管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe003;</i>超级管理</a>
                <ul class="sub-menu">
                    <li><a href="{:U('Man/account')}"><i class="icon-font">&#xe046;</i>管理员管理</a></li>
                    <li><a href="system.html"><i class="icon-font">&#xe045;</i>用户管理</a></li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="icon-font">&#xe018;</i>系统管理</a>
                <ul class="sub-menu">
                    <li><a href="{:U('Man/show_man')}"><i class="icon-font">&#xe014;</i>个人信息</a></li>
                    <li><a href="{:U('System/system')}"><i class="icon-font">&#xe017;</i>系统设置</a></li>
                    <li><a href="{:U('System/cache_rm')}" onclick="return cache_rm()"><i class="icon-font">&#xe037;</i>清理缓存</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
<script>
    function cache_rm(){
        if(confirm("确认清除缓存？")){
            return true;
        }else{
            return false;
        }
    }
</script>