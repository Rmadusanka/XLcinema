
<!DOCTYPE html>
<html>

<head>
    <title>Excel Cinema</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!--webfonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'>
    <!--//webfonts-->




    <!--BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Mainsiite/css/magnific-popup.css">

    <link href="css/buyTicketLogging.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="../Mainsiite/js/jquery.min.js"></script>
    <script src="../Mainsiite/js/owl.carousel.js"></script>
</head>
<body>

<?php include '../Mainsiite/container/header.php'; ?>
<?php include '../Mainsiite/container/menubar.php'; ?>

<!-----start-main---->
<div class="row">
<div class="login-form">
    <div class="row">
        <img src="image/buyTicketLogging/images/mem2.jpg" style=" border-radius:40%; margin-left: 180px;" alt=""/>
        <h1 style="margin-left: 140px ;font-size: large;color: #cd0000"><b>Please Sign In First</b></h1>

    </div>
    <form name="loginform" action="login_exec.php" method="post">
        <li>
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
        </li>
        <li>
            <input type="text" name="username"  placeholder="Your Username " required/></a>
        </li>
        <li>
            <input type="password" name="password"   placeholder="Your Password" required/></a>
        </li>
        <div class="p-container">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>

            <input name="" type="submit"   align="center" value="Log In" />
            <div class="clear"> </div>
        </div>

        <div>
            <h1 style=" margin-left: 100px"><a href="registerUserValidation.php">Create New Account</a></h1>
        </div>
    </form>
</div>
<!--//End-login-form-->

</div>


<?php include '../MainSiite/container/footer.php'; ?>

</body>
</html>