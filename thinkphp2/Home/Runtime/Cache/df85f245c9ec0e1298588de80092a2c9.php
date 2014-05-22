<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>订单 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <script type="application/javascript" src="__PUBLIC__/Js/basic.js"></script>
</head>
<body>
<a href="__APP__/Position/index">返回区域选择页面</a>
<h2>确认订单</h2>
    <form action="__URL__/checkin" method="post" name="checkinForm">
        <table class="form">
            <tr>
                <td>餐名</td>
                <td>单价（元）</td>
                <td>份数</td>
            </tr>
            <?php if(is_array($book)): $i = 0; $__LIST__ = $book;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($vo["menu_name"]); ?></td>
                    <td><?php echo ($vo["menu_price"]); ?></td>
                    <td><input type="number" name="<?php echo ($vo["menu_id"]); ?>"  value="<?php echo ($vo["num"]); ?>" /></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        <table class="form">
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="bookName" /></td>
            </tr>
            <tr>
                <td>电话：</td>
                <td><input type="tel" name="telphone" /></td>
            </tr>
            <tr>
                <td>地址：</td>
                <td><input type="text" name="address" /></td>
            </tr>
            <tr>
                <td>时间：</td>
                <td><input type="text" name="time" /></td>
            </tr>
        </table>
        <div><input type="submit" value="提交订单" /></div>
    </form>
</body>
</html>