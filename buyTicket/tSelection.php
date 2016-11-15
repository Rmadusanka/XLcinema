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

















<br><br>
<form method="post" action="" name="form1">
    <table width="60%" border="0" cellspacing="0" cellpadding="0">

        <tr>
            <td width="150">Select Theater</td>
            <td  width="150"><select name="theater" onChange="getMovie(this.value)">
                    <option value="">Select Theater</option>
                    <option value="1">Savoy-2-Wallawatta</option>
                    <option value="2">Savoy-3D-Wallawatta</option>
                    <option value="3">Nikado-Kadawata</option>
                </select></td>
        </tr>
        <tr style="">
            <td>Select Movie</td>
            <td ><div id="moviediv">
                    <select name="movie" onChange="getShowtime(this.value)">
                        <option>Select Movie</option>
                    </select>
                </div></td>
        </tr>

        <!--get show time -->
        <tr style="">
            <td>Select Show Time</td>
            <td ><div id="showtimediv">
                    <select name="showtime">
                        <option>Select Show time</option>
                    </select>
                </div></td>
        </tr>


        <tr style="">
            <td>Select Date</td>
            <td ><div id="selectDate">
                    <input type="datetime-local" name="pickup_time">
                </div></td>
        </tr>





        <tr>
            <td width="150">Select Category</td>
            <td  width="150"><select name="theater">
                    <option value="">Select Category</option>
                    <option value="1">ODC BOX</option>
                    <option value="2">ODC</option>
                    <option value="3">Balcony BOX</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">No Of Seats/ Boxes</td>
            <td  width="150"><select name="noSeats">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">Number Of Full Tickets</td>
            <td  width="150"><select name="nofTickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>

        <tr>
            <td width="150">No Of Half Tickets</td>
            <td  width="150"><select name="nohTickets">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                </select></td>
        </tr>










        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>

        <tr>
            <td></td>
            <td>
            <button name="next1"><a href="selectPreferences.php"/> Next</button>
            </td>
         </tr>

    </table>
</form>

<br><br>
<script>
    var obj;
    var obj2;



    function checkBrowser() {
        if (window.XMLHttpRequest) {
            obj = new XMLHttpRequest();
        } else {
            obj = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }

    function checkBrowser2() {
        if (window.XMLHttpRequest) {
            obj2 = new XMLHttpRequest();
        } else {
            obj2 = new ActiveXobject("Microfoft.ActiveXobject");
        }
    }


    function getMovie(strURL) {
        checkBrowser();

        obj.onreadystatechange = function() {

            //alert(obj.responseText);
            //  alert(strURL);
            if (obj.readyState === 4 && obj.status === 200) {

                var text = obj.responseText;

                //alert(obj.responseText);

                document.getElementById('moviediv').innerHTML = text;


            }
        };
        obj.open("POST", "findMovie.php", true);
        obj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj.send("url=" + strURL);
    }

    //get show time
    function getShowtime(strURL) {
        checkBrowser2();

        obj2.onreadystatechange = function() {

            //alert(obj.responseText);
            //  alert(strURL);
            if (obj2.readyState === 4 && obj2.status === 200) {

                var textt = obj2.responseText;

                //alert(obj.responseText);

                document.getElementById('showtimediv').innerHTML = textt;


            }
        };
        obj2.open("POST", "findShowtime.php", true);
        obj2.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        obj2.send("url=" + strURL);
    }
</script>




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