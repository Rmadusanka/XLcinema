<?php
ob_start();
include("connect.php");



    $title = mysql_real_escape_string($_POST['title']);
    $fname = mysql_real_escape_string($_POST['fname']);
    $lname = mysql_real_escape_string($_POST['lname']);
    $gender = mysql_real_escape_string($_POST['gender']);
    $nic = mysql_real_escape_string($_POST['nic']);
    $address = mysql_real_escape_string($_POST['address']);
    $city = mysql_real_escape_string($_POST['city']);
    $district = mysql_real_escape_string($_POST['district']);
    $mobile = mysql_real_escape_string($_POST['mobile']);
    $smsAlert = mysql_real_escape_string($_POST['smsAlert']);
    $cphone = mysql_real_escape_string($_POST['cphone']);
    $username = mysql_real_escape_string($_POST['username']);
    $password = mysql_real_escape_string($_POST['password']);
    $cpassword = mysql_real_escape_string($_POST['cpassword']);
    $email = mysql_real_escape_string($_POST['email']);
    $cemail = mysql_real_escape_string($_POST['cemail']);



    $update = mysqli_query($bd,"INSERT INTO user_details(title,fname,lname,gender,nic,address,city,district,mobile,smsAlert,
        cphone,username,password,cpassword,email,cemail)VALUES('$title','$fname','$lname','$gender','$nic','$address','$city',
        '$district','$mobile','$smsAlert','$cphone','$username','$password','$cpassword','$email','$cemail')");

    if ($update) {
        $msg = "Successfully Updated!!";
        echo "<script type='text/javascript'>alert('$msg');</script>";
        header('Location:registerUser.php');
        echo $title;
    } else {
        $errormsg = "Something went wrong, Try again";
        echo "<script type='text/javascript'>alert('$errormsg');</script>";

}
ob_end_flush();
?>