<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>注册 - ThinkPHP demo</title>
    <link rel="stylesheet" type="text/css" href="__CSS__/basic.css" />
    <script type="application/javascript" src="__JS__/basic.js"></script>
</head>
<body>
  <form action="__URL__/create" method="post" name="registerForm">
      <table>
          <tr>
              <td>用户名:</td>
              <td><input type="text" name="username" /></td>
          </tr>
          <tr>
              <td>电  话：</td>
              <td><input type="tel" name="telphone" /></td>
          </tr>
          <tr>
              <td>密  码：</td>
              <td><input type="password" name="pass1" /></td>
          </tr>
          <tr>
              <td>确认密码：</td>
              <td><input type="password" name="pass2" /></td>
          </tr>
          <tr>
              <td></td>
              <td><button onclick="register()">点击注册</button></td>
          </tr>
      </table>
  </form>
</body>
</html>