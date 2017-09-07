<?php if (!defined('THINK_PATH')) exit();?><table border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td width="66px" class="tdColor tdC">序号</td>
        <td width="440px" class="tdColor">反馈时间</td>
        <td width="396px" class="tdColor">用户名</td>
        <td width="760px" class="tdColor">内容</td>
    </tr>
    <?php if(is_array($data)): foreach($data as $key=>$v): ?><tr height="40px">
            <td><?php echo ($v["id"]); ?></td>
            <td><?php echo ($v["date"]); ?></td>
            <td><?php echo ($v["username"]); ?></td>
            <td><?php echo ($v["content"]); ?></td>
        </tr><?php endforeach; endif; ?>
    <tr>
        <td colspan="4">
            <?php echo ($show); ?>
        </td>
    </tr>
</table>