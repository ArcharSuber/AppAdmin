<?php
$this->title='后台主页';
?>
<div class="main-wrap">
    <div class="crumb-wrap">
        <div class="crumb-list"><i class="icon-font">&#xe06b;</i><span>欢迎来到单身男女</span></div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>快捷操作</h1>
        </div>
        <div class="result-content">
            <div class="short-wrap">
                <a href="{:U('Blog/blog_list')}"><i class="icon-font">&#xe001;</i>新增博文</a>
                <a href="{:U('Lable/lable_list')}"><i class="icon-font">&#xe005;</i>新增标签</a>
                <a href="{:U('Cate/cate_list')}"><i class="icon-font">&#xe048;</i>新增分类</a>
                <a href="#"><i class="icon-font">&#xe01e;</i>博文评论</a>
            </div>
        </div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>网站站长信息</h1>
        </div>
        <div class="result-content">
            <ul class="sys-info-list">
                <li>
                    <label class="res-lab">网站联系邮箱：</label><span class="res-info">{$data.EMAIL}</span>
                </li>
                <li>
                    <label class="res-lab">联系人：</label><span class="res-info">{$data.CONTACT}</span>
                </li>
                <li>
                    <label class="res-lab">联系电话：</label><span class="res-info">{$data.TELPHONE}</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="result-wrap">
        <div class="result-title">
            <h1>版权信息</h1>
        </div>
        <div class="result-content">
            <ul class="sys-info-list">
                <li>
                    <label class="res-lab">网站版权：</label><span class="res-info">RC&copy;{$data.RIGHTCOPY}</span>
                </li>
                <li>
                    <label class="res-lab">备案ICP：</label><span class="res-info">{$data.ICP}</span>
                </li>
                <li>
                    <label class="res-lab">地址：</label><span class="res-info">{$data.ADDRESS}</span>
                </li>
            </ul>
        </div>
    </div>
</div>