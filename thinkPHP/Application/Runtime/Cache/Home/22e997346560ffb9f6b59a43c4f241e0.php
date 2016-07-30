<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<link href="/thinkPHP/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<link href="/thinkPHP/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="/thinkPHP/Public/js/jquery.min.js"></script>
<script type="text/javascript" src="/thinkPHP/Public/js/easing.js"></script>
<link rel="stylesheet" href="/thinkPHP/Public/css/flexslider.css" type="text/css" media="screen" />
<link href="/thinkPHP/Public/css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="/thinkPHP/Public/js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="/thinkPHP/Public/js/menu_jquery.js"></script>
<link rel="stylesheet" href="css/etalage.css">
<script src="/thinkPHP/Public/js/jquery.easydropdown.js"></script>
<script src="/thinkPHP/Public/js/jquery.etalage.min.js"></script>
<script>
			jQuery(document).ready(function($){

				$('#etalage').etalage({
					thumb_image_width: 300,
					thumb_image_height: 400,
					source_image_width: 900,
					source_image_height: 1200,
					show_hint: true,
					click_callback: function(image_anchor, instance_id){
						alert('Callback example:\nYou clicked on an image with the anchor: "'+image_anchor+'"\n(in Etalage instance: "'+instance_id+'")');
					}
				});

			});
		</script>

<script type="text/javascript" src="/thinkPHP/Public/js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>


</head>
<body>
<!-- header -->
	<div class="header">
	<div class="top_bg">
<div class="container">
<div class="header_top">
	<div class="logo">
				<a href="index.html"><img src="/thinkPHP/Public/images/shoes/logo.png" alt=""/></a>
			</div>
	<div class="top_right">
		<ul>
			<li><a href="registration.html">Create Account </a></li>|
			<li><a href="contact.html">Contact</a></li>|
			<li class="login" >
						<div id="loginContainer"><a href="#" id="loginButton"><span>Login</span></a>
						    <div id="loginBox">                
						        <form id="loginForm">
						                <fieldset id="body">
						                	<fieldset>
						                          <label for="email">Email Address</label>
						                          <input type="text" name="email" id="email">
						                    </fieldset>
						                    <fieldset>
						                            <label for="password">Password</label>
						                            <input type="password" name="password" id="password">
						                     </fieldset>
						                    <input type="submit" id="login" value="Sign in">
						                	<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
						            	</fieldset>
						            <span><a href="#">Forgot your password?</a></span>
							 </form>
				        </div>
			      </div>
			</li>
		</ul>
	</div>
	<div class="clearfix"> </div>
</div>
</div>
</div>
	</div>
	<div class="head-bann">
		<div class="container">
			<div class="head-nav">
				<span class="menu"> </span>
					<ul class="megamenu skyblue">
			<li><a class="color1" href="index.html">Home</a></li>
			<li class="grid"><a class="color2" href="#">Men's</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="women.html">login</a></li>
									<li><a href="women.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
			<li><a class="color4" href="#">Women's</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="women.html">login</a></li>
									<li><a href="women.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>				
				<li><a class="color5" href="#">Kids</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="women.html">login</a></li>
									<li><a href="women.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color6" href="#">Sports</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="women.html">login</a></li>
									<li><a href="women.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
				<li><a class="color7" href="brands.html">Brands</a>
				</li>
				<li><a class="color8" href="#">Collections</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>shop</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">brands</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>help</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>account</h4>
								<ul>
									<li><a href="women.html">login</a></li>
									<li><a href="women.html">create an account</a></li>
									<li><a href="women.html">create wishlist</a></li>
									<li><a href="women.html">my shopping bag</a></li>
									<li><a href="women.html">brands</a></li>
									<li><a href="women.html">create wishlist</a></li>
								</ul>	
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>my company</h4>
								<ul>
									<li><a href="women.html">trends</a></li>
									<li><a href="women.html">sale</a></li>
									<li><a href="women.html">style videos</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>popular</h4>
								<ul>
									<li><a href="women.html">new arrivals</a></li>
									<li><a href="women.html">men</a></li>
									<li><a href="women.html">women</a></li>
									<li><a href="women.html">accessories</a></li>
									<li><a href="women.html">kids</a></li>
									<li><a href="women.html">style videos</a></li>
								</ul>	
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    			   </div>
				</li>
				<div class="clearfix"> </div>
		 </ul> 
			</div>
		</div>	
	</div>
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
							// Animation complete.
						  });
						});
					</script>
				<!-- script-for-nav -->
		
	<div class="banner1">
		<div class="container">
		</div>
	</div>
<!-- header -->
<!-- content -->
<div class="container">
<div class="women_main">
<div class="col-md-3 span_1_of_right1">
				  <section  class="sky-form">
				   <div class="product_right">
     			<h3 class="m_2">Categories</h3>
     			    <select class="dropdown" tabindex="10" data-settings='{"wrapperClass":"metro"}'>
            			<option value="0">Men's</option>	
						<option value="1">Tempor</option>
						<option value="2">Congue</option>
						<option value="3">Mazim </option>
						<option value="4">Mutationem</option>
						<option value="5">Hendrerit </option>
		           </select>
				   <label class="me"></label>
				   <select class="dropdown" tabindex="50" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Women's</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
				    <label class="wom"></label>
				   <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Kids</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
				    <label class="kid"></label>
			       <select class="dropdown" tabindex="8" data-settings='{"wrapperClass":"metro"}'>
						<option value="1">Sports</option>
						<option value="2">Sub Category1</option>
						<option value="3">Sub Category2</option>
						<option value="4">Sub Category3</option>
			       </select>
				    <label class="spo"></label>
