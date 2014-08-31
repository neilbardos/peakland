<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>
		<!--__FUEL_MARKER__0-->Home : Peakland	</title>

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->Home : Peakland">
	<meta name="description" content="<!--__FUEL_MARKER__2-->Home : Peakland">

	<link id="page_favicon" href="http://peakland/assets/images/favicon.ico" rel="icon" type="image/x-icon" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type='text/css'>
	<!-- Optional theme -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css" type='text/css'>

	<link href="/assets/css/style.css?c=" media="all" rel="stylesheet"/>
	
</head>
<body>
	<div class="container-fluid main-container container-fluid-no-padding">
		<div class="container-fluid container-fluid-no-padding">
			<header id="header" class="shadow-bottom" role="banner">
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
		                        <li class="active">
		                        	<a href="#main-slider">
		                        		<i class="nav-icons nav-icons-home">&nbsp;</i><br/>
		                        		Home
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="#main-slider">
		                        		<i class="nav-icons nav-icons-about">&nbsp;</i><br/>
		                        		About
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="#main-slider">
		                        		<i class="nav-icons nav-icons-project">&nbsp;</i><br/>
		                        		Project
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="#main-slider">
		                        		<i class="nav-icons nav-icons-schedule">&nbsp;</i><br/>
		                        		Schedule
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="#main-slider">
		                        		<i class="nav-icons nav-icons-contact">&nbsp;</i><br/>
		                        		Contact
		                        	</a>
		                        </li>
		                    </ul>
		                </div>
		            </div>
		        </div>
		    </header>	
	<section id="main_inner">
		<!--__FUEL_MARKER__3--><div class="container-fluid carousel-div">
	<div class="container">
		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
				<div class="item active">
					<img src="/assets/images/home/img1.jpg" alt="...">
					<div class="carousel-caption">
						...
					</div>
				</div>
				<div class="item">
					<img src="/assets/images/home/img2.jpg" alt="...">
					<div class="carousel-caption">
						...
					</div>
				</div>
                                <div class="item">
					<img src="/assets/images/home/img3.jpg" alt="...">
					<div class="carousel-caption">
						...
					</div>
				</div>
			</div>

			<!-- Controls -->
			<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			</a>
		</div>
	</div>
</div>
<p>this is the home page</p>	</section>
	
		</div>
</div>
<div class="container-fluid container-fluid-no-padding footer-container">
		<footer>
			<div class="container container-fluid-no-padding footer-top">
	        	<div class="col-md-6">
	        		<div class="footer-header-text">Related Links</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="footer-header-text">Newsletter Sign Up</div>
	        	</div>
	        </div>
	        <div class="container-fliud footer-bottom">
		    	<div class="container">
			        <div class="copyright span4">
			            <p>
			            	<a href=""><img src="http://peakland/assets/images/common/logo.png" class="footer-logo"/></a>&nbsp;&nbsp; |&nbsp;&nbsp;
			            	Peakland Properties Inc.  © 2013&nbsp;&nbsp; |&nbsp;&nbsp;
			            	Privacy Policy
			            </p>
			        </div>
			        <div class="social span8">
			            <a class="facebook" href=""></a>
			            <a class="dribbble" href=""></a>
			            <a class="twitter" href=""></a>
			            <a class="pinterest" href=""></a>
			        </div>
		        </div>
		    </div>
	    </footer>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="/assets/js/main.js?c=" type="text/javascript" charset="utf-8"></script>
	
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>