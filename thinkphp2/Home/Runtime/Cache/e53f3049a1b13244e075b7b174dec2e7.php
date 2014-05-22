<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>当前已提交订单信息 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <script type="application/javascript" src="__PUBLIC__/Js/basic.js"></script>
</head>
<body>
    <h2>订单已成功提交：</h2>
    <table class="form">
        <tr><th>订餐相关信息：</th></tr>
        <tr>
            <td>姓名：</td>
            <td><?php echo ($bookInfo["order_name"]); ?></td>
        </tr>
        <tr>
            <td>电话：</td>
            <td><?php echo ($bookInfo["order_tel"]); ?></td>
        </tr>
        <tr>
            <td>送达地址：</td>
            <td><?php echo ($bookInfo["order_address"]); ?></td>
        </tr>
        <tr>
            <td>送达时间：</td>
            <td><?php echo ($bookInfo["order_time"]); ?></td>
        </tr>
        <tr>
            <td>订餐日期：</td>
            <td><?php echo ($bookInfo["order_crt_date"]); ?></td>
        </tr>
    </table>
    <table class="form">
        <tr>
            <td>餐名</td>
            <td>数量</td>
            <td>价格</td>
        </tr>
        <?php if(is_array($ocInfo)): foreach($ocInfo as $key=>$vo): ?><tr>
                <td><?php echo ($vo["m_name"]); ?></td>
                <td><?php echo ($vo["quantity"]); ?></td>
                <td><?php echo ($vo["price"]); ?></td>
            </tr><?php endforeach; endif; ?>
        <tr><th>总消费金额：<?php echo ($totalMoney); ?></th></tr>
    </table>
</body>
</html>