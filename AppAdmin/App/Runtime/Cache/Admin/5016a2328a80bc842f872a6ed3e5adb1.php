<?php if (!defined('THINK_PATH')) exit();?><table border="1" cellspacing="0" cellpadding="0">
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