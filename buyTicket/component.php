


<?php
//Start session
session_start();
//Unset the variables stored in session
unset($_SESSION['SESS_MEMBER_ID']);
unset($_SESSION['SESS_FIRST_NAME']);
unset($_SESSION['SESS_LAST_NAME']);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- BOOTSTRAP STYLES
    <link href="css/bootstrap.css" rel="stylesheet" />-->
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <link href="css/bootstrap.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Mainsiite/css/magnific-popup.css">


    <link href="css/buyTicketLogging.css" rel='stylesheet' type='text/css' />
    <script type="text/javascript" src="../Mainsiite/js/jquery.min.js"></script>
    <script src="../Mainsiite/js/owl.carousel.js"></script>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>


</head>

<body >


<?php include '../Mainsiite/container/header.php'; ?>
<?php include '../Mainsiite/container/menubar.php'; ?>

<div class="container">
    <br><br>
    <h3 style="margin-left: 200px;font-size: large;color: #cd0000"><b>Booking Tickets</b></h3>

    <br>
    <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a data-toggle="tab" href="#selection">Make your Selection</a></li>
        <li><a data-toggle="tab" href="#preferences">Select Preferences</a></li>
        <li><a data-toggle="tab" href="#cBooking">Confirm Booking</a></li>
        <li><a data-toggle="tab" href="#makePayment">Make Payment</a></li>
    </ul>

    <div class="tab-content">
        <div id="selection" class="tab-pane fade in active">
            <?php include("tSelection.php");?>
        </div>
        <div id="preferences" class="tab-pane fade">
            Not implement yet
        </div>
        <div id="cBooking" class="tab-pane fade">
            Not implement yet
        </div>
        <div id="makePayment" class="tab-pane fade">
            Not implement yet
        </div>
    </div>

</div>

<?php include '../MainSiite/container/footer.php'; ?>
</body>
</html>




