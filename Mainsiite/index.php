<!DOCTYPE HTML>
<html>
<head>
<title>Excel Cinema</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/owl.carousel.js"></script>
	<script>
			$(document).ready(function() {
				$("#owl-demo").owlCarousel({
					items : 4,
					lazyLoad : true,
					autoPlay : true,
					navigation : true,
					navigationText : ["", ""],
					rewindNav : false,
					scrollPerPage : false,
					pagination : false,
					paginationNumbers : false,
				});
			});
		</script>
		<!-- //Owl Carousel Assets -->
		<!--768px-menu-->
		<link type="text/css" rel="stylesheet" href="css/jquery.mmenu.all.css" />
		<script type="text/javascript" src="js/jquery.mmenu.js"></script>
			<script type="text/javascript">
				//	The menu on the left
				$(function() {
					$('nav#menu-left').mmenu();
				});
		</script>
		<!--//768px-menu-->
</head>
<body>
<?php include 'container/header.php'; ?>
<?php include 'container/menubar.php'; ?>
<?php include 'container/slider.php'; ?>
<!--end image slider-->
<div class="simple-text">
	<div class="wrap">
		<h4>Lori talk Eka</h4>
		<p>Lori talk eke podi kalla</p>
	</div>
</div>
<?php include 'container/imgcursual.php'; ?>
<!-- start last_posts -->
<div class="last_posts">
	<div class="wrap">
		<h5 class="heading">Movies Trailer</h5>
		<div class="l-grids">
			<div class="l-grid-1">
				<div class="desc">
					<h3>Lorem ipsum dolor amet,consectetur</h3>
					<span>2nd  &nbsp; sep</span>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				</div>
				<img src="images/im1.jpg">	
				<div class="clear"> </div>
			</div>
			<div class="l-grid-1 l-grid-2">
				<div class="desc">
					<h3>Lorem ipsum dolor amet,consectetur</h3>
					<span>2nd  &nbsp; sep</span>
					<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
				</div>
				<img src="images/im.jpg">	
				<div class="clear"> </div>
			</div>
			<div class="clear"> </div>
		</div>
	</div>
</div>
<div class="testimonial">
<!-- start last_posts -->
<?php include 'container/feedback.php' ?>
<?php include 'container/footer.php'; ?>
</body>
</html>