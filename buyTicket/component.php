


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



    <!-- BOOTSTRAP STYLES-->
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>
<body style="background-color:lightpink">


<div class="container">
    <div class="row">
        <h1>Selection</h1>

            <div class="col-md-3 ">
                <a href="tSelection.php">Make your Selection</a>
            </div>
             <div class="col-md-3">
                <a href="selectPreferences.php">Select Preferences</a><br>
             </div>
            <div class="col-md-3">
                 <a href="confirmBooking.php">Confirm Booking</a><br>
            </div>
            <div class="col-md-3">
                <a href="makePayment.php">Make Payment</a>
            </div>

    </div>

    <?php include("tSelection.php");?>

</div>




</body>
</html>