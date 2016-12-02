
<!DOCTYPE html>
<html>

<head>
    <title>Excel Cinema</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>


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


</head>
<body>






<!-----start-main---->
<div class="row">
    <div class="login-form" style="height: auto">
        <div class="row">
            <img src="<?php echo base_url('images/mem2.jpg'); ?>"  style=" border-radius:40%; margin-left: 180px;" alt=""/>

            <h1 style="margin-left: 140px ;font-size: large;color: #cd0000"><b>Please Sign In First</b></h1>

        </div>




        <?php echo  validation_errors();?>

        <?php echo form_open('index.php/Pages/checkLogin');?>

        Username :<br/>
        <li>
        <input type="text" name="username" placeholder="Enter Valid Username "/><br/></li>

        Password :<br/><li>
        <input type="password" name="password" placeholder="Enter Valid Password "/></li>



        <div class="p-container">
            <label class="checkbox"><input type="checkbox" name="checkbox" checked><i></i>Remember Me</label>

            <input name="submit" type="submit"    align="center" value="Login" />
            <div class="clear"> </div>
        </div>


        <div>
            <h1 style=" margin-left: 100px"><a href="../../index.php/user/index">Create New Account</a></h1>
        </div>

        </form>


    </div>
    <!--//End-login-form-->

</div>



</body>
</html>