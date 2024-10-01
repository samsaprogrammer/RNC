<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_committe where ccid='$id'";
mysqli_query($con,$query);
header("location:addcommittee.php");
?>