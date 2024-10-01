<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.N. College</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="js/bootstrap.bundle.js"></script>
    
</head>
<body>
    <div class="container-fluid">
      <!-- header -->
        <div class="row">
          <!-- date time -->
          <div class="col-sm-12" style="background-color: #e9efec;color: #16423C;">
            <div class="row py-2">
              <div class="col-sm-4 text-center">
                <span class="fw-semibold" style="word-spacing: 2px;">Welcome to RN College Pandaul, Official Page</span>
              </div>
              <div class="col-sm-8 text-end">
              <i class="fa-solid fa-phone"></i> 
              <span class="fw-semibold">+91 91990-43650 </span> &nbsp;&nbsp;&nbsp;&nbsp;
                <i class="fa-solid fa-envelope"></i> 
                <span class="fw-semibold">rasnarayancollege@gmail.com</span> &nbsp;&nbsp;&nbsp;
                <span id="todaydate" class="fw-semibold"></span>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>
              
              
            </div>
          </div>
          <!-- date time end -->

          <!-- logo  -->
            <div class="col-sm-12 text-dark">
                <div class="row align-items-center ">
                    <div class="col-sm-11 mx-auto ps-0">
                      <div class="row align-items-center">
                        <div class="col-sm-3 text-end">
                          <img src="images/logo.png" height="100" alt="">
                        </div>
                        <div class="col-sm-7 text-center">
                          <span class="fs-2 fw-semibold" style="color: #16423C;text-shadow: 1px 1px #6A9C89; font-family:Georgia, 'Times New Roman', Times, serif;">RASH NARAYAN COLLEGE, PANDAUL</span>
                        <br>
                        <span style="font-size: 13px;color: #6A9C89;">(A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</span>
                        </div>
                        <div class="col-sm-2 ps-0">
                          <img src="images/independencelogo.png" class="img-fluid"  alt="">
                        </div>
                      </div>
                      
                        
                    </div>
                </div>
                
                
            </div>
          <!-- logo end -->

          <!-- navbar -->
            <div class="col-sm-12 px-0">
                <nav class="navbar navbar-expand-lg" style="background-color: #16423C;box-shadow: 20px 20px 50px black inset;">
                  <div class="container-fluid">
                    <a class="navbar-brand text-light" href="#">
                      
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                      <ul class="navbar-nav mx-auto align-items-center mb-2 mb-lg-0 ">
                        <li class="nav-item  ">
                          <a class="nav-link" href="index.php" role="button">
                            Home
                          </a>
                          
                        </li>
                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="about.php">About College</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="vismis.php">Vission & Mission</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="vcmsg.php">Vice Chancellor's Desk</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="princimsg.php">Principal's Desk</a></li>
                          </ul>
                        </li>
                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Academic
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="https://admission.rnclnmu.ac.in/" target="_blank">Admission</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="courses.php">Courses offered</a></li>
                            
                          </ul>
                        </li>
                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Faculty
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="teachers.php">Teaching Staff</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="nonteacher.php">Non Teaching Staff</a></li>
                          </ul>
                        </li>
                        
                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Comittee & Cells
                          </a>
                          
                          <ul class="dropdown-menu">
                          <?php
                          include("connection.php");
                          $query="select * from tbl_committe";
                          $res=mysqli_query($con,$query);
                          while($row=mysqli_fetch_array($res))
                          {
                          ?>
                           <li><a class="dropdown-item" href="cc.php?ccid=<?php echo $row['ccid']; ?>"><?php echo $row['name']; ?></a></li>
                            <li><hr class="dropdown-divider"></li>
                            <?php
                          }
                          ?>
                          </ul>
                          
                        </li>

                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Departments
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="science.php">Science Department</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="arts.php">Arts Department</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="commerce.php">Commerce Department</a></li>
                          </ul>
                        </li>
                        
                        <li class="nav-item  ms-2">
                          <a class="nav-link" href="gallery.php" role="button">
                            Our Gallery
                          </a>
                          
                        </li>
                        
                        <li class="nav-item dropdown ms-2">
                          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Student & Support
                          </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="rules.php">Rules & Regulation</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="ncc.php">National Cadet Corps (NCC)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="nss.php">National Service Scheme (NSS)</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="canteen.php">Canteen</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="hostel.php">Hostel</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="internet.php">24*7 Internet</a></li>
                          </ul>
                        </li>
                        <li class="nav-item  ms-2">
                          <a class="nav-link" href="contact.php" role="button">
                            Contact Us
                          </a>
                        </li>
                        <li class="nav-item ms-2 ">
                          <a class="nav-link" href="feedback.php" role="button">
                            Feedback
                          </a>
                          
                        </li>  
                        <li class="nav-item ms-2">
                          <a class="fw-semibold nav-link"  href="https://admission.rnclnmu.ac.in/" target="_blank" role="button">
                            Admission
                          </a>
                        </li>                
                        
                      </ul>
                      
                    </div>
                  </div>
                </nav>
              </div>
          <!-- navbar end -->

        </div>
      <!-- header end -->

   
    <script> 
    function datetime()
    {
      document.getElementById("todaydate").innerHTML = new Date().toLocaleString(); 
    }
    setInterval(datetime, 1000);
  </script>
</body>
</html>