<html>
<head>

    <script>
        $(document).ready(function () {
            $(".country").change(function () {
                var id = $(this).val();
                var dataString = 'id=' + id;

                $.ajax({
                    type: "POST",
                    url: "state.php",
                    data: dataString,
                    cache: false,
                    success: function (html) {
                        alert(id);
                        $(".state").html(html);
                    }
                });
            });
        });
    </script>
</head>



<body>
<?php
$sql = "SELECT * FROM country ORDER BY country";
$query = mysqli_query($con, $sql);
?>
<td>
    <lable>Country:</lable>
</td>
<td>
    <select name="country" id="country" class="country">
        <option selected="selected">--Select Country--</option>
        <?php while ($row1 = mysqli_fetch_array($query)) { ?>
            <option value="<?php echo $row1["c_id"]; ?>">
                <?php echo $row1["country"]; ?>
            </option>
        <?php } ?>
    </select>
<td>
    <lable>State:</lable>
</td>
<td>
    <select name="state" id="state" class="state" selected="selected">
        <option value="select">--Select State--</option>
    </select>
</td>
</body>
</html>