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

    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

    </head>


<body style="background-color:lightpink">
<div class="container">
    <div class="row ">
        <h1><b>XLCinema - Buy Ticket</b></h1>
        <div class="col-md-4">
            <div class="panel-body">


                <br>
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





</body>
</html>

















