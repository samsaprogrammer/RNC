<?php
$name=$_POST['name'];
echo $name;
$photo=$_FILES['file']['name'];
echo $photo;
$type=$_FILES['file']['type'];
echo $type;
$tmp_name=$_FILES['file']['tmp_name'];
echo $tmp_name;
$location="gallery/";
include("connection.php");
$query="insert into tbl_gallery(name,photo,dor,status) values('$name','$photo',curdate(),'Y')";
mysqli_query($con,$query);
move_uploaded_file($tmp_name,$location.$photo);
header("location:addimage.php");
?>