<?php
$id=$_POST['id'];
// echo $id;
$name=$_POST['name'];
// echo $name;
$designation=$_POST['designation'];
// echo $designation;
$qualification=$_POST['qualification'];
// echo $qualification;

$mobile=$_POST['mobile'];
// echo $mobile;

include("connection.php");
$query="update tbl_nonteacher set name='$name',designation='$designation',qualification='$qualification',mobile='$mobile' where ntid='$id'";
mysqli_query($con,$query);
header("location:viewnonteaching.php");
?>
