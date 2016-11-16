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

    <!--BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Mainsiite/css/magnific-popup.css">
    <script type="text/javascript" src="../Mainsiite/js/jquery.min.js"></script>
    <script src="../Mainsiite/js/owl.carousel.js"></script>

    </head>



<!--<body style="background-color:lightpink">-->
<body style="background-color:#f7e1b5">


<?php include '../Mainsiite/container/header.php'; ?>
<?php include '../Mainsiite/container/menubar.php'; ?>
<?php include '../Mainsiite/container/slider.php'; ?>


<div class="container">
    <div class="row ">
        <h1 align="center"><b>XLCinema - Buy Ticket</b></h1>
        <div class="col-md-4">
            <div class="panel-body">


                <br>
                <h5 align="center"><b>Enter Details to Login</b></h5>
                <br />

                <form name="loginform" action="login_exec.php" method="post">
                    <table width="400" border="0" align="center" cellpadding="2" cellspacing="5">
                        <tr>
                            <td>
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

                                <td><label >Username</label></td>
                                <td><input type="text" name="username"  placeholder="Your Username " required/></td><!--for get input field-->


                        </tr>

                        <tr>

                                <td><label>Password</label></td>
                                <td><input type="password" name="password"   placeholder="Your Password" required/></td>

                        </tr>





                        <tr>
                            <td align="center">
                                <input name="" type="submit" width="200" value="Log In" />
                            </td>
                        </tr>
                        <tr></tr>
                        <tr>
                            <td align="center">
                                <a href="registerUserValidation.php">Create New Account</a>
                            </td>
                        </tr>

                    </table>
                </form>

            </div>
        </div>
    </div>
</div>



<?php include '../MainSiite/container/footer.php'; ?>


</body>
</html>

















