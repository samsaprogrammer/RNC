<?php
$ccid=$_POST['ccid'];
// echo $ccid;
$name=$_POST['member'];
// echo $name;
$department=$_POST['department'];
// echo $department;
$designation=$_POST['designation'];
// echo $designation;

include("connection.php");
$query="insert into tbl_member(ccid,name,department,designation,doa,status) values('$ccid','$name','$department','$designation',curdate(),'Y')";
mysqli_query($con,$query);
header("location:addcommitteemember.php");
?>