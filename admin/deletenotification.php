<?php
$id=$_REQUEST['id'];
echo $id;
include("connection.php");
$query="delete from tbl_notification where nid='$id'";
mysqli_query($con,$query);
header("location:addnotification.php");
?>