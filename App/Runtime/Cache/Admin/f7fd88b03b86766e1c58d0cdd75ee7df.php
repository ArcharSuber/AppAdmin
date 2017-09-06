<?php if (!defined('THINK_PATH')) exit();?><table border="1" cellspacing="0" cellpadding="0">
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