


<?php
ob_start();
include('../connect.php');
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    if(isset($_POST['update']))
    {
        $eusertitle=$_POST['eusertitle'];
        $euserfname=$_POST['euserfname'];
        $elname=$_POST['euserlname'];
        $egender=$_POST['eusergender'];
        $enic=$_POST['eusernic'];
        $eaddress=$_POST['euseraddress'];
        $ecity=$_POST['eusercity'];
        $edistrict=$_POST['euserdistrict'];
        $emobile=$_POST['eusermobile'];
        $esmsAlert=$_POST['eusersmsAlert'];
        $ecphone=$_POST['eusercphone'];
        $eusername=$_POST['euserusername'];
        $epassword=$_POST['euserpassword'];
        $ecpassword=$_POST['eusercpassword'];
        $eemail=$_POST['euseremail'];
        $ecemail=$_POST['eusercemail'];



        $updated=mysqli_query($bd,"UPDATE user_details SET
        title='$eusertitle', fname='$euserfname', lname='$elname'  ,gender = '$egender',nic = '$enic',address='$eaddress',
        city='$ecity',district='$edistrict',mobile='$emobile',smsAlert='$esmsAlert',cphone='$ecphone',username='$eusername',
         password='$epassword',cpassword='$ecpassword',email='$eemail',cemail='$ecemail' WHERE id='$id'")or die();
        if($updated)
        {
            $msg="Successfully Updated!!";
            header('Location:userDetails.php');
        }
    }
}  //update ends here
ob_end_flush();
?>


<!DOCTYPE>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>BatFacts.com</title>

</head>

<body style="background-color:lightpink">



<div id="page-wrapper">
    <div id="page-inner">
        <div class="row">
            <div class="col-md-12">
                <h1 align="center" style="color: #500a6f">XLCinema</h1>


            </div>
        </div>


        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-default">


                    <div class="panel-body">
                        <h4  align="center" style="color: #ff0084">Update admin details</h4>
                        <div style="margin-top: 20px; " align="center">
                            <?php
                            if(isset($_GET['id']))
                            {
                                $id=$_GET['id'];
                                $getselect=mysqli_query($bd,"SELECT * FROM user_details WHERE id='$id'");
                                while($profile=mysqli_fetch_array($getselect))
                                {
                                    $title=$profile['title'];
                                    $fname=$profile['fname'];
                                    $lname=$profile['lname'];
                                    $gender=$profile['gender'];
                                    $nic=$profile['nic'];
                                    $address=$profile['address'];
                                    $city=$profile['city'];
                                    $district=$profile['district'];
                                    $mobile=$profile['mobile'];
                                    $smsAlert=$profile['smsAlert'];
                                    $cphone=$profile['cphone'];
                                    $username=$profile['username'];
                                    $password=$profile['password'];
                                    $cpassword=$profile['cpassword'];
                                    $email=$profile['email'];
                                    $cemail=$profile['cemail'];

                                    ?>
                                    <div class="display">
                                        <form action="" method="post" name="insertform">
                                            <table>
                                                <tbody>
                                                <tr>

                                                <td><label for="title"  id="preinput">Title : </label></td>
                                                <td><input type="text" name="eusertitle"  placeholder="Enter  title"
                                                       value="<?php echo $title; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="fname"  id="preinput"> First Name : </label></td>
                                                <td><input type="text" name="euserfname"  placeholder="Enter  fname"
                                                       value="<?php echo $fname; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label for="lname" id="preinput"> Last Name : </label></td>
                                                <td><input type="text" name="euserlname"  placeholder="Enter lname"
                                                       value="<?php echo $lname; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="gender"  id="preinput"> Gender : </label></td>
                                                <td><input type="text" name="eusergender"  placeholder="Enter gender"
                                                       value="<?php echo $gender; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="nic"  id="preinput"> NIC : </label></td>
                                                <td><input type="text" name="eusernic"  placeholder="Enter nic"
                                                       value="<?php echo $nic; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="address"  id="preinput"> Address : </label></td>
                                                <td><input type="text" name="euseraddress"  placeholder="Enter address"
                                                       value="<?php echo $address; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="city"  id="preinput"> City : </label></td>
                                                <td><input type="text" name="eusercity"  placeholder="Enter city"
                                                       value="<?php echo $city; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="district"  id="preinput"> Distric : </label></td>
                                                <td><input type="text" name="euserdistrict"  placeholder="Enter district"
                                                       value="<?php echo $district; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="mobile"  id="preinput"> Mobile : </label></td>
                                                <td><input type="text" name="eusermobile"  placeholder="Enter mobile"
                                                       value="<?php echo $mobile; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="smsAlert"  id="preinput"> SmS Alert : </label></td>
                                                <td><input type="text" name="eusersmsAlert"  placeholder="Enter smsAlert"
                                                       value="<?php echo $smsAlert; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="cphone"  id="preinput"> Confirm Phone : </label></td>
                                                <td><input type="text" name="eusercphone"  placeholder="Enter cphone"
                                                       value="<?php echo $cphone; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="username"  id="preinput"> Username : </label></td>
                                                <td><input type="text" name="euserusername"  placeholder="Enter username"
                                                       value="<?php echo $username; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="password"  id="preinput"> Password : </label></td>
                                                <td><input type="password" name="euserpassword"  placeholder="Enter password"
                                                       value="<?php echo $password; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="cpassword"  id="preinput"> Confirm Password : </label></td>
                                                <td><input type="password" name="eusercpassword"  placeholder="Enter cpassword"
                                                       value="<?php echo $cpassword; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="email"  id="preinput"> Email : </label></td>
                                                <td><input type="email" name="euseremail"  placeholder="Enter email"
                                                       value="<?php echo $email; ?>" id="inputid" /></td>
                                            </tr>
                                            <tr>
                                                <td><label  for="cemail"  id="preinput"> Confirm Email : </label></td>
                                                <td><input type="email" name="eusercemail"  placeholder="Enter cemail"
                                                       value="<?php echo $email; ?>" id="inputid" /></td>
                                            </tr>




                                            <tr>
                                                <td><input type="submit" name="update" value="Update" id="inputid1" /></td>
                                            </tr>
                                                </tbody>
                                                </table>
                                        </form>

                                    </div>
                                <?php } } ?>
                        </div>
                    </div>









                </div>
            </div>
        </div>



    </div>
</div>











</body>
</html>