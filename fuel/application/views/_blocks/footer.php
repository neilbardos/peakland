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
			            	<a href=""><img src="<?php echo BASE_URL; ?>assets/images/common/logo.png" class="footer-logo"/></a>&nbsp;&nbsp; |&nbsp;&nbsp;
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
<script src="<?php echo BASE_URL; ?>assets/js/jquery.bxslider.min.js"></script>
<?php echo js('main').js($js); ?>
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
</html>