<?php
$name=$_POST['name'];
//echo $name;
$contactno=$_POST['contactno'];
//echo $contactno;
$email=$_POST['email'];
//echo $email;

$message=$_POST['message'];
//echo $message;

include("connection.php");
$query="insert into tbl_feedback(name,email,mobile,message,dof) values('$name','$email','$contactno','$message',curdate())";
mysqli_query($con,$query);
header("location:feedback.php?msg=1");
?>