<html>
<head>
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




    <title>Registration Form</title>

    <style type="text/css">

        form li{
            list-style: none;
        }

    </style>
</head>

<body>
<div class="row">
    <div class="login-form" style="height: auto">
        <div class="row">
            <img src="<?php echo base_url('images/mem2.jpg'); ?>"  style=" border-radius:40%; margin-left: 180px;" alt=""/>

            <h1 style="margin-left: 140px ;font-size: large;color: #cd0000"><b>User registration</b></h1>

        </div>

        <br><br>
<h1 style="margin-left: 100px">Please fill in the details below</h1>



<?php
echo form_open($base_url . 'index.php/user/register');

$title = array(
    'name' => 'title',
    'id' => 'title',
    'value' => set_value('title')
);

$username = array(
    'name' => 'username',
    'id' => 'username',
    'value' => set_value('username')
);


$fname = array(
    'name' => 'fname',
    'id' => 'fname',
    'value' => set_value('fname')
);

$lname = array(
    'name' => 'lname',
    'id' => 'lname',
    'value' => set_value('lname')
);


$gender = array(
    'name' => 'gender',
    'id' => 'gender',
    'value' => set_value('gender')
);

$city = array(
    'name' => 'city',
    'id' => 'city',
    'value' => set_value('city')
);

$mobile = array(
    'name' => 'mobile',
    'id' => 'mobile',
    'value' => set_value('mobile')
);

$email = array(
    'name' => 'email',
    'id' => 'email',
    'value' => set_value('email')
);

$password = array(
    'name' => 'password',
    'id' => 'password',
    'value' => ''
);

$cpassword = array(
    'name' => 'cpassword',
    'id' => 'cpassword',
    'value' => ''
);





?>

<ul>


        <label id="label">Title :</label>
    <li>
        <select id="title" name="title" required>
            <option value="Mr.">Mr.</option>
            <option value="Ms.">Ms.</option>
            <option value="Dr.">Dr.</option>
            <option value="Prof.">Prof.</option>
            <option value="Rev.">Rev.</option>
        </select>

    </li>

    <label>First Name</label>
    <li>
        <div>
            <?php echo form_input($fname);?>
        </div>
    </li>

    <label>Last Name</label>
    <li>
        <div>
            <?php echo form_input($lname);?>
        </div>
    </li>


        <label id="gender">Gender :<span>*</span></label>
    <li>
        <select id="gender" name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
        </select>

    </li>


        <label id="city" for="jform_city" >City : <span>*</span></label>
    <li>
        <input type="text" name="city" id="city" required>
    </li>



        <label id="mobile" >Mobile : </label>*
    <li>
        <input type="text" name="mobile"><span style="color: red"></span>
    </li>



        <label>Email Address</label>
    <li>
        <div>
            <?php echo form_input($email);?>
        </div>
    </li>

    <label>Username</label>
    <li>
        <div>
            <?php echo form_input($username);?>
        </div>
    </li>


        <label>Password</label>
    <li>
        <div>
            <?php echo form_password($password);?>
        </div>
    </li>


        <label>Confirm Password</label>
    <li>
        <div>
            <?php echo form_password($cpassword);?>
        </div>
    </li>


        <?php echo validation_errors();?>









        <div>
            <?php echo form_submit(array('name' => 'register'), 'Register'); ?>
        </div>

</ul>


<?php echo form_close();?>

        </div>
    </div>


</body>
</html>
