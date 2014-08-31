<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?><div class="container-fluid carousel-div shadow">
	<div class="container text-center">
		<div id="carousel-example-generic" class="carousel slide col-md-11" data-ride="carousel">
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
    <div class="container">
        <div class="container-fluid container-fluid-no-padding col-md-8 home-content-left">
	        <div class="slider2">
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar1"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar2"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar3"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar4"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar5"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar6"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar7"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar8"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar9"></div>
			  <div class="slide"><img src="http://placehold.it/350x150&text=FooBar10"></div>
			</div>
			<div class="outside-controls container-fluid container-fluid-no-padding col-md-12">
			  <i id="slider-prev" class="fa fa-prev"></i>
			  <i id="slider-next" class="fa fa-next"></i>
			</div>
			<h1>We work for you!</h1>
			<p>
				Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Praesent vestibulum molestie lacus. Aenean nonummy hendrerit mauris. Phasellus porta. Fusce suscipit varius mi. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla dui. Fusce feugiat malesuada odio. Morbi nunc odio, gravida at.
			</p>
		</div>
        <div class="container-fluid container-fluid-no-padding col-md-4 home-content-right">
	        <div class="col-md-12 no-padding-right"><iframe width="100%" height="250" src="//www.youtube.com/embed/VTfQ7licgJ8" frameborder="0" allowfullscreen></iframe></div>
	        <div class="col-md-12 no-padding-right">
	        	<h5>Our Main Services</h5>
	        	<ul class="main-services">
	        		<li><i class="fa fa-check-circle"></i> Interior Design Consultation</li>
	        		<li><i class="fa fa-check-circle"></i> Project Management</li>
	        		<li><i class="fa fa-check-circle"></i> Space Planning</li>
	        	</ul>
	        </div>
		</div>
		
    </div>
</div><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>