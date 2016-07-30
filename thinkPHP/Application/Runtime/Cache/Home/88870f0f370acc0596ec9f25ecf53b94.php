<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport"
	content="width=device-width target-densitydpi=device-dpi, initial-scale=1.0,maximum-scale=1.0,user-scalable=yes">
<link href="/thinkPHP/Public/css/bootstrap.min.css" rel="stylesheet">
<script src="http://apps.bdimg.com/libs/jquery/2.0.0/jquery.min.js"></script>
<script
	src="http://apps.bdimg.com/libs/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<style type="text/css">
.btm {
	text-align: right;
}

</style>
<title>详细</title>
</head>
<body>

<div class="container-fluid">
	<div class="row-fluid">
		<div class="span12">
			<div class="table-responsive">
<?php if($roletype == son): ?><table class="table">
   <caption>详细信息：</caption>
   <thead>
      <tr>
         <th>名称</th>
         <th>参数</th>
      </tr>
   </thead>
   <tbody>
      <tr>
         <td>头像</td>
         <td><img src="/thinkPHP/Public/upload/head/<?php echo ($head); ?> " class="img-responsive"></td>
      </tr>
      <tr>
         <td>姓名</td>
         <td><?php echo ($name); ?></td>
      </tr>
       <tr>
         <td>职位</td>
         <td><?php echo ($role); ?></td>
      </tr>
       <tr>
         <td>所属上级</td>
         <td><?php echo ($top); ?></td>
      </tr>
      <tr>
         <td></td>
         <td class="btm">      <button type="button" class="btn btn-success active " onclick="location.href='/thinkPHP/index.php/Home/Admin/save'">编辑</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success active " onclick="location.href='/thinkPHP/index.php/Home/Admin/main'">返回</button></td>
      </tr>
   </tbody>
    
</table>

<?php elseif($roletype == computer): ?>
<table class="table">
   <caption>详细信息：</caption>
   <thead>
      <tr>
         <th>名称</th>
         <th>参数</th>
      </tr>
   </thead>
   <tbody>
    <tr>
         <td>图片</td>
         <td> <img src="/thinkPHP/Public/upload/computer/<?php echo ($pic); ?> " class="img-responsive"></td>
      </tr>
      <tr>
         <td>系列</td>
         <td><?php echo ($type); ?></td>
      </tr>
      <tr>
         <td>子系列</td>
         <td><?php echo ($son_type); ?></td>
      </tr>
       <tr>
         <td>尺寸</td>
         <td><?php echo ($size); ?></td>
      </tr>
       <tr>
         <td>颜色</td>
         <td><?php echo ($colour); ?></td>
      </tr>
       <tr>
         <td>配置代码</td>
         <td><?php echo ($config_code); ?></td>
      </tr>
      <tr>
         <td>媒体价</td>
         <td><?php echo ($media_price); ?></td>
      </tr>
       <tr>
         <td>拿货价</td>
         <td><?php echo ($take_price); ?></td>
      </tr>
       <tr>
         <td>CPU</td>
         <td><?php echo ($cpu); ?></td>
      </tr>
       <tr>
         <td>运行内存</td>
         <td><?php echo ($ram); ?></td>
      </tr>
      <tr>
         <td>硬盘内存</td>
         <td><?php echo ($rom); ?></td>
      </tr>
       <tr>
         <td>显示器</td>
         <td><?php echo ($resolution); ?></td>
      </tr>
       <tr>
         <td>操作系统</td>
         <td><?php echo ($os); ?></td>
      </tr>
        <tr>
         <td>显卡</td>
         <td><?php echo ($video_card); ?></td>
      </tr>
       <tr>
         <td>售后</td>
         <td><?php echo ($after_sale); ?></td>
      </tr>
       <tr>
         <td>电池</td>
         <td><?php echo ($battery); ?></td>
      </tr>
       <tr>
         <td>键盘</td>
         <td><?php echo ($keyboard); ?></td>
      </tr>
      <tr>
         <td>摄像头</td>
         <td><?php echo ($camera); ?></td>
      </tr>
       <tr>
         <td>音响</td>
         <td><?php echo ($speaker); ?></td>
      </tr>
       <tr>
         <td>其他信息</td>
         <td><?php echo ($other); ?></td>
      </tr>
      <tr>
         <td></td>
   
         <td class="btm"><button type="button" class="btn btn-success active " onclick="location.href='/thinkPHP/index.php/Home/Admin/save'">编辑</button>&nbsp;&nbsp;&nbsp;&nbsp;<button type="button" class="btn btn-success active " onclick="location.href='/thinkPHP/index.php/Home/Admin/main'">返回</button></td>
      </tr>
   </tbody>
    
</table><?php endif; ?>


</div>

</div>

</div>

		
</div>
	
</body>
</html>