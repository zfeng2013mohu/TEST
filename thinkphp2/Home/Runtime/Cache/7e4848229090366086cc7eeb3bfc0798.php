<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <title>登陆 - ThinkPHP demo</title>
      <link rel="stylesheet" type="text/css" href="__PUBLIC__/Css/basic.css" />
      <script type="application/javascript" src="__PUBLIC__/Js/basic.js"></script>
  </head>
  <body>
    <div class="center"><a href="__URL__/register">注册</a></div>
    <form action="__URL__/login" method="post" name="loginForm">
      <table>
          <tr>
              <td>用户名：</td>
              <td><input type="text" name="username" /></td>
          </tr>
          <tr>
              <td>密  码：</td>
              <td><input type="password" name="password" /></td>
          </tr>
          <tr>
              <td></td>
              <td><img src='__APP__/Public/verify/+"?"+Math.random()' onclick='this.src=this.src+"?"+Math.random()' /></td>
          </tr>
          <tr>
              <td>验证码：</td>
              <td><input type="text" name="verify" /></td>
          </tr>
          <tr>
              <td></td>
              <td><button onclick="sub()">登陆</button></td>
          </tr>
      </table>
    </form>
  </body>
</html>