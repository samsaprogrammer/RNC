<?php
include("header.php");
include("connection.php");
$query="select * from tbl_courses";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .follow ul li
        {
            list-style-type: none;
            display: inline;
        }
        .follow ul li a i
        {
            color: white;
            font-size: 20px; 
            padding: 3px;
        }
        .form-control 
        {
            font-size: 13px;
            padding: 15px;
            height: 58px;
            border-radius: 0;
            color: #172f41;
        }
        .form-control:hover
        {
            border: 1px solid #16423C;
        }
        .table
        {
            border-color: white;
        }
        .home
        {
            color: #16423C;
            text-decoration: underline;
        }
        .home:hover
        {
            transform: scale(1.2);      
        }
    </style>
</head>
<body>
   <div class="container-fluid px-0">
    <div class="row">
        <div class="col-sm-12 p-0">
            <div class="row py-5 w-100" style="background-repeat: no-repeat;background-size: cover; background-image: url('images/coursesbackground.jpg');min-height: 300px;">
              
              <div class="col-sm-12 px-5 mt-4">
                  <span  class="fs-1 fw-semibold" style="color: #16423C;">Courses</span>
                  <br>
                <span  class="fs-2 fw-semibold"><a href="index.php" class="home">Home </a> / Courses</span>
              </div>
            </div>
              
          </div>
    </div>
    <div class="row mt-5 py-5">
        
        <div class="col-sm-11 mx-auto">
            <span class="fs-1 fw-semibold"
                        style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                        Courses<span style="color: #cc9c20;"> Offered ..</span>
            </span>
            <div class="ms-5 pt-1 col-sm-3" style="background-color: #16423C;"></div>
            <div class="row mt-5">
                <?php
                        while($row=mysqli_fetch_array($res))
                        {
                        ?>
                <div class="col-sm-4 pb-4 ps-3" >
                    
                    <div class="row mx-2 py-5 " style="background-image: url('images/addcourse.avif');background-repeat: no-repeat;background-size: cover;">
                        
                        <div class="col-sm-4 ps-3 pt-2">
                          <img src="images/logo.png" alt="" style="border: 1px solid #e4f1e8; border-radius: 50%;background-color: #fff; height: 100px;width: 100px;">
                        </div>
                        <div class="col-sm-8">
                          <h4 style="color: #16423C ;"><?php echo $row['pname']; ?></h4>
                          <p style="color: #16423C;"><b><?php echo $row['cname']; ?></b></p>
                          <p style="color: #16423C;margin-top: -18px;"><b><?php echo $row['year']; ?></b></p>
                          <span style="color: #cc9c20;margin-top: -10px;">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                          </span>
                          
                        </div>
                        
                      </div>
                      <div class="card-body mt-3 text-center">
                        <h4 class="card-text" style="color: #16423C;"><?php echo $row['type']; ?></h4>
                        <p style="color: #16423C;"><b>Duration:<?php echo $row['duration']; ?></b></p>
                        </div>
                        
                </div>
                <?php
                        }
                        ?>
            </div>
        </div>
    </div>
    <!-- student information system  -->

    <div class="row my-5 py-5"
            style="background-image: linear-gradient(rgba(14, 12, 12, 0.5),rgba(14, 12, 12, 0.5)),url('images/counter.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;color: white;box-shadow: 40px 40px 250px #16423C inset;">
            <div class="col-sm-10 mx-auto">
                <p class="fs-1" style="font-family:'Times New Roman', Times, serif;">Student Information System</p>
                <p class="fs-5" style="font-weight: lighter;">This section will deal with all the information pertaining
                    to a student such as personal, academic as well as digital documents and student report.</p>
                <a href="https://cas.rnclnmu.ac.in/student/" class="btn fs-5 fw-semibold rounded px-4"
                    style="background-color: #cc9c20;color: white;">Sign
                    in</a>
            </div>
        </div>

        <!-- student information system  -->
   </div>
</body>
</html>

<?php
include("footer.php");
?>
