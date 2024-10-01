<?php

session_start();
include("connection.php");
$query="select * from tbl_admin";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $pp=$row['password'];
    echo $pp;
}
$oldpass=$_POST['op'];
echo $oldpass;
$newpass=$_POST['np'];
echo $newpass;
$cnpass=$_POST['cnp'];
echo $cnpass;
if($oldpass==$pp )
{
    if($newpass==$cnpass)
    {
        $cquery="update tbl_admin set password='$newpass'";
        header("location:changepassword.php?msg=1");
    }
    else
    {
        
        header("location:changepassword.php?msg=2");
    }
}
else
{
    header("location:changepassword.php?msg=3");
}
mysqli_query($con,$cquery);

?>