<!--start-banner-->
<div class="banner" id="move-top">
	<!--start-image-slider-->
		<div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
			<div class="wrap">
				<div class="slider">
					<ul id="jquery-demo">
					  	<li>
						    <a href="#slide1">
						    <img src="images/slider/slide1.jpg">
						    </a>
					  	</li>
				  		<li>
						    <a href="#slide2">
						    <img src="images/slider/slide2.jpg">
						    </a>			      
					  	</li>
					  	<li>
						    <a href="#slide3">
						    <img src="images/slider/slide3.jpg">
						    </a>
					  </li>
					</ul>
				</div>
			</div>
		</div>
		<div class="clear"> </div>
	</div>
			<!--slider-->
	<link rel="stylesheet" href="css/slippry.css">
	<script src="js/jquery-ui.js" type="text/javascript"></script>
	<script src="js/scripts-f0e4e0c2.js" type="text/javascript"></script>
	<script>
		  jQuery('#jquery-demo').slippry({
		  // general elements & wrapper
		  slippryWrapper: '<div class="sy-box jquery-demo" />', // wrapper to wrap everything, including pager
		  // options
		  adaptiveHeight: false, // height of the sliders adapts to current slide
		  useCSS: false, // true, false -> fallback to js if no browser support
		  autoHover: false,
		  transition: 'fade'
		});
	</script>
	<!---scrooling-script-->
		<!--//End-image-slider-->