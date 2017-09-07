<?php if (!defined('THINK_PATH')) exit();?><table border="1" cellspacing="0" cellpadding="0">
    <tr>
        <td width="66px" class="tdColor tdC">序号</td>
        <td width="250px" class="tdColor">头像</td>
        <td width="188px" class="tdColor">姓名</td>
        <td width="235px" class="tdColor">手机号码</td>
        <td width="220px" class="tdColor">所在城市</td>
        <td width="290px" class="tdColor">会员余额</td>
        <td width="282px" class="tdColor">注册时间</td>
        <td width="130px" class="tdColor">操作</td>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr>
            <td><?php echo ($v["id"]); ?></td>
            <td><div class="onsImg onsImgv">
                <img src="/month_3/AppAdmin/<?php echo ($v["v_thumb"]); ?>" alt="无法显示图片">
            </div></td>
            <td><?php echo ($v["v_name"]); ?></td>
            <td><?php echo ($v["v_tel"]); ?></td>
            <td><?php echo ($v["v_city"]); ?></td>
            <td><span id="<?php echo ($v["id"]); ?>"><?php echo ($v["v_money"]); ?></span>
                <input class="vipinput" type="text" id="v_<?php echo ($v["id"]); ?>" /><a
                        class="vsAdd" href="javascript:;" onclick="vip_add(<?php echo ($v["id"]); ?>)">增加</a></td>
            <td><?php echo ($v["v_date"]); ?></td>
            <td><a href="<?php echo U('Vip/update');?>?id=<?php echo ($v["id"]); ?>&page=<?php echo ($page); ?>"><img class="operation"
                                                   src="/month_3/AppAdmin/Public/Admin/img/update.png"></a> <img class="operation delban"
                                                                                                   src="/month_3/AppAdmin/Public/Admin/img/delete.png" onclick="del(<?php echo ($v["id"]); ?>)"></td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="8">
            <input type="hidden" value="<?php echo ($page); ?>" id="page">
            <?php echo ($show); ?>
        </td>
    </tr>
</table>