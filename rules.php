<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>R.N. College</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">


    <link rel="stylesheet" href="css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- font-awesome -->
    <!-- AOS css  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Splide css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    
</head>
<body>
    <div class="container-fluid p-0">
    <div class="row" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/gallerybanner.jpeg');height: 300px; background-position: center;background-repeat: no-repeat;background-size: cover;">
            
            <div class="col-sm-12 mt-5 pe-5 py-5">
                <span class=" fs-1 ms-5 text-light"><a href="index.php" class="home text-light">Home /</a> Facilties</span>
            </div>
       

    </div>
    <div class="row mt-5">
        <div class="col-sm-11 my-5 mx-auto">
        <span class=" fs-1 fw-semibold"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;" data-aos="fade-right">
                    Rules & <span style="color: #cc9c20;">Regulation</span>
                    <div class="col-sm-4 pt-1 rounded-pill ms-5" style="background-color: #16423C;">
                    </div>
                </span>
                <div class="row mt-5" data-aos="zoom-in">
                    <div class="col-sm-3">
                        <img src="images/rules.avif" class="w-100 h-50" alt="">
                    </div>
                    <div class="col-sm-9">
                        <p class="fs-5" style="text-align: justify;">Students must accept to the rules and discipline of the College. The object of discipline is to help the students to develop their potentialities in an orderly way, to promote a healthy relation between the teachers & the taught as also to preserve a peaceful academic atmosphere essential for study. Love and affection is always the guiding principle and the basis for obedience, though strict discipline is also insisted upon.

                            Students are advised to contact in charge teachers/staffs for redressal of their grievances and not the Principal unless otherwise inevitable.
                            
                            </p>
                            <p class="fs-5">Ragging is strictly prohibited in the campus.</p>
                            <p class="fs-5">Attend classes regularly.</p>
                            <p class="fs-5">Behave properly inside and outside college campus.</p>
                            <p class="fs-5">Attend and try the best to make good results in internal college examinations.</p>
                    </div>
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
    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>

<?php
include("footer.php");
?>