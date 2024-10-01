<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_slider where sid='$id'";
mysqli_query($con,$query);
header("location:addslider.php");
?>