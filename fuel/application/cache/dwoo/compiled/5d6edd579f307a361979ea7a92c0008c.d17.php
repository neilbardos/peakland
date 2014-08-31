<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
 	<title>
		<!--__FUEL_MARKER__0-->Home : Home	</title>

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->">
	<meta name="description" content="<!--__FUEL_MARKER__2-->">

	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>
	<link href="/assets/css/main.css?c=" media="all" rel="stylesheet"/>
	
</head>
<body>
	<div class="page">
		<div class="wrapper">
					
	<section id="main_inner">
		<!--__FUEL_MARKER__3--><?php echo $this->getSecurityPolicy()->callMethod($this, $this->scope["load"], 'view', array('_blocks/header'));?>

this is the home page	</section>
	
			</div>
	</div>
	<div class="wrapper">
	<footer class="row footer">
		<nav class="mainnav">
			<ul>
				<li class="first active"><a href="http://www.getfuelcms.com" target="_blank">Home</a></li>
				<li><a href="http://getfuelcms.com/features" target="_blank">Features</a></li>
				<li><a href="http://getfuelcms.com/developers" target="_blank">Developers</a></li>
				<li><a href="http://getfuelcms.com/support" target="_blank">Support</a></li>
				<li class="last"><a href="http://getfuelcms.com/blog" target="_blank">Blog</a></li>
			</ul>
		</nav>
		<p class="colophon">FUEL CMS is developed with love by <a href="http://thedaylightstudio.com" target="_blank">Daylight Studio</a> <object type="image/svg+xml" width="25" height="25" data="/assets/images/_template_icons.svg#daylight"></object> &copy; 2014 Run for Daylight LLC, All Rights Reserved.</p>
	</footer>
</div>

<script src="/assets/js/main.js?c=" type="text/javascript" charset="utf-8"></script>
	
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>