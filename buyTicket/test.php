<?php
// define variables and set to empty values
$fnameErr = $lnameErr  = $nicErr = $mobileErr = $cphoneErr = $passwordErr = $cpasswordErr = $emailErr = $cemailErr = "";
$fname = $lname  = $nic  = $mobile = $cphone = $password = $cpassword = $email = $cemail =   "";
$course = array();
//var_dump($_POST['gender']);
//exit;
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $variables = array();
    $variables = initialize();
    $errors = array();
    $errors = validate_errors($variables);

    if (count($errors) == 0) {
        //database operation
        //exit;
    }
}
function clean($data) {
    $data = strip_tags(htmlspecialchars(stripslashes(trim($data))));
    //trim :- Strip whitespace (or other characters) from the beginning and end of a string
    //The stripslashes() function removes backslashes.Prevents XSS
    //htmlspecialchars :- Converts the predefined characters "<" (less than) and ">" (greater than) to HTML entities:< (less than) becomes &lt; and > (greater than) becomes &gt;Helps in preventing XSS
    //The strip_tags() function strips a string from HTML, XML, and PHP tags.
    return $data;
}

function initialize(){
    $var = array();
    $var['fname'] = clean($_POST['fname']);
    $var['lname'] = clean($_POST['lname']);
    $var['nic'] = clean($_POST['nic']);
    $var['mobile'] = clean($_POST['mobile']);
    $var['cphone'] = clean($_POST['cphone']);
    $var['password'] = clean($_POST['password']);
    $var['cpassword'] = clean($_POST['cpassword']);
    $var['email'] = clean($_POST['email']);
    $var['cemail'] = clean($_POST['cemail']);


    return $var;
}

function validate_errors($var) {    //is an array being passed into this function??have a look at arg of validateFirstName.
    $errors = array();

    $errors['fname'] = validateFirstName($var['fname']);//should return error string or ''
    $errors['lname'] = validateLastName($var['lname']);
    $errors['nic'] = validateNIC($var['nic']);
    $errors['mobile'] = validateMobile($var['mobile']);
    $errors['cphone'] = validateConfirmMobile($var['cphone']);
    $errors['password'] = validatePassword($var['password']);
    $errors['cpassword'] = validateConfirmPassword($var['cpassword']);
    $errors['email'] = validateEmail($var['email']);
    $errors['cemail'] = validateConfirmEmail($var['cemail']);


    return $errors;
}

function validateFirstName($firstname){

    if(empty($firstname)){
        global $fnameErr;
        $fnameErr = "First name is required";
        return $fnameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $firstname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $fnameErr;
        $fnameErr = "Only letters are allowed";
        return $fnameErr;
    } else {
        global $fname;
        $fname = $firstname;
        return '';
    }
}

function validateLastName($lastname){

    if(empty($$lastname)){
        global $lnameErr;
        $lnameErr = "First name is required";
        return $lnameErr;
    } else if (!preg_match("/^[a-zA-Z ]*$/", $lastname)){ // check if name only contains letters and whitespace.Performs a regular expression match
        global $lnameErr;
        $lnameErr = "Only letters are allowed";
        return $lnameErr;
    } else {
        global $lname;
        $lname = $lastname;
        return '';
    }
}


function validateNIC($nicNo) {

    if(empty($nicNo)) {
        global $nicErr;
        $nicErr = "Username is required";
        return $nicErr;
    } else if (!preg_match("/^\d{10}$/", $nicNo)){ // checks if username contains only letters and digits
        global $nicErr;
        $nicErr = "you have entered Invalid Mobile Number";
        return $nicErr;
    } else {
        global $nic;
        $nic = $nicNo;
        return '';
    }
}







function validateMobile($umobile) {

    if(empty($umobile)) {
        global $mobileErr;
        $mobileErr = "Username is required";
        return $mobileErr;
    } else if (!preg_match("/^\d{10}$/", $umobile)){ // checks if username contains only letters and digits
        global $mobileErr;
        $mobileErr = "you have entered Invalid Mobile Number";
        return $mobileErr;
    } else {
        global $mobile;
        $mobile = $umobile;
        return '';
    }
}

function validateConfirmMobile($ucphone) {

    if(empty($ucphone)) {
        global $cphoneErr;
        $cphoneErr = "Username is required";
        return $cphoneErr;
    } else if (!preg_match("/^\d{10}$/", $ucphone)){ // checks if username contains only letters and digits
        global $cphoneErr;
        $cphoneErr = "you have entered Invalid Mobile Number";
        return $cphoneErr;
    } else {
        global $cphone;
        $cphone = $ucphone;
        return '';
    }
}

