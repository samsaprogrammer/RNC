<?php
$id=$_POST['id'];
// echo $id;
$name=$_POST['name'];
// echo $name;
$designation=$_POST['designation'];
// echo $designation;
$qualification=$_POST['qualification'];
// echo $qualification;
$department=$_POST['department'];
// echo $department;
$mobile=$_POST['mobile'];
// echo $mobile;

include("connection.php");
$query="update tbl_teacher set name='$name',designation='$designation',qualification='$qualification',department='$department',mobile='$mobile' where tid='$id'";
mysqli_query($con,$query);
header("location:viewteaching.php");
?>
