<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>店面 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
    <script type="application/javascript" src="__PUBLIC__/Js/basic.js"></script>
</head>
<body>
<a href="__APP__/Position/index">返回</a>
<h2><?php echo ($place["place_name"]); ?> - 店面</h2>
<table class="form">
    <tr>
        <td>店名</td>
        <td></td>
    </tr>
    <?php if(is_array($store)): foreach($store as $key=>$vo): ?><tr>
            <td><?php echo ($vo["shop_name"]); ?></td>
            <td><a href="__APP__/Menu/index/id/<?php echo ($vo["shop_id"]); ?>">看菜单</a></td>
        </tr><?php endforeach; endif; ?>
</table>
</body>
</html>