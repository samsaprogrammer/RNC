<?php
$message=$_POST['message'];
// echo $message;
$filename=$_FILES['file']['name'];
// echo $filename;
$filetype=$_FILES['file']['type'];
// echo $filetype;
$tmp_name=$_FILES['file']['tmp_name'];
// echo $tmp_name;
$location="notice/";

include("connection.php");
$query="insert into tbl_notification(message,filename,dor) values('$message','$filename',curdate())";
move_uploaded_file($tmp_name,$location.$filename);
mysqli_query($con,$query);
header("location:addnotification.php");
?>