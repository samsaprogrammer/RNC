<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="icon" href="images/logo.png">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/bootstrap.bundle.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
        <style>
                option
                {
                   font-weight: 500;     
                   color: #16423c;
                   background-color: #E9EFEC;     
                }
                
        </style>
</head>
<body>

<!-- left section start  -->
<div class="col-sm-3 left text-center bg-light overflow-y-scroll px-0 pb-5">

    <!-- profile -->
       
                <img src="images/admin.png" class="mt-3 border border-1 border-dark" height="100" style="border-radius:50%;"  alt="">
        
                <p class="fs-4 fw-semibold" style=" color: #16423c;">Welcome Admin</p>
        
     
    <hr>
    
    <!-- profile end -->


    <!-- left btns  -->
    <div class="row mt-3 px-4">
        
            <a href="admin.php" class="btn ad-btn fw-semibold w-100 py-2">Dashboard</a>
            <a href="addnotification.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Notification</a>
            <a href="addteaching.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Teaching Staff</a>
            <a href="viewteaching.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Teaching Staff</a>
            <a href="addnonteaching.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Non Teaching Staff</a>
            <a href="viewnonteaching.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Non Teaching Staff</a>
            <a href="addimage.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Gallery Images</a>
            <a href="addslider.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Slider</a>
            <a href="addcourses.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Courses</a>
            <a href="viewcourses.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Courses</a>
            <a href="addmentors.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Mentors</a>
            <a href="viewmentors.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Mentors</a>
            <a href="viewcontact.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Contact Messages</a>
            <a href="viewfeedback.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Feedback</a>
            <a href="addcommittee.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Committee</a>
            <a href="addcommitteemember.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">Add Committee Member</a>
            <a href="viewmember.php" class="btn ad-btn fw-semibold mt-2 w-100 py-2">View Committee Member</a>
            
            
    </div>
    <!-- left btns end -->
    
</div>


<!-- left section end  -->

</body>
</html>