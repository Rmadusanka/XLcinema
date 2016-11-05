<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>




<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    <!-- //Owl Carousel Assets -->
    <!--768px-menu-->
    <link type="text/css" rel="stylesheet" href="../Mainsiite/css/jquery.mmenu.all.css" />
    <script type="text/javascript" src="../Mainsiite/js/jquery.mmenu.js"></script>
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
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="services.html">Gallary</a></li>
                    <li><a href="pages.html">Movies</a></li>
                    <li><a href="blog.html">Offers</a></li>
                    <li><a href="signIn.php">Buy Tickets</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </nav>
        </div>
        <!--start-768px-menu-->
        <div class="header_sub">
            <div class="h_menu">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="services.html">Gallary</a></li>
                    <li><a href="pages.html">Movies</a></li>
                    <li><a href="blog.html">Offers</a></li>
                    <li><a href="signIn.php">Buy Tickets</a></li>
                    <li><a href="blog.html">News</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                </ul>
            </div>
            <div class="clear"> </div>
        </div>
    </div>
</div>
<!--start-banner-->











<div class="container">
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel-body">


                <h5><b>Enter Details to Login</b></h5>
                <br />

                <form name="loginform" action="login_exec.php" method="post">
                    <table width="309" border="0" align="center" cellpadding="2" cellspacing="5">
                        <tr>
                            <td colspan="2">
                                <!--the code bellow is used to display the message of the input validation-->
                                <?php
                                if( isset($_SESSION['ERRMSG_ARR']) && is_array($_SESSION['ERRMSG_ARR']) && count($_SESSION['ERRMSG_ARR']) >0 ) {
                                    echo '<ul class="err">';
                                    foreach($_SESSION['ERRMSG_ARR'] as $msg) {
                                        echo '<li>',$msg,'</li>';
                                    }
                                    echo '</ul>';
                                    unset($_SESSION['ERRMSG_ARR']);
                                }
                                ?>
                            </td>
                        </tr>


                        <tr>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-tag"  ></i></span><!--for get small icon-->
                                <input type="text" name="username" class="form-control" placeholder="Your Username " required/><!--for get input field-->
                            </div>

                        </tr>

                        <tr>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                <input type="password" name="password" class="form-control"  placeholder="Your Password" required/>
                            </div>
                        </tr>


                        <tr>
                            <!--for checkme & forgot password?-->
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="checkbox" /> Remember me
                                </label>
                                            <span class="pull-right">
                                                   <a href="mainLogin.php" >Forget password ? </a>
                                            </span>
                            </div>
                            <!--close checkme-->
                        </tr>


                        <tr>
                            <div align="center">
                                <input name="" type="submit" class="btn btn-primary" value="Log In" />
                            </div>
                        </tr>
                        <br>
                        <tr>
                            <div align="center">
                                <a href="registerUser.php">Create New Account</a>
                            </div>
                        </tr>

                    </table>
                </form>

            </div>
        </div>
    </div>
</div>
























<!--footer ------------------------------------->
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