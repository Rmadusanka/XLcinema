<?
#### Roshan's Ajax dropdown code with php
#### Copyright reserved to Roshan Bhattarai - nepaliboy007@yahoo.com
#### if you have any problem contact me at http://roshanbh.com.np
#### fell free to visit my blog http://php-ajax-guru.blogspot.com
?>

<?php
$cnt = $_POST['url'];
//$country = $_REQUEST['country'];
$server = mysqli_connect("localhost", "root", "", "php");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysql_select_db('php');
$query = "SELECT city from city where city.countryid='$cnt'";
$result = mysqli_query($server, $query);
?>
<select name="city">
    <option>Select City</option>
    <?php while ($row = mysqli_fetch_array($result)):; ?>
        <option value><?php echo $row['city']; ?></option>
    <?php endwhile;?>

</select>
