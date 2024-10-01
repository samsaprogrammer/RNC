<?php
session_start();
if($_SESSION['admin']=="")
{
    session_destroy();
    header("location:index.php?msg=3");
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
        <style>
            .dropbtn {
              color: white;
              border-radius: 50%;
              height: 40px;
              width: 40px;
              cursor: pointer;
            }
            
            .dropdown {
              position: relative;
              display: inline-block;
            }
            
            .dropdown-content {
              display: none;
              position: absolute;
              right: 0;
              background-color: #f9f9f9;
              min-width: 250px;
              box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
              z-index: 1;
            }
            
            .dropdown-content a {
              color: #16423c;
              padding: 12px 16px;
              text-decoration: none;
              display: block;
            }
            
            .dropdown-content a:hover 
            {
                background-color: #16423c;
                color: white;
            }
            .dropdown:hover .dropdown-content 
            {
                display: block;
            }
            .dropdown:hover .dropbtn 
            {
                background-color: #3e8e41;
            }
            </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 ps-4 py-1 align-items-center" style="background-color: #e9efec;color: #16423c;">
                <div class="float-start">
                    <span class="fs-5 fw-bold float-start mt-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">
                        <i class="fa-solid fa-user-tie"></i>
                        <?php
                            date_default_timezone_set('Asia/Kolkata');
                            $currentTime=date('H:i:sa');
                            // echo $currentTime;
                            if($currentTime>='05:00:00' && $currentTime<'12:00:00')
                            {
                                $greeting="Good Morning Admin";
                            }
                            elseif($currentTime>='12:00:00' && $currentTime<'16:00:00')
                            {
                                $greeting="Good Afternoon Admin";
                            }
                            elseif($currentTime>='16:00:00' && $currentTime<'22:00:00')
                            {
                                $greeting="Good Evening Admin";
                            }
                            else
                            {
                                $greeting="Good Night Admin";
                            }
                            echo $greeting;
                        ?>
                       
                       
                        
                    </span>
                </div>
                
                <div class="dropdown" style="float:right;">
                    
                    <img src="images/me.jpg" class="dropbtn" alt="">
                    <i class="fa-solid fa-chevron-down"></i>
                   
                    <div class="dropdown-content">
                    <a href="" style="background-color: #e9efec; color: black;">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="images/me.jpg" style="border-radius: 50%;" height="40" width="40" alt="">
                            </div>
                            <div class="col-sm-9">
                                <span class="fw-semibold"> Mo Yusuf</span>
                        <br>
                        <span class="fw-semibold">
                            <?php
                            echo $_SESSION['admin'];
                            ?>
                        </span>
                            </div>
                        </div>
                       
                    </a>
                    
                      <a href="admin.php" class="fw-semibold"><i class="fa-solid fa-user"></i> My Profile</a>
                      <a href="changepassword.php" class="fw-semibold"><i class="fa-solid fa-lock"></i> Change Password</a>
                      <a href="logout.php" class="fw-semibold"><i class="fa-solid fa-arrow-right-from-bracket"></i> Logout</a>
                    </div>
                  </div>
                
                
            </div>
        </div>
    </div>
</body>
</html>