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
<title>欢迎您：<?php echo ($name); ?></title>
</head>
<body>
	<div class="container-fluid">
		<div class="row-fluid">
			<div class="span12">
				<table width="100%" align="center"
					style="border-style: solid; border-width: 0">
					<tr>
						<td width="100%"><span style="font-size:1.2em; color:#145588; font-family:'宋体';font-style:'bold'  ">欢迎你<?php echo ($_SESSION['admin']['name']); ?>(<?php echo ($_SESSION['admin']['role']); ?>)</span> </td>
					</tr>

					<tr>
						<td width="100%"><nav class="navbar navbar-default"
								role="navigation">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle"
									data-toggle="collapse" data-target="#example-navbar-collapse">
									<span class="sr-only">切换导航</span> <span class="icon-bar"></span>
									<span class="icon-bar"></span> <span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="#">课戴表管理系统 </a>
							</div>
							<div>
							<div class="collapse navbar-collapse"
								id="example-navbar-collapse">
								<ul class="nav navbar-nav">
									<li><a href="/thinkPHP/index.php/Home/Admin/show/type/son">课戴表</a></li>
									<li><a href="/thinkPHP/index.php/Home/Admin/show/type/computer">电脑</a></li>
								</ul>
							</div>
							</nav></td>
					</tr>
					
					
					
					
					
						<?php if($type == computer): ?><tr>
						<td>
   <form class="bs-example bs-example-form" role="form" action="/thinkPHP/index.php/Home/Admin/search/roletype/computer" method="post">
      <div class="row">
         <div class="col-lg-6">
            <div class="input-group">
               <div class="input-group-btn">
                  <button type="button" class="btn btn-default 
                     dropdown-toggle" data-toggle="dropdown">
                     排序 
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                     <li><a href="/thinkPHP/index.php/Home/Admin/sort/roletype/computer/sort/type">系列</a></li>
                     <li><a href="/thinkPHP/index.php/Home/Admin/sort/roletype/computer/sort/colour">颜色</a></li>
                     <li><a href="/thinkPHP/index.php/Home/Admin/sort/roletype/computer/sort/media_price">媒体价</a></li>
                  </ul>
               </div><!-- /btn-group -->
               <input name="search" type="text" class="form-control" placeholder="请输入配置代码">
            </div><!-- /input-group -->
            <div class="btm">
             <button type="submit" class="btn btn-default" >搜索</button>
             </div>
         </div><!-- /.col-lg-6 --><br>
      </div><!-- /.row -->
   </form>
						
						</td>
						</tr>	
					<tr>
						<td>
					
							<table class="table">
								<caption>电脑</caption>
								<thead>
									<tr>
										<th>系列/子系列</th>
										<th>配置代码</th>
										<th>拿货价</th>
										<th>详情/编辑</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($computer)): $i = 0; $__LIST__ = $computer;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($data["type"]); ?>/<?php echo ($data["son_type"]); ?></td>
										<td><?php echo ($data["config_code"]); ?></td>
										<td><?php echo ($data["take_price"]); ?></td>
										<td><a href="/thinkPHP/index.php/Home/Admin/edit/type/computer/id/<?php echo ($data["config_code"]); ?>">编辑</a></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
								 </table>
						</td>
					</tr>	
					
					
					
					
					
								<?php elseif($type == son): ?>
													<tr>
						<td>
   <form class="bs-example bs-example-form" role="form" action="/thinkPHP/index.php/Home/Admin/search/roletype/son" method="post">
      <div class="row">
         <div class="col-lg-6">
            <div class="input-group">
               <div class="input-group-btn">
                  <button type="button" class="btn btn-default 
                     dropdown-toggle" data-toggle="dropdown">
                     排序 
                     <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu">
                     <li><a href="/thinkPHP/index.php/Home/Admin/sort/roletype/son/sort/role">职位</a></li>
                  </ul>
               </div><!-- /btn-group -->
               <input name="search" type="text" class="form-control" placeholder="请输入姓名">
            </div><!-- /input-group -->
            <div class="btm">
             <button type="submit" class="btn btn-default" >搜索</button>
             </div>
         </div><!-- /.col-lg-6 --><br>
      </div><!-- /.row -->
   </form>
						
						</td>
						</tr>	
									<tr>
							<td>
								<table class="table">
								<caption>课戴表</caption>
								<thead>
									<tr>
										<th>姓名</th>
										<th>职位</th>
										<th>所属上级</th>
										<th>详情/编辑</th>
									</tr>
								</thead>
								<tbody>
									<?php if(is_array($son)): $i = 0; $__LIST__ = $son;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$data): $mod = ($i % 2 );++$i;?><tr>
										<td><?php echo ($data["name"]); ?></td>
										<td><?php echo ($data["role"]); ?></td>
										<td><?php echo ($data["top"]); ?></td>
										<td><a href="/thinkPHP/index.php/Home/Admin/edit/type/son/id/<?php echo ($data["name"]); ?>">编辑</a></td>
									</tr><?php endforeach; endif; else: echo "" ;endif; ?>
								</tbody>
								 </table><?php endif; ?>
								 
							
							 
						</td>
					</tr>




				</table>
			</div>
		</div>
	</div>

</body>
</html>