<?php
$id=$_REQUEST['id'];
// echo $tid;
include("connection.php");
$query="delete from tbl_mentor where mid='$id'";
mysqli_query($con,$query);
header("location:viewmentors.php");
?>