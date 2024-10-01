<?php
include("connection.php");
$query="select count(*) from tbl_teacher";
$res=mysqli_query($con,$query);
if($row=mysqli_fetch_array($res))
{
    $name=$row[0];
}
$query2="select count(*) from tbl_nonteacher";
$res2=mysqli_query($con,$query2);
if($row2=mysqli_fetch_array($res2))
{
    $name2=$row2[0];
}
$query3="select count(*) from tbl_notification";
$res3=mysqli_query($con,$query3);
if($row3=mysqli_fetch_array($res3))
{
    $name3=$row3[0];
}
$query4="select count(*) from tbl_feedback";
$res4=mysqli_query($con,$query4);
if($row4=mysqli_fetch_array($res4))
{
    $name4=$row4[0];
}
$query5="select count(*) from tbl_slider";
$res5=mysqli_query($con,$query5);
if($row5=mysqli_fetch_array($res5))
{
    $name5=$row5[0];
}
$query6="select count(*) from tbl_contact";
$res6=mysqli_query($con,$query6);
if($row6=mysqli_fetch_array($res6))
{
    $name6=$row6[0];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    </head>
<body>

<!-- right section  -->

<div class="col-sm-9 right ps-2 pt-3 pb-5">
    <!-- right card -->
    <div class="row">
        <div class="col-sm-11 mx-auto">
            <div class="row mt-5">
                <div class="col-sm-4">
                    <a href="viewteaching.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-solid fa-user-tie mt-4" style="font-size: 80px;color: #16423c;"></i>
                        <span class="mt-3 fs-5">View Teaching staff</span>
                        <span class="fs-5"><?php echo $name; ?></span>
                      </div>
                    </a>
                </div>
                <div class="col-sm-4 text-center">
                <a href="viewnonteaching.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-solid fa-users mt-4" style="font-size: 80px;color: #16423c;"></i>
                        <span class="mt-3 fs-5">View Non Teaching staff</span>
                        <span class="fs-5"><?php echo $name2; ?></span>
                    </div>
                    </a>
                </div>
                <div class="col-sm-4">
                <a href="addnotification.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-solid fa-bell mt-4" style="font-size: 80px;color: #16423c;"></i>
                        <span class="mt-3 fs-5">View Notification</span>
                        <span class="fs-5"><?php echo $name3; ?></span>
                      </div>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="row mt-5">
        <div class="col-sm-11 mx-auto">
            <div class="row">
                <div class="col-sm-4">
                    <a href="viewfeedback.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-solid fa-comment mt-4" style="font-size: 80px;color: #16423c;"></i>
                    <span class="mt-3 fs-5">View Feedback</span>
                    <span class="fs-5"><?php echo $name4; ?></span>
                      </div>
                    </a>
                </div>
                <div class="col-sm-4">
                <a href="addslider.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-solid fa-sliders mt-4" style="font-size: 80px;color: #16423c;"></i>
                    <span class="mt-3 fs-5">View Slider gallery</span>
                    <span class="fs-5"><?php echo $name5; ?></span>
                      </div>
                    </a>
                </div>
                <div class="col-sm-4">
                <a href="viewcontact.php" class="btn w-100">
                    <div class="card shadow w-100 text-center">
                        <i class="fa-regular fa-address-card mt-4" style="font-size: 80px;color: #16423c;"></i>
                    <span class="mt-3 fs-5">View Contact</span>
                    <span class="fs-5"><?php echo $name6; ?></span>
                      </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- right card  end -->
</div>

<!-- right section end -->

</body>
</html>