function validatePassword($pword){

    if(empty($pword)) {
        global $passwordErr;
        $passwordErr = "Password is required";
        return $passwordErr;
    } else if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $pword) === 0) {
        global $passwordErr;
        $passwordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        return $passwordErr;
    } else {
        global $password;
        $password = $pword;
        return '';
    }
}

function validateConfirmPassword($cpword){

    if(empty($cpword)) {
        global $cpasswordErr;
        $cpasswordErr = "Password is required";
        return $cpasswordErr;
    } else if (preg_match("/^.*(?=.{8,})(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).*$/", $cpword) === 0) {
        global $cpasswordErr;
        $cpasswordErr = "Password must be at least 8 characters and must contain at least one lower case letter, one upper case letter and one digit";
        return $cpasswordErr;
    } else {
        global $cpassword;
        $cpassword = $cpword;
        return '';
    }
}

function validateEmail($umail){

    if(empty($umail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $umail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $emailErr;
        $emailErr = "you have entered Invalid Email";
        return $emailErr;
    } else {
        global $email;
        $email = $umail;
        return '';
    }
}

function validateConfirmEmail($cumail){

    if(empty($cumail)){
        return '';
    } else if (!preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $cumail)) { // check if name only contains letters and whitespace,performs a regular expression match
        global $cemailErr;
        $cemailErr = "you have entered Invalid Email";
        return $cemailErr;
    } else {
        global $cemail;
        $cemail = $cumail;
        return '';
    }
}







//renderform();



?>



<!DOCTYPE HTML>
<html>
<head>
    <title>Excel Cinema</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


    <!-- BOOTSTRAP STYLES
    <link href="css/bootstrap.css" rel="stylesheet" />-->
    <!-- FONTAWESOME STYLES-->
    <link href="css/font-awesome.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <link href="../Mainsiite/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../Mainsiite/css/owl.carousel.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../Mainsiite/css/magnific-popup.css">
    <script type="text/javascript" src="../Mainsiite/js/jquery.min.js"></script>
    <script src="../Mainsiite/js/owl.carousel.js"></script>




</head>


<body style="background-color:powderblue">


<?php include '../Mainsiite/container/header.php'; ?>
<?php include '../Mainsiite/container/menubar.php'; ?>


