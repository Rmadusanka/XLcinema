
<!DOCTYPE html>
<html lang="en">
<head>

    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

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
          href = "<?php echo base_url(); ?>css/buyTicket.css">


    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/jquery.min.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/owl.carousel.js"></script>
    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/bootstrap.min.js"></script>

    <script type = 'text/javascript' src = "<?php echo base_url();
    ?>js/multi_step_form.js"></script>

</head>

<body >


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
            <?php include("bookingSelection.php");?>
        </div>
        <div id="preferences" class="tab-pane fade">
            pissuuu mutaaa
        </div>
        <div id="cBooking" class="tab-pane fade">
            Not implement yet
        </div>
        <div id="makePayment" class="tab-pane fade">
            Not implement yet
        </div>
    </div>

</div>


</body>
</html>




