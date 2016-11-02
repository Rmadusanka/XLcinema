<?php 

$connect=mysqli_connect("localhost","root","","xlcinema");
if(!$connect){
    echo "connection failed".mysqli_connect_error();
    }

?>