</div>
						
				</section>
                   	 
						<div class="sellers">
							<h3 class="m_2">Best sellers</h3>
								<div class="best">
									<div class="icon">
										<img src="/thinkPHP/Public/images/shoes/sh.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="data">
										<h4><a href="#">Sample Item Title Goes Here</a></h4>
										<p>$120.00</p>
										<h5>$120.00</h5>
									</div>
									<div class="clearfix"></div>
								</div>	
								<div class="best">
									<div class="icon">
										<img src="/thinkPHP/Public/images/shoes/sh.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="data">
									<h4><a href="#">Sample Item Title Goes Here</a></h4>
										<p>$120.00</p>
										<h5>$120.00</h5>
									</div>
									<div class="clearfix"></div>
								</div>	
								<div class="best">
									<div class="icon">
										<img src="/thinkPHP/Public/images/shoes/sh.jpg" class="img-responsive" alt=""/>
									</div>
									<div class="data">
										<h4><a href="#">Sample Item Title Goes Here</a></h4>
										<p>$120.00</p>
										<h5>$120.00</h5>
									</div>
									<div class="clearfix"></div>
								</div>	
						 </div>
					 
						<div class="sellers">
							<h3 class="m_2">Tags</h3>
								<div class="tags">
									<ul>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
										<li><a href="#">Tag,</a></li>
									</ul>
								</div>
						</div>
		       <section  class="sky-form">
					<div class="sellers">
							<h3 class="m_2">Special Offers</h3>
							<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="tittle">
										<img src="/thinkPHP/Public/images/shoes/shoe.jpg" class="img-responsive" alt=""/>
										<h6>Item Title Here</h6>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<a class="show1" href="#">SHOW ME MORE</a>
									</div>
								</li>
								<li>
									<div class="tittle">
										<img src="/thinkPHP/Public/images/shoes/shoe.jpg" class="img-responsive" alt=""/>
										<h6>Item Title Here</h6>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<a class="show1" href="#">SHOW ME MORE</a>
									</div>
								</li>
								<li>	
									<div class="tittle">
										<img src="/thinkPHP/Public/images/shoes/shoe.jpg" class="img-responsive" alt=""/>
										<h6>Item Title Here</h6>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<a class="show1" href="#">SHOW ME MORE</a>
									</div>
								</li>
								<li>	
									<div class="tittle">
										<img src="/thinkPHP/Public/images/shoes/shoe.jpg" class="img-responsive" alt=""/>
										<h6>Item Title Here</h6>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<p>Lorem ipsum dolor sit amet,</p>
										<a class="show1" href="#">SHOW ME MORE</a>
									</div>
								</li>
							</ul>
						</div>
					</section>
				
						<!-- FlexSlider -->
							  <script defer src="/thinkPHP/Public/js/jquery.flexslider.js"></script>
							  <script type="text/javascript">
								$(function(){
								  SyntaxHighlighter.all();
								});
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!-- FlexSlider -->

						</div>
		       </section>
		       

	  </div>
<div class="col-md-9 w_content">
		<div class="women">
			<a href="#"><h4>Enthecwear - <span>4449 itemms</span> </h4></a>
			<ul class="w_nav">
						<li>Sort : </li>
		     			<li><a class="active" href="#">popular</a></li> |
		     			<li><a href="#">new </a></li> |
		     			<li><a href="#">discount</a></li> |
		     			<li><a href="#">price: Low High </a></li> 
		     			<div class="clear"></div>	
		     </ul>
		     <div class="clearfix"></div>	
		</div>
		<!-- grids_of_4 -->
		<div class="grids_of_4">
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/5.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/6.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/7.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
		
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/8.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/9.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				      <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/10.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
		
		  <div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/11.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/12.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			<div class="grid1_of_4">
				<div class="content_box"><a href="details.html">
			   	  <div class="view view-fifth">
			   	   	 <img src="/thinkPHP/Public/images/shoes/13.jpg" class="img-responsive" alt=""/>
				   	   	<div class="mask">
	                        <div class="info">Quick View</div>
			            </div>
				   	  </a>
				   </div>
				    <h4><a href="details.html"> Duis autem</a></h4>
				     <p>It is a long established fact that a reader</p>
				     <span>$99.99</span>
			   	</div>
			</div>
			
			<div class="clearfix"></div>
		</div>
		<!-- end grids_of_4 -->
	</div>
				<div class="clearfix"></div>	
	</div>		
</div>		
<!-- content -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<p>Copyright &copy; 2015.Company name All rights reserved.<a target="_blank" href="http://www.17sucai.com/">商城模板</a></p>
		</div>
	</div>
<!-- footer -->

</body>
</html>