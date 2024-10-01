<?php
$pname=$_POST['pname'];
// echo $pname;
$cname=$_POST['cname'];
// echo $cname;
$year=$_POST['year'];
// echo $year;
$type=$_POST['type'];
// echo $type;
$duration=$_POST['duration'];
// echo $duration;

include("connection.php");
$query="insert into tbl_courses(pname,cname,year,type,duration,dor,status) values('$pname','$cname','$year','$type','$duration',curdate(),'Y')";
mysqli_query($con,$query);
header("location:addcourses.php");
?>