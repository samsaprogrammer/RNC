<?php
$name=$_POST['name'];
// echo $name;
$designation=$_POST['designation'];
// echo $designation;
$place=$_POST['place'];
// echo $place;
$photo=$_FILES['file']['name'];
// echo $photo;
$type=$_FILES['file']['type'];
// echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
// echo $tmp_name;
$location="mentors/";

include("connection.php");
$query="insert into tbl_mentor(name,designation,place,photo,dom,status) values('$name','$designation','$place','$photo',curdate(),'Y')";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$photo);
header("location:addmentors.php");
?>