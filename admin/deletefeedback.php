<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_feedback where fid='$id'";
mysqli_query($con,$query);
header("location:viewfeedback.php");
?>