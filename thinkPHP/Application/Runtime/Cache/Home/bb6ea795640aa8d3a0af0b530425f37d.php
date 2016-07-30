<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>个人主页</title>
</head>
<body>
<!--这是点下修改按钮后的学生个人主页-->
<form id="phform" name="phform" id="phform" action="/thinkPHP/index.php/Home/UserService/upload" method="post"  enctype="multipart/form-data" >
  上传头像：   <input type="file" name="head" accept="image/jpg,image/png"/>
  <td style="text-align: right">
          <input type="submit" name="submit" id="submit" value="提交" onclick="">
      </td>
      <td>
          <input type="button" name="reset" id="reset" value="重置" onclick="">
      </td>
  </form>
<form id="phform" name="phform" id="phform" action="/thinkPHP/index.php/Home/UserService/saveSuccess" method="post"  enctype="multipart/form-data" >
    <table width="100%" border="0">
  <tr>
    <td colspan="2" style="text-align: center">
        头像：<img src="<?php echo $_SESSION['head']; ?> " alt="头像" onclick="" ><br>
   
    </td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">姓名：<input name="name" id="name" type="text" placeholder="请输入姓名" value="<?php echo $_SESSION['name']; ?>"></td>
  </tr>
  <tr>
   <td colspan="2" style="text-align: center"> 年龄：<input name="age" id="age" type="text" placeholder="请输入年龄" value="<?php echo $_SESSION['age']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">昵称：<input name="nick" id="nick" type="text" placeholder="请输入昵称" value="<?php echo $_SESSION['nick']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">性别：<input name="sex" id="sex" type="text" placeholder="请输入性别" value="<?php echo $_SESSION['sex']; ?>"></td>
  </tr>
  <tr>
   <td colspan="2" style="text-align: center"> 邮箱：<input name="email" id="email" type="text" placeholder="请输入邮箱" value="<?php echo $_SESSION['email']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">手机号:<?php echo $_SESSION['phone']; ?></td>
  </tr>
   <tr>
    <td colspan="2" style="text-align: center">身份证：<input name="identify" id="identfy" type="text" placeholder="请输入身份证号" value="<?php echo $_SESSION['identify']; ?>"></td>
  </tr>
  <tr>
    <td colspan="2" style="text-align: center">地址：<input name="location" id="location" type="text" placeholder="请输入居住地址" value="<?php echo $_SESSION['location']; ?>"></td>
  </tr>
  <tr>
      <td colspan="2" style="text-align: center">个人简介：<br><textarea name="description" id="description" cols="45" rows="10"  ><?php echo $_SESSION['description']; ?></textarea></td>
  </tr>
  <tr>
    <td width="40%" style="text-align: right"><label>艺术水平</label><br></td>
  </tr>
  <tr>
    <td style="text-align: right">
        入门:
    </td>
    <td width="60%">
        <input type="checkbox" name="levela[]" value="钢琴">钢琴</input>
        <input type="checkbox" name="levela[]" value="舞蹈">舞蹈</input>
        <input type="checkbox" name="levela[]" value="吉他">吉他</input> 
        <input type="checkbox" name="levela[]" value="小提琴">小提琴</input>
        <input type="checkbox" name="levela[]" value="大提琴">大提琴</input>
        <input type="checkbox" name="levela[]" value="萨克斯">萨克斯</input> 
        
    </td>
  </tr>
  <tr>
    <td style="text-align: right">
        进阶:
    </td>
    <td>
        <input type="checkbox" name="levelb[]" value="钢琴">钢琴</input>
        <input type="checkbox" name="levelb[]" value="舞蹈">舞蹈</input>
        <input type="checkbox" name="levelb[]" value="吉他">吉他</input> 
        <input type="checkbox" name="levelb[]" value="小提琴">小提琴</input>
        <input type="checkbox" name="levelb[]" value="大提琴">大提琴</input>
        <input type="checkbox" name="levelb[]" value="萨克斯">萨克斯</input> 
        
    </td>
  </tr>
  <tr>
    <td style="text-align: right">
        大师:
    </td>
    <td>
        <input type="checkbox" name="levelc[]" value="钢琴">钢琴</input>
        <input type="checkbox" name="levelc[]" value="舞蹈">舞蹈</input>
        <input type="checkbox" name="levelc[]" value="吉他">吉他</input> 
        <input type="checkbox" name="levelc[]" value="小提琴">小提琴</input>
        <input type="checkbox" name="levelc[]" value="大提琴">大提琴</input>
        <input type="checkbox" name="levelc[]" value="萨克斯">萨克斯</input> 
    </td>
  </tr>
  <tr>
      <td style="text-align: right">
          <input type="submit" name="submit" id="submit" value="提交" onclick="">
      </td>
      <td>
          <input type="button" name="reset" id="reset" value="重置" onclick="">
      </td>
      <td style="text-align: left">
          <input type="button" name="return" id="return" value="返回" onclick="re()">
      </td>
  </tr>
</table>
</form>
</body>
    <script type="text/javascript">
        function re(){
            window.location.href="/thinkPHP/index.php/Home/UserService/index";
        }
    </script>
</html>