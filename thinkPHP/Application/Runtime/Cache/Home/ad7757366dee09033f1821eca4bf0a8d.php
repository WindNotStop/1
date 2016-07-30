<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>登陆界面</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"></head>
<body>
<form action="/thinkPHP/index.php/Home/UserService/logins" method="post">
<table width="50%" border="0" align="center">
  <tr>
    <td width="50%" align="center" valign="middle" class="abc"><label>手机号</label></td>
    <td width="50%" align="center" valign="middle"><input name="phone" type="text" placeholder="输入手机号" required/>      &nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="abc"><label>密&nbsp;码</label></td>
    <td align="center" valign="middle"><input name="password" type="password" placeholder="输入密码" required/>&nbsp;</td>
  </tr>
  <tr>
    <td align="center" valign="middle" class="abc"><label>验证码</label></td>
    <td align="center" valign="middle"><input name="valid" type="text" value="" size="16" required="required">
      &nbsp;<img  src="/thinkPHP/index.php/Home/UserService/valid" onClick="self.location.reload()" /></td>
  </tr>
  <tr>
    <td height="25" align="center" valign="top" class="abc"><input name="profession" type="radio" value="1" />学生</td>
    <td align="center" valign="top" class="abc"><input name="profession" type="radio" value="2" checked="checked" />
      <span class="STYLE3"></span>老师</td>
  </tr>
  <tr>
    <td height="37" align="center" valign="middle"><input name="reset" type="reset" value="重 置">&nbsp;</td>
    <td align="center" valign="middle"><input name="submit" type="submit" value="提 交">&nbsp;</td>
  </tr>
   <tr>
    <td>&nbsp;</td>
	<td align="center" class="abc"><input name="back" type="button" value="返 回" onClick="window.location.href='/thinkPHP/index.php/Home/UserService/logon'"/>&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>