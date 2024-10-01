<?php
include("header.php");
include("connection.php");
$query="select * from tbl_teacher";
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
            <div class="row py-5 w-100" style="background-repeat: no-repeat;background-size: cover; background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/slider3.jpg');min-height: 300px;">
              
              <div class="col-sm-12 px-5 mt-5">
                <span  class="fs-2 fw-semibold" style="color: white;"><a href="index.php" class="home text-light">Home </a> / Faculty Members</span>
              </div>
            </div>
              
          </div>
    </div>
    <div class="row mt-5 py-5">
        
        <div class="col-sm-11 mx-auto">
            <span class="fs-1 fw-semibold"
                        style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                        Teaching<span style="color: #cc9c20;"> Staff </span>
            </span>
            <div class="ms-5 pt-1 col-sm-3" style="background-color: #16423C;"></div>
            <div class="row mt-3">
                <?php
                        while($row=mysqli_fetch_array($res))
                        {
                        ?>
                <div class="col-sm-3 text-center mt-5">
                    <img src="http://localhost/RNC/admin/teacher/<?php echo $row['photo']; ?>" height="150" class="w-50 rounded border border-2 p-1" alt="">
                    
                </div>
                <div class="col-sm-3 mt-5">
                    <span class="fw-semibold">Name:- <?php echo $row['name']; ?></span>
                    <br>
                    <span class="fw-semibold">Designation:- <?php echo $row['designation']; ?></span>
                    <br>
                    <span class="fw-semibold">Qualification:- <?php echo $row['qualification']; ?></span>
                    <br>
                    <span class="fw-semibold">Department:- <?php echo $row['department']; ?></span>
                    <br>
                    <span class="fw-semibold">Email:- <?php echo $row['email']; ?></span>
                    <br>
                    <span class="fw-semibold">Contact No.:- <?php echo $row['mobile']; ?></span>
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
