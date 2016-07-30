<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
</head>
<body>
<!--这是查看学生自己主页-->
<form id="phform" name="phform" id="phform" action="/thinkPHP/index.php/Home/UserService/uploadH" method="post"  enctype="multipart/form-data" >
  上传头像：   <input type="file" name="head" />
  <td style="text-align: right">
          <input type="submit" name="submit" id="submit" value="提交" onclick="">
      </td>
      <td>
          <input type="button" name="reset" id="reset" value="重置" onclick="">
      </td>
  </form>
  <form id="phform" name="phform" id="phform" action="/thinkPHP/index.php/Home/UserService/uploadC" method="post"  enctype="multipart/form-data" >
  上传证书： <div>
    <input type="file" name="coa[]" />
    </div>
     <div>
    <input type="file" name="coa[]" />
    </div>
     <div>
    <input type="file" name="coa[]" />
    </div>
  <td style="text-align: right">
          <input type="submit" name="submit" id="submit" value="提交" onclick="">
      </td>
      <td>
          <input type="button" name="reset" id="reset" value="重置" onclick="">
      </td>
  </form>
  <form id="phform" name="phform" id="phform" action="/thinkPHP/index.php/Home/UserService/uploadV" method="post"  enctype="multipart/form-data" >
  上传视频：  
<div>
<input type="file" name="video[]" />
  </div>
  <div>
<input type="file" name="video[]" />
  </div>
  <div>
<input type="file" name="video[]" />
  </div>
  <td style="text-align: right">
          <input type="submit" name="submit" id="submit" value="提交" onclick="">
      </td>
      <td>
          <input type="button" name="reset" id="reset" value="重置" onclick="">
      </td>
  </form>
<form id="phform" name="phform" id="phform" action="" method="post">
    <table width="100%" border="0">
  <tr>
    <td colspan="2" style="text-align: center">
    <?php if($_SESSION['user']['phone'] == null): ?><a href="/thinkPHP/index.php/Home/UserService/logon">还未登录，请登录</a>
    <?php else: ?>   <img src="<?php echo '/thinkPHP/Public/Head/'.$_SESSION['user']['head']; ?> "><br><?php endif; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">姓名:<?php echo $_SESSION['user']['name']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">年龄:<?php echo $_SESSION['age']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><!--用户昵称 -->昵称:<?php echo $_SESSION['nick']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><!--用户性别  -->性别:<?php echo $_SESSION['sex']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><!--用户邮箱  -->邮箱:<?php echo $_SESSION['email']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><!--用户手机号  -->手机号:<?php echo $_SESSION['phone']; ?></td>
  </tr>
   <tr>
    <td colspan="2" style="text-align: center"><!--用户身份证号  -->身份证号:<?php echo $_SESSION['identify']; ?></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center"><!--用户居住地址  -->住址:<?php echo $_SESSION['location']; ?></td>
  </tr>
  <tr>
      <td colspan="2" style="text-align: center"><!--用户个人简介  -->个人简介:<?php echo $_SESSION['description']; ?></td>
  </tr>
  <tr>
    <td width="40%" colspan="2" style="text-align: center" ><label>艺术水平</label><br></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center" >
         启蒙:<?php echo $_SESSION['levela']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center" >
         进阶:<?php echo $_SESSION['levelb']; ?>
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center" >
         大师:<?php echo $_SESSION['levelc']; ?>
    </td>
  </tr>
  <tr>
      <td>
          <input type="button" name="mo" id="mo" value="修改" onclick="modify()">
      </td>
      <td>
          <input type="button" name="return" id="return" value="返回" onclick="re()">
      </td>
  </tr>
</table>
</form>
</body>
    <script type="text/javascript">
        function modify(){
            window.location.href="/thinkPHP/index.php/Home/UserService/PersonalhomepageInChange";
        }
        function re(){
            window.location.href="/thinkPHP/index.php/Home/UserService/index";
        }
    </script>
</html>