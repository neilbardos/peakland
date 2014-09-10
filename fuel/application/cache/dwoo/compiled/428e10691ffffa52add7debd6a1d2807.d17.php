<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><!DOCTYPE html>
<html lang="en-US">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
 	<title>
		<!--__FUEL_MARKER__0-->Peakland::Schedule	</title>

	<meta name="keywords" content="<!--__FUEL_MARKER__1-->Peakland::Schedule">
	<meta name="description" content="<!--__FUEL_MARKER__2-->Peakland::Schedule">

	<link id="page_favicon" href="http://peakland_/assets/images/favicon.ico" rel="icon" type="image/x-icon" />
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" type='text/css'>
	<link href="http://peakland_/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="http://peakland_/assets/css/jquery.bxslider.css" rel="stylesheet" />
	<link href="/assets/css/style.css?c=-62169955200" media="all" rel="stylesheet"/>
	
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
		                        <li class="">
		                        	<a href="http://peakland_/">
		                        		<i class="nav-icons nav-icons-home">&nbsp;</i><br/>
		                        		Home
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="http://peakland_/about">
		                        		<i class="nav-icons nav-icons-about">&nbsp;</i><br/>
		                        		About
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="http://peakland_/project">
		                        		<i class="nav-icons nav-icons-project">&nbsp;</i><br/>
		                        		Project
		                        	</a>
		                        </li>
		                        <li class="active">
		                        	<a href="http://peakland_/schedule">
		                        		<i class="nav-icons nav-icons-schedule">&nbsp;</i><br/>
		                        		Schedule
		                        	</a>
		                        </li>
		                        <li class="">
		                        	<a href="http://peakland_/contact">
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
		<!--__FUEL_MARKER__3--><div class="container-fluid carousel-div shadow">
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
<div class="container-fluid main-content-div">
    <div class="container container-fluid-no-padding">
    	<div class="col-md-8 about-div">
    		<h1 class="about-hdr">About Us</h1>
    		<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at.
			</p>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at.
			</p>
    	</div>
    	<div class="col-md-4 contact-form-div">
    	<h4><i class="fa fa-envelope"></i> Send us a message</h4>
    		&lt;?php
    			if($session->flashdata('success')){
    				echo '<div class="alert alert-success">Thank you for contacting us. We will get back to you shortly.</div>';
    			}}
    		<?php echo $this->scope["form"];?>

    	</div>
        
    </div>
</div>	</section>
	
		</div>
</div>
<div class="container-fluid container-fluid-no-padding footer-container">
		<footer>
			<div class="container container-fluid-no-padding footer-top">
	        	<div class="col-md-6">
	        		<div class="footer-header-text">Related Links</div>
	        		<div class="col-md-3 col-md-offset-1 related-links">
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        		</div>
	        		<div class="col-md-3 col-md-offset-1 related-links">
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        			<a href="">Lorem Ipsum</a>
	        		</div>
	        	</div>
	        	<div class="col-md-6">
	        		<div class="footer-header-text col-lg-12 pull-right">Newsletter Sign Up</div>
	        		<div class="row newsletter-signup col-lg-12 pull-right container-fluid-no-padding">
					  <div class="container-fluid-no-padding">
					    <div class="input-group">
					      <input type="text" class="form-control cols-md-12" placeholder="email@example.com">
					      <span class="input-group-btn">
					        <button class="btn btn-default btn-primary" type="button">Subscribe</button>
					      </span>
					    </div><!-- /input-group -->
					  </div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
					<div class="row col-lg-12 get-connected pull-right container-fluid-no-padding">
					  	<div class="col-md-3 pull-right get-connected-social container-fluid-no-padding">
					  		<ul class="col-lg-12 pull-right">
					  			<li class="facebook"><a href="http://facebook.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					  			<li class="twitter"><a href="http://twitter.com">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
					  		</ul>
					  	</div>
					  	<div class="col-md-6 pull-right get-connected-text container-fluid-no-padding">Get connected:</div>
					</div><!-- /.row -->
	        	</div>
	        </div>
	        <div class="container-fliud footer-bottom">
		    	<div class="container">
			        <div class="copyright span4">
			            <p>
			            	<a href=""><img src="http://peakland_/assets/images/common/logo.png" class="footer-logo"/></a>&nbsp;&nbsp; |&nbsp;&nbsp;
			            	Peakland Properties Inc.  © 2013&nbsp;&nbsp; |&nbsp;&nbsp;
			            	Privacy Policy
			            </p>
			        </div>
		        </div>
		    </div>
	    </footer>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="http://peakland_/assets/js/jquery.bxslider.min.js"></script>
<script src="/assets/js/main.js?c=-62169955200" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
	$(document).ready(function(){ 
	  $('.slider2').bxSlider({ 
	    slideWidth: 410,
	    minSlides: 2,
	    maxSlides: 2,
	    slideMargin: 15,
	    pager: false,
	    nextSelector: '#slider-next',
		prevSelector: '#slider-prev',
	    nextText: '<i class="fa fa-chevron-right fa-3"></i>',
  		prevText: '<i class="fa fa-chevron-left"></i>'
	  });
	});
</script>
</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>