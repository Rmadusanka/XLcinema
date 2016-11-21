

<?php
ob_start();
include('connect.php');
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
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">SB Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <span class="pull-left">
                                        <img class="media-object" src="http://placehold.it/50x50" alt="">
                                    </span>
                                    <div class="media-body">
                                        <h5 class="media-heading">
                                            <strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-info">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-warning">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-danger">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> John Smith <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.html"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="charts.html"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> User Details</a>
                    </li>
                    <li>
                        <a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Edit User Details
                            <small>Subheading</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Edit User Details</li>
								<br><br>
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
		 
                          </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
