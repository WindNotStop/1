<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>注册登陆界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"><style type="text/css">
<!--
body {
	margin-bottom: 20px;
}
-->
</style></head>
<body>
<table width="50%" border="0" align="center">
  <tr>
    <td width="50%" align="center" valign="middle">&nbsp;
    <input name="register" type="button" value="注册新用户" onClick="window.location.href='/thinkPHP/index.php/Home/UserService/register'" /></td>
    <td width="50%" align="center" valign="middle">
    <input name="login" type="button" value="用户登录" onClick="window.location.href='/thinkPHP/index.php/Home/UserService/login'"/>&nbsp;</td>
  </tr>
  <tr>
    <td height="140" colspan="2" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center">&nbsp;</td>
  </tr>
</table>
</body>
</html>