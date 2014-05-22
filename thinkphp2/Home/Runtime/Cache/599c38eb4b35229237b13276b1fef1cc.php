<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>菜单 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <script type="application/javascript" src="__PUBLIC__/Js/basic.js"></script>
</head>
<body>
<a href="__APP__/Store/index/id/<?php echo ($shop["place_id"]); ?>">返回</a>
<h2><?php echo ($shop["shop_name"]); ?> - 菜单</h2>
<form action="__URL__/search/id/<?php echo ($shop["shop_id"]); ?>" method="post" class="search">
    餐名：<input type="text" name="menuName" /><br/>
    价格：<input type="number" name="menuPrice" /><br>
    <input type="submit" value="搜索" />
</form>
<a href="__APP__/Check/index">提交订单</a>
<table class="form">
    <tr>
        <td>餐名</td>
        <td>价格（元）</td>
        <td></td>
    </tr>
    <?php if(is_array($menu)): foreach($menu as $key=>$vo): ?><tr>
            <td><?php echo ($vo["menu_name"]); ?></td>
            <td><?php echo ($vo["menu_price"]); ?></td>
            <td><a href="__APP__/Book/index/menuId/<?php echo ($vo["menu_id"]); ?>">来一份</a></td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
</html>