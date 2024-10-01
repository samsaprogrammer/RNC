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
$location="nonteacher/";
$designation=$_POST['designation'];
// echo $designation,"<br/>";
$qualification=$_POST['qualification'];
// echo $qualification,"<br/>";

$mobile=$_POST['mobile'];
// echo $mobile;
include("connection.php");
$query="insert into tbl_nonteacher(name,photo,designation,qualification,mobile,dor,status) values('$name','$picname','$designation','$qualification','$mobile',curdate(),'Y')";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$picname);
echo "<script>alert('Data Saved');</script>";
header("location:addnonteaching.php");
?>