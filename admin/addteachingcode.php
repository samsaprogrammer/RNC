<?php
$name=$_POST['name'];
//echo $name,"<br/>";
$picname=$_FILES['file']['name'];
// echo $picname,"<br/>";
$type=$_FILES['file']['type'];
// echo $type,"<br/>";
$size=$_FILES['file']['size'];
// echo $size,"<br/>";
$tmp_name=$_FILES['file']['tmp_name'];
// echo $tmp_name,"<br/>";
$location="teacher/";
$designation=$_POST['designation'];
// echo $designation,"<br/>";
$qualification=$_POST['qualification'];
// echo $qualification,"<br/>";
$department=$_POST['department'];
// echo $department,"<br/>";
$email=$_POST['email'];
// echo $email,"<br/>";
$mobile=$_POST['mobile'];
// echo $mobile;
include("connection.php");
$query="insert into tbl_teacher(name,photo,designation,qualification,department,email,mobile,dor,status) values('$name','$picname','$designation','$qualification','$department','$email','$mobile',curdate(),'Y')";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$picname);
echo "<script>alert('Data Saved');</script>";
header("location:addteaching.php");
?>