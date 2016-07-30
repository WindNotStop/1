<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>主页面</title>
<!--    <link rel="stylesheet" href="">-->
</head>
<body>
   <form action="/thinkPHP/index.php/Home/UserService/search" id="search" name="search" method="post">
       <table width="20%">
           <tr>
               <td>
                   <select id="level" name="level">
                        <option value="default">&ndash;选择层次 &ndash;</option>
                        <option value="levela">启蒙</option>
                        <option value="levelb">进阶</option>
                        <option value="levelc">大师</option>
                    </select>    
               </td>
               <td>
                   <input id="condition" name="condition" type="text" placeholder="请输入信息">
               </td>
               <td>
                   <input id="submit" name="submit" type="submit" value="搜索" onclick="check_level();return false;">
               </td>
           </tr>
       </table>
        <details>
            <summary>热门</summary>
            <table width="16%">
                <tr>
                    <td>
                        <input type="submit" id="piano" name="piano" value="钢琴" onclick="ck(this);return false;"> 
                    </td>
                    <td>
                        <input type="submit" id="dance" name="dance" value="舞蹈" onclick="ck(this);return false;">
                    </td>
                    <td>
                        <input type="submit" id="guitar" name="guitar" value="吉他" onclick="ck(this);return false;">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" id="violin" name="violin" value="小提琴" onclick="ck(this);return false;">
                    </td>
                    <td>
                        <input type="submit" id="cello" name="cello" value="大提琴" onclick="ck(this);return false;">
                    </td>
                    <td>
                        <input type="submit" id="sax" name="sax" value="萨克斯" onclick="ck(this);return false;">
                    </td>
                </tr>
            </table>
        </details>
       </form>
	
		<?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><form action="/thinkPHP/index.php/Home/UserService/look" id="look" name="look" method="post">
		 <table>
		 <tr>
		 <img src="</thinkPHP/Public/Head/<?php echo ($vo["head"]); ?>" alt="头像" onclick=""> 
		 <input type="text" name="phone" value=<?php echo ($vo["phone"]); ?> hidden="readOnly="true"">
		 </tr>
		<tr>
		
		<td><?php echo ($vo["name"]); ?></td>
		<td>年龄：<?php echo ($vo["age"]); ?>岁</td>
		<td>地址：<?php echo ($vo["location"]); ?></td>
		</tr>
		<tr>
		<td>自我评价：<?php echo ($vo["description"]); ?></td>
		</tr>
		</table>
		<button type="submit">提交</button>
		</form><?php endforeach; endif; else: echo "" ;endif; ?>
	
    <div id="mainpage">
        <table width="20%">
            <tr>
                <td>
                    <input type="button" id="btnr" name="btnr" value="---">
                </td>
                <td>
                    <input type="button" id="main" name="main" value="主页" onclick="changeMf2()">
                </td>
                <td>
                    <input type="button" id="PC" name="PC" value="个人中心" onclick="changeMf()">
                </td>
            </tr>
        </table>
    </div>
</body>
    <script type="text/javascript">
        function changeMf(){
//            var ifra = document.getElementById("mf");
//            ifra.src = "Personalhomepage.html";
//            var ifrah = document.getElementById("hf");
//            ifrah.src = "index.html";

            window.location.href="/thinkPHP/index.php/Home/UserService/PersonalhomepageSelf";
        }
        function changeMf2(){
//            var ifra = document.getElementById("mf");
//            ifra.src = "mainInf.html";
//            var ifrah = document.getElementById("hf");
//            ifrah.src = "index.html";
            window.location.href="/thinkPHP/index.php/Home/UserService/mainInf";
        }
        function check_level() {
        var level = document.getElementById("level");
        var index = level.selectedIndex;
        var str = level.options[index].value;
        if (str == "default") {
        alert("请选择等级");
        } else {
            document.search.submit();
        }
    }
    function ck(btn){
        var level = document.getElementById("level");
        var index = level.selectedIndex;
        var str = level.options[index].value;
        if (str == "default") {
        alert("请选择等级");
        } else {
             var inp = document.getElementById("condition");
             var bt = btn.value;
             inp.value = bt;
             document.search.submit();
        }
    }
    </script>
</html>