<?php
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="delete from tbl_nonteacher where ntid='$id'";
mysqli_query($con,$query);
header("location:viewnonteaching.php");
?>