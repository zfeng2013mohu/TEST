<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>区域 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/basic.css" />
    <script type="application/javascript" src="__JS__/Js/basic.js"></script>
</head>
<body>
<h2>请选择你所在的区域 - 订餐</h2>
<table class="form">
    <tr>
        <td>区域</td>
        <td></td>
    </tr>
    <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
            <td><?php echo ($vo["place_name"]); ?></td>
            <td><a href="__APP__/Store/index/id/<?php echo ($vo["place_id"]); ?>">去店面</a></td>
        </tr><?php endforeach; endif; else: echo "" ;endif; ?>
</table>
</body>
</html>