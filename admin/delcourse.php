<?php
$id=$_REQUEST['id'];
include("connection.php");
$query="delete from tbl_courses where cid='$id'";
mysqli_query($con,$query);
header("location:viewcourses.php");
?>