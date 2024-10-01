<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_member where cmid='$id'";
mysqli_query($con,$query);
header("location:viewmember.php");
?>