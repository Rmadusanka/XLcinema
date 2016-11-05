
<?php
$cnt = $_POST['url'];
//$country = $_REQUEST['country'];
$server = mysqli_connect("localhost", "root", "", "php");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
//mysql_select_db('php');
$query = "SELECT movie from movie where movie.theaterid='$cnt'";
$result = mysqli_query($server, $query);
?>
<select name="movie">
    <option>Select Movie</option>
    <?php while ($row = mysqli_fetch_array($result)):; ?>
        <option value><?php echo $row['movie']; ?></option>
    <?php endwhile;?>

</select>
