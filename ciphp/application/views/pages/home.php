
<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>

    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/style.css">

    <!--BOOTSTRAP STYLES-->
    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/bootstrap.css">

    <!-- FONTAWESOME STYLES-->
    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/font-awesome.css">


    <!-- GOOGLE FONTS-->
    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>http://fonts.googleapis.com/css?family=Open+Sans">



    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/owl.carousel.css">

    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/magnific-popup.css">

    <link rel = "stylesheet" type = "text/css"
          href = "<?php echo base_url(); ?>css/buyTicketLogging.css">


    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/owl.carousel.js"></script>







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

    <link type="text/css" rel="stylesheet" href="../../../css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="../../../js/jquery.mmenu.js"></script>
    <script type="text/javascript">
        //	The menu on the left
        $(function() {
            $('nav#menu-left').mmenu();
        });
    </script>
    <!--//768px-menu-->
</head>
<body>
<!-- start header -->
<div class="header_bg">
    <div class="wrap">
        <div class="header">
            <div class="logo">
                <a href="index.html">
                    <h1>EXCEL CINEMA</h1>
                    <div class="clear"> </div>
                </a>
            </div>
            <div class="text">
                <p>Join With Us<br></p>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!-- start header -->
<div class="header_btm">
    <div class="wrap">
        <!--start-768px-menu-->
        <div id="page">
            <div id="header">
                <a class="navicon" href="#menu-left"> </a>
            </div>
            <nav id="menu-left">
                <ul>
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="about">About us</a></li>
                    <li><a href="services.html">Gallary</a></li>
                    <li><a href="pages.html">Movies</a></li>
                    <li><a href="blog.html">Offers</a></li>
                    <li><a href="buyTicket">Buy Tickets</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </div>
        <!--start-768px-menu-->
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="home">Home</a></li>
                    <li><a href="about">About us</a></li>
                    <li><a href="services.html">Gallary</a></li>
                    <li><a href="pages.html">Movies</a></li>
                    <li><a href="blog.html">Offers</a></li>
                    <li><a href="../../pages/buyTicket">Buy Tickets</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!--start-banner-->
<div class="banner" id="move-top">
    <!--start-image-slider-->
    <div data-scroll-reveal="enter bottom but wait 0.7s" class="img-slider" id="home">
        <div class="wrap">
            <div class="slider">
                <ul id="jquery-demo">
                    <li>
                        <a href="#slide1">
                            <img src="../../../images/slider/slide1.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#slide2">
                            <img src="../../../images/slider/slide2.jpg">
                        </a>
                    </li>
                    <li>
                        <a href="#slide3">
                            <img src="../../../images/slider/slide3.jpg">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="clear"> </div>
</div>
<!--slider-->
<link rel="stylesheet" href="../../../css/slippry.css">
<script src="../../../js/jquery-ui.js" type="text/javascript"></script>
<script src="../../../js/scripts-f0e4e0c2.js" type="text/javascript"></script>
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
<div class="simple-text">
    <div class="wrap">
        <h4>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</h4>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
<!-- start services -->
<div class="Recent-wroks">
    <div class="wrap">
        <div class="Recent-wrok">
            <h5 class="heading">Recent wrok</h5>
            <!--start-img-cursual-->
            <div id="owl-demo" class="owl-carousel">
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="../../../images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="../../../images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="../../../images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="../../../images/2.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="../../../images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="../../../images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/2.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/11.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/1.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Lorem ipsum dolor amet,consectetur adipisicing elit, sed do eiusmod tempor incididunt dolore magna aliqua.
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/44.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/4.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/33.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img src="images/3.jpg" >
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            On the other hand, we denounce with righteous indignation and dislike men who are so beguiled  pleasure of the moment,
                        </p>
                    </div>
                </div>
                <div class="item">
                    <div class="cau_left">
                        <div id="nivo-lightbox-demo"> <p> <a href="images/22.jpg" data-lightbox-gallery="gallery1" id="nivo-lightbox-demo"> <span class="rollover"> </span></a> </p></div>
                        <img  src="images/2.jpg">
                    </div>
                    <div class="cau_left">
                        <h4><a href="#">Lorem ipsum</a></h4>
                        <p>
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                        </p>
                    </div>
                </div>
            </div>
            <!----//End-img-cursual---->
        </div>
        <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                $('#nivo-lightbox-demo a').nivoLightbox({ effect: 'fade' });
            });
        </script>

    </div>
</div>
<div class="last_posts"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Last posts</h5>
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
<div class="testimonial"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">testimonials</h5>
        <div class="test-grids">
            <div class="test-desc">
                <h3>your testimonial here</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
            </div>
            <div class="img_1">
                <img src="images/avator.png">
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<div class="get_in_touch"><!-- start last_posts -->
    <div class="wrap">
        <h5 class="heading">Your FEED-BACK</h5>
        <div class="get-left">
            <p>Please provide us with your feedback below</p>
            <p></p>
        </div>
        <div class="get-right">
            <form>
                <ul>
                    <li class="name">
                        <a href="#" class="icon user"> </a>
                        <input type="text" placeholder="Your name" required="">
                        <div class="clear"> </div>
                    </li>
                    <li class="email_1">
                        <a href="#" class="icon mail"> </a>
                        <input type="email" placeholder="yourname@email.com" required="">
                        <div class="clear"> </div>
                    </li>
                    <div class="clear"> </div>
                    <li>
                        <textarea class="plain buffer" placeholder="Your FEED-BACK here"> Your FEED-BACK here</textarea>
                    </li>
                    <input class="send" type="submit" value="Send" />
                    <!--
                <div class="send">
                        <a href="#">SEND</a>
                </div>
                -->
                </ul>
            </form>
        </div>
        <div class="clear"> </div>
    </div>
</div>
<div class="footer">
    <div class="wrap">
        <div class="footer-left">
            <h3>About Excel Cinema</h3>
            <p>EAP Films is the market leader in the Sri Lankan Film Industry providing an outstanding entertainment platform for film-goers.
            </p><p>As a truly strong company we manage and operate 45 modern cinemas under the circuit and possess the best theaters in the Island which include Excel Cinema etc.</p>

            <div class="detail">
                <ul>
                    <li><a href="#">home/</a></li>
                    <li><a href="#">term of services/</a></li>
                    <li><a href="#">license/</a></li>
                    <li><a href="#">pess</a></li>
                    <div class="clear"> </div>
                </ul>
            </div>


        </div>
        <div class="footer-right">
            <h3>Contact Us</h3>
            <div class="comments1">
                <p>Excel Cinema	-	+94117452855</p>
                <br><br><br><br>
            </div>
            <div class="soc_icons soc_icons1">
                <ul>
                    <li><a class="icon1" href="#"> </a> </li>
                    <li><a class="icon2" href="#"> </a></li>
                    <li><a class="icon3" href="#"> </a></li>
                    <div class="clear"> </div>
                </ul>
            </div>

        </div>
        <div class="clear"> </div>
    </div>
</div>
<div class="copy">
    <p>© 2016 Programming IV Project <a href="#" target="_blank">ForTranX</a></p>
</div>
</body>
</html>