<div class="container">

    <div class="row ">
        <br><br>
        <h1 align="center" style="font-size: large; color: #c7254e"><b>XLCinema - Buy Ticket</b></h1>
        <h5 align="center"><b>Create New Account</b></h5>

        <div class="col-md-10" style="margin-left: 200px">
            <div class="panel-body">


                <br>





                <!--form  action="insertNewUser.php" method="post">
                <form name="myForm" action="insertNewUser.php"  method="post">-->
                <div style="margin-top: 20px; " align="center" >
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

                        <table>
                            <tbody><tr>
                                <td><label id="label">Title :<span>*</span></label></td>
                                <td><select id="title" name="title" required>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Ms.">Ms.</option>
                                        <option value="Dr.">Dr.</option>
                                        <option value="Prof.">Prof.</option>
                                        <option value="Rev.">Rev.</option>
                                    </select>
                                </td>
                            </tr>

                            <tr>
                                <td><label id="fname">First Name :<span>*</span></label></td>
                                <td><input type="text" name="fname" id="fname" required><span style="color: red"><?php echo $fnameErr; ?></span></td>
                            </tr>
                            <tr>
                                <td><label id="lname" >Last Name<span>*</span></label></td>
                                <td><input type="text" name="lname" id="lname" required><span style="color: red"><?php echo $lnameErr; ?></span></td>
                            </tr>
                            <tr>
                                <td><div class="form_label"><label id="gender">Gender :<span>*</span></label></div></td>
                                <td><div class="form_input"><select id="gender" name="gender" required>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div></td>
                            </tr>

                            <tr>
                                <td><div class="form_label"><label id="nic">NIC No: <span>*</span></label></div></td>
                                <td><div class="form_input"><input type="text" name="nic" id="nic" required><span style="color: red"><?php echo $nicErr; ?></span></div></td>
                            </tr>
                            <tr>
                                <td><div class="form_label"><label id="address">Address: <span>*</span></label></div></td>
                                <td><div class="form_input"><input type="text" name="address" id="address" required></div></td>
                            </tr>
                            <tr>
                                <td><div class="form_label"><label id="city" for="jform_city" >City : <span>*</span></label></div></td>
                                <td><div class="form_input"><input type="text" name="city" id="city" required></div></td>
                            </tr>
                            <tr>
                                <td><div class="form_label"><label id="district">District :<span>*</span></label></div></td>
                                <td><div class="form_input"><select id="district" name="district" required>
                                            <option value="Ampara">Ampara</option>
                                            <option value="Anuradhapura">Anuradhapura</option>
                                            <option value="Badulla">Badulla</option>
                                            <option value="Batticaloa">Batticaloa</option>
                                            <option value="Colombo">Colombo</option>
                                            <option value="Galle">Galle</option>
                                            <option value="Gampaha">Gampaha</option>
                                            <option value="Hambantota">Hambantota</option>
                                            <option value="Jaffna">Jaffna</option>
                                            <option value="Kalutara">Kalutara</option>
                                            <option value="Kandy">Kandy</option>
                                            <option value="Kegalle">Kegalle</option>
                                            <option value="Kilinochchi">Kilinochchi</option>
                                            <option value="Kurunegala">Kurunegala</option>
                                            <option value="Mannar">Mannar</option>
                                            <option value="Matale">Matale</option>
                                            <option value="Matara">Matara</option>
                                            <option value="Moneragala">Moneragala</option>
                                            <option value="Nuwara Eliya">Nuwara Eliya</option>
                                            <option value="Puttalam">Puttalam</option>
                                            <option value="Polonnaruwa">Polonnaruwa</option>
                                            <option value="Ratnapura">Ratnapura</option>
                                            <option value="Trincomalee">Trincomalee</option>
                                            <option value="Vavuniya">Vavuniya</option>
                                        </select>
                                    </div></td>
                            </tr>
                            <tr>
                                <td><div class="form_label"><label id="mobile" >Mobile : </label></div></td>
                                <td><div class="form_input"><input type="text" name="mobile"><span style="color: red"><?php echo $mobileErr; ?></span></div></td>
                            </tr>
                            <tr>
                                <td><label id="smsAlert">Subscribe for SMS Alerts</label></div></td>
                <td><fieldset id="smsAlert" class="radio">
                        <input type="radio" id="smsAlert" name="smsAlert" value="1"><label>Yes</label>
                        <input type="radio" id="smsAlert" name="smsAlert" value="0"><label>No</label></fieldset>
            <span class="small_text">
                (Enter your mobile number if you wish to receive ticket confirmation /
                updates via SMS – valid for limited operators)</span>
            </div></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="cphone" >Phone Number: <span>*</span></label></div></td>
                <td><div class="form_input"><input type="text" name="cphone" id="cphone" required><span style="color: red"><?php echo $cphoneErr; ?></span></div></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="username" for="jform_username" >Username:<span>*</span></label></div></td>
                <td><div class="form_input"><input type="text" name="username" id="username" required><br>
                        <span class="small_text">(Minimum 6 characters)</span></div></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="password" >Password:<span>*</span></label></div></td>
                <td><div class="form_input"><input type="password" name="password" id="password" required><span style="color: red"><?php echo $passwordErr; ?></div>
                    <span class="small_text">(Should be a minimum of 8 characters)</span></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="cpassword">Confirm Password:<span>*</span></label></div></td>
                <td><div class="form_input"><input type="password" name="cpassword" id="cpassword" required><span style="color: red"><?php echo $cpasswordErr; ?></div></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="email">Email Address:<span>*</span></label></div></td>
                <td><div class="form_input"><input type="text" name="email"  id="emai"  size="30" required><span style="color: red"><?php echo $emailErr; ?></div></td>
            </tr>
            <tr>
                <td><div class="form_label"><label id="cemail" >Confirm email:<span>*</span></label></div></td>
                <td><div class="form_input"><input type="text" name="cemail"  id="cemai"  size="30" required><span style="color: red"><?php echo $cemailErr; ?></div></td>
            </tr>



            <tr>
                <td></td>
                <!-- <td><div id="register-button"><button value="Submit" type="Submit">Submit</button></div></td>-
                 <td><button onclick="validateForm()"> Submit </button></td>-->
                <td><input type = "submit" value="Submit" name="submit"></td>
            </tr>
            </tbody></table>

            </form>
        </div>
        <br>

    </div>
</div>
</div>
</div>

<?php include '../MainSiite/container/footer.php'; ?>
</body>
</html>