<?php $activePage = str_replace('/', '', $_SERVER['REQUEST_URI']) ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>
		<?php 
			if (!empty($is_blog)) :
				echo $CI->fuel_blog->page_title($page_title, ' : ', 'right');
			else:
				echo fuel_var('page_title', '');
			endif;
		?>
	</title>

	<meta name="keywords" content="<?php echo fuel_var('meta_keywords')?>">
	<meta name="description" content="<?php echo fuel_var('meta_description')?>">

	<link id="page_favicon" href="<?php echo BASE_URL; ?>assets/images/favicon.ico" rel="icon" type="image/x-icon" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type='text/css'>
	<link href="<?php echo BASE_URL; ?>assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo BASE_URL; ?>assets/css/jquery.bxslider.css" rel="stylesheet" />
	<?php
		echo css('style').css($css);
		if (!empty($is_blog)):
			echo $CI->fuel_blog->header();
		endif;
	?>

</head>
<body>
	<div class="container-fluid main-container container-fluid-no-padding">
		<div class="container-fluid container-fluid-no-padding">
			<header id="header" class="" role="banner">
		        <div class="container">
		            <div id="navbar" class="navbar navbar-default">
		                <div class="navbar-header">
		                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		                        <span class="sr-only">Toggle navigation</span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                        <span class="icon-bar"></span>
		                    </button>
		                    <a class="navbar-brand" href="index.html"></a>
		                </div>
		                <div class="collapse navbar-collapse navbar-right">
		                    <ul class="nav navbar-nav">
		                        <li class="<?php if($activePage=='home' || $activePage==''): echo 'active'; endif; ?>">
		                        	<a href="<?php echo BASE_URL.'' ?>">
		                        		<i class="nav-icons nav-icons-home">&nbsp;</i><br/>
		                        		Home
		                        	</a>
		                        </li>
		                        <li class="<?php if($activePage=='about'): echo 'active'; endif;?>">
		                        	<a href="<?php echo BASE_URL.'about' ?>">
		                        		<i class="nav-icons nav-icons-about">&nbsp;</i><br/>
		                        		About
		                        	</a>
		                        </li>
		                        <li class="<?php if($activePage=='project'): echo 'active'; endif;?>">
		                        	<a href="<?php echo BASE_URL.'project' ?>">
		                        		<i class="nav-icons nav-icons-project">&nbsp;</i><br/>
		                        		Project
		                        	</a>
		                        </li>
		                        <li class="<?php if($activePage=='schedule'): echo 'active'; endif;?>">
		                        	<a href="<?php echo BASE_URL.'schedule' ?>">
		                        		<i class="nav-icons nav-icons-schedule">&nbsp;</i><br/>
		                        		Schedule
		                        	</a>
		                        </li>
		                        <li class="<?php if($activePage=='contact'): echo 'active'; endif;?>">
		                        	<a href="<?php echo BASE_URL.'contact' ?>">
		                        		<i class="nav-icons nav-icons-contact">&nbsp;</i><br/>
		                        		Contact
		                        	</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </header>