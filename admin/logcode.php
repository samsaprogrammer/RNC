<?php
session_start();
$email=$_POST['e'];
echo $email;
$pass=$_POST['p'];
echo $pass;
include("connection.php");
$query="select * from tbl_admin where email='$email' and password='$pass'";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $_SESSION['admin']=$email;
    header("location:admin.php");
}
else
{
    header("location:index.php?msg=2");
}
?>
