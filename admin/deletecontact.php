<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_contact where coid='$id'";
mysqli_query($con,$query);
header("location:viewcontact.php");
?>