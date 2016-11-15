<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- BOOTSTRAP STYLES-->
    <link href="../css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="../css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


</head>

<body style="background-color:lightpink">
<div class="container">

    <div class="row ">
        <h1><b>XLCinema - Details Of User Account</b></h1>
        <div class="col-md-10">
            <div class="panel-body">


                <br>
                <h5><b>User Details</b></h5>
                <br />




                <?php
include('../connect.php');
$select=mysqli_query($bd,"SELECT * FROM user_details order by id desc");
$i=1;
while($userrow=mysqli_fetch_array($select))
{
    $id=$userrow['id'];
    //$username=$userrow['username'];
    $fname=$userrow['fname'];
    $usermail=$userrow['email'];
    $usermobile=$userrow['mobile'];
    $created=$userrow['created'];


    ?>

    <div class="display">
        <p> USER NAME : <span style="color: #125acd"><?php echo $fname; ?></span>
            <a href="deleteUser.php?id=<?php echo $id; ?>"
               onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete" style="color: #ff0084"> Delete </span></a>
        </p>

        <p> EMAIL ID : <span style="color: #125acd"><?php echo $usermail; ?></span>
            <a href="editUser.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> Update </span></a>
        </p>

        <p> MOBILE NO : <span style="color: #125acd"><?php echo $usermobile; ?></span>
        </p>

        <p> CREATED ON : <span style="color: #125acd"><?php echo $created; ?></span>
        </p>
        <br>
    </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>