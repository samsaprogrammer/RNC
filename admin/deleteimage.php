<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_gallery where gid='$id'";
mysqli_query($con,$query);
header("location:addimage.php");
?>