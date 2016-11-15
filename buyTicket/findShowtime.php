
<?php
$cnt = $_POST['url'];
//$country = $_REQUEST['country'];
$server = mysqli_connect("localhost", "root", "", "php");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysql_select_db('php');
$query = "SELECT showtime from showtime where showtime.movieid='$cnt'";
$result = mysqli_query($server, $query);
?>
<select name="showtime">
    <option>Select Showtime</option>
    <?php while ($row = mysqli_fetch_array($result)):; ?>
        <option value><?php echo $row['showtime']; ?></option>
    <?php endwhile;?>

</select>
