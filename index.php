<?php
include("header.php");
include("connection.php");
$query="select * from tbl_gallery";
$res=mysqli_query($con,$query);

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
    <style>

    </style>
</head>

<body>
    <div class="container-fluid p-0">

        <?php
    $squery="select * from tbl_slider";
    $slider=mysqli_query($con,$squery);

    ?>
        <!-- slider start -->
        <div class="row">
            <div class="col-sm-12 p-0">
                <div id="banner-carousel" class="splide" aria-label="Banner Carousel">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <?php
                            while($row3=mysqli_fetch_array($slider))
                            {
                            ?>
                            <li class="splide__slide px-0"
                                style="background-image:  linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('http://localhost/RNC/admin/slider/<?php echo $row3['photo']; ?>');background-position: center;background-repeat: no-repeat;background-size: cover;height: 500px;">

                                <div class="py-5 text-center slider-text px-5">
                                    <p class="ms-5">
                                        Welcome to RN College Pandaul</p>
                                    <p class="ms-5">
                                        (A Constituent Unit of Lalit Narayan Mithila University, Darbhanga)</p>
                                    <div class="mt-5">
                                        <a href="https://admission.rnclnmu.ac.in/" class="ms-5 slider-btn btn">Apply Now</a>
                                        <a href="about.php" class="ms-5 btn  slider-btn">Read More</a>
                                    </div>

                                </div>


                            </li>
                            <?php
                            }
                            ?>


                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- slider end -->

        <!-- about us text -->
        <div class="row mt-5" data-aos="zoom-in-up" data-aos-duration="1000">
            <div class="col-sm-11 mx-auto">
                <div class="row">
                    <div class="col-sm-6">
                        <span class="fs-1 fw-semibold" style="color: #16423C;">
                            About <span style="color: #cc9c20;">Us</span>
                            <div class="col-sm-3 pt-1 rounded-pill ms-4" style="background-color: #16423C;">
                            </div>
                        </span>
                        

                        <p class="fs-5 mt-4" style=" text-align: justify;"><b>R.N. College, Pandaul</b> was
                            established on June 01, 1959 as an Institution of Higher Education with the mission to
                            spread the
                            light of knowledge among the downtrodden lot of Mithilanchal and thereby enabling them to
                            develop as
                            worthy citizens of the country with a sense of genuine pride in their hoary cultural
                            traditions.</p>

                        <p class="fs-5 mt-3" style=" text-align: justify;">We have tried to provide the best
                            education possible in the streams of science, arts and commerce. An evidence of the success
                            of these
                            endeavors is that the college has consistently maintained its position as a ‘college of
                            choice’ for
                            many of the best students of Bihar. We also keep ourselves aware of the recent trend in the
                            industry
                            and ensure that our students meet with the contemporary demands in terms of their
                            employability.</p>
                            <span class=" fs-5 fw-semibold"><a href="about.php" class="btn fw-semibold"
                                        style="background-color: #16423C; color: white;">Show more <i
                                            class="fa-solid fa-arrow-right"></i></a></span>
                    </div>
                    <?php
                        $nquery="select * from tbl_notification ";
                        $notice=mysqli_query($con,$nquery);
        
                    ?>

                    <!-- notifications  -->
                    <div class="col-sm-6">
                        <span class="fs-2 fw-semibold" style="color: #16423C;">
                            Important <span style="color: #cc9c20;"> Notifications</span>
                            <i class="fa-solid fa-exclamation"></i>
                            <div class="col-sm-7 pt-1 rounded-pill ms-5" style="background-color: #16423C;">
                            </div>
                        </span>
                        <div class="mt-5 notification ps-3 pe-5 py-3">
                            <marquee behavior="alternate" scrollamount="3" onmouseout="start()" onmouseover="stop()" direction="up" class="h-100">
                                <?php
                                while($notify=mysqli_fetch_array($notice))
                                {
                                ?>
                                <p>
                                    <span style="font-size: 12px;color: #cc9c20;">
                                        <?php echo $notify['dor']; ?>
                                    </span>
                                    <br>
                                    <a href="http://localhost/RNC/admin/notice/<?php echo $notify['filename']; ?>"
                                        class="notice">
                                        <?php echo $notify['message']; ?> <img src="images/new-gif-image.gif" alt=""
                                            height="18px">
                                        <hr>
                                    </a>
                                    </span>
                                    <?php
                                }
                                ?>
                            </marquee>
                        </div>
                    </div>
                    <!-- notifications  -->

                </div>

            </div>
        </div>
        <!-- about us text end -->

        <!-- courses start  -->

        <div class="row mt-5">

            <div class="col-sm-12 mt-5 ps-5 py-5"
                style="background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/courses-banner.jpg');height: 450px;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;">
                <span class="fw-semibold"
                    style="color: white;font-size: 80px;font-family: 'Times New Roman', Times, serif;">
                    Explore <span style="border-bottom: 5px solid #cc9c20;">Majors</span> & <br>
                    <span class="" style="border-bottom: 5px solid #cc9c20;">Programs</span>
                </span>

                <a href="courses.php" class="btn fs-3 text-light me-5 float-end" style="background-color: #cc9c20;">View
                    All Programs <i class="fa-solid fa-arrow-right"></i></a>

            </div>
        </div>


        <!-- courses end -->

        <!-- facilities start -->
        <div class="row pb-5 mt-5">
            <div class="col-sm-11 mx-auto" data-aos="zoom-in" data-aos-duration="1000">
                <div class="row">
                    <span class="float-start fs-2 fw-semibold"
                        style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                        Facilities <span style="color: #cc9c20;">Provided By Us</span> <i
                            class="fa-solid fa-bars-progress"></i></span>
                    <div class="ms-5 pt-1 col-sm-4" style="background-color: #16423C;"></div>
                    </span>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-4">
                        <div class="card w-100 rounded">
                            <div class="card-body facilities rounded text-center">
                                <i class="fa-solid fa-book fs-3 p-2"
                                    style="background-color: #16423C; color: white;"></i>
                                <br>
                                <span class="text-center fs-5 fw-bold"
                                    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">Automated
                                    Library</span>
                                <p class="fw-semibold">We have well equiped fully automated library for our students.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card w-100 rounded">
                            <div class="card-body facilities rounded text-center">
                                <i class="fa-solid fa-chalkboard-user fs-3 p-2"
                                    style="background-color: #16423C; color: white;"></i>
                                <br>
                                <span class="text-center fs-5 fw-bold"
                                    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">Experienced
                                    Faculty</span>
                                <p class="fw-semibold">The students learn under the guidance of experienced faculties.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card w-100 rounded">
                            <div class="card-body facilities rounded text-center">
                                <i class="fa-solid fa-seedling fs-3 p-2"
                                    style="background-color: #16423C; color: white;"></i>
                                <br>
                                <span class="text-center fs-5 fw-bold"
                                    style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">Neat
                                    and Clean Environment</span>
                                <p class="fw-semibold">Students get practical exposure while working in well equipped
                                    labs.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-5">
                    <div class="col-sm-8 mx-auto">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="card w-100  rounded">
                                    <div class="card-body facilities rounded text-center">
                                        <i class="fa-solid fa-hotel fs-3 p-2"
                                            style="background-color: #16423C; color: white;"></i>
                                        <br>
                                        <span class="text-center fs-5 fw-bold"
                                            style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">Affordable
                                            Hostels</span>
                                        <p class="fw-semibold">We have one of the largest infrastructure with all modern
                                            amenities.</p>
                                    </div>
                                </div>

                            </div>
                            <div class="col-sm-6">
                                <div class="card w-100 rounded">
                                    <div class="card-body facilities rounded text-center">
                                        <i class="fa-solid fa-flask-vial fs-3 p-2"
                                            style="background-color: #16423C; color: white;"></i>
                                        <br>
                                        <span class="text-center fs-5 fw-bold"
                                            style="font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif ;">Laboratory
                                            Facility</span>
                                        <p class="fw-semibold">Students get practical exposure while working in well
                                            equipped labs.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <!-- facilities end -->

        <!-- mentors -->


        <div class="row py-5">
            <div class="col-sm-11 mx-auto">
                <div class="row">
                    <span class="float-start fs-1 fw-semibold"
                        style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                        Our<span style="color: #cc9c20;"> Mentors </span> <i
                            class="fa-solid fa-chalkboard-user"></i>
                            <span class="float-end mt-3 fs-5 fw-semibold"><a href="teachers.php" class="btn fw-semibold"
                                style="text-decoration: underline; color: #16423C;">Show more <i
                                    class="fa-solid fa-shake fa-arrow-right"></i></a></span>
                        </span>
                           
                    <div class="ms-5 pt-1 col-sm-3" style="background-color: #16423C;"></div>
                    
                </div>

                <div class="row mt-5">
                    <?php
                    $mquery="select * from  tbl_mentor";
                    $mres=mysqli_query($con,$mquery);
                    while($mrow=mysqli_fetch_array($mres))
                    {                       
                    ?>
                    <div class="col-sm-3" data-aos="fade-down">
                        <div class="card faculty w-100">
                            <img src="http://localhost/RNC/admin/mentors/<?php echo $mrow['photo']; ?>"
                                class="card-img-top " alt="...">
                            <div class="faculty-text">
                                <span class="fs-5"><b>
                                        <?php echo $mrow['name']; ?>
                                    </b><br>
                                    <?php echo $mrow['designation']; ?><br>
                                    <?php echo $mrow['place']; ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>

                </div>
            </div>
        </div>

        <!-- mentors end -->

        <!-- counter -->

        <div class="row mt-5 py-5" style="background-color: #16423C; box-shadow: 40px 40px 240px black inset;">
            <div class="col-sm-10 mx-auto">
                <div class="row">
                    <div class="col-sm-3 text-center">
                        <i class="fa-solid fa-hotel fs-1 p-4"
                            style="background-color: white;border-radius: 50%; color: #16423C;"></i>
                        <br>
                        <br>
                        <span class=" fs-3 fw-bold text-light">60+</span>
                        <br>
                        <span class="fs-5 text-light">Years of Estabishment</span>
                    </div>
                    <div class="col-sm-3 text-center">
                        <i class="fa-solid fa-book fs-1 p-4"
                            style="background-color: white;border-radius: 50%; color: #16423C;"></i>
                        <br>
                        <br>
                        <span class=" fs-3 fw-bold text-light">17+</span>
                        <br>
                        <span class="fs-5 text-light">Courses Available</span>
                    </div>
                    <div class="col-sm-3 text-center">
                        <i class="fa-solid fa-user fs-1 p-4"
                            style="background-color: white;border-radius: 50%; color: #16423C;"></i>
                        <br>
                        <br>
                        <span class=" fs-3 fw-bold text-light">4000+</span>
                        <br>
                        <span class="fs-5 text-light">Students</span>
                    </div>
                    <div class="col-sm-3 text-center">
                        <i class="fa-solid fa-chalkboard-user fs-1 p-4"
                            style="background-color: white;border-radius: 50%; color: #16423C;"></i>
                        <br>
                        <br>
                        <span class=" fs-3 fw-bold text-light">30+</span>
                        <br>
                        <span class="fs-5 text-light">Staff</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- counter end -->

        <!-- testimonals -->
        <div class="row py-5"
            style="background-image: url('images/testimonal.jpeg'); background-repeat: no-repeat;background-size: cover;height: 470px;">
            <div class="col-sm-10 text-center mx-auto">
                <span>What our people say</span>
                <br>
                <p class="fs-2 py-0 fw-semibold" style="margin-top: -10px;">Our Testimonals</p>
                <span class="mt-0 py-0">We have tried to provide the best education possible in the streams
                    of science, arts and commerce.</span>
                <div class="splide" id="image-slider" style="height: 300px;">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="row mt-3">
                                    <div class="col-sm-6 py-4 border border-4  mx-auto">
                                        <p class=" fs-3">" It was incredible, time flew and I had a <br>
                                            great learning experience. "</p>
                                        <img src="images/student.png" class="img-fluid bg-dark"
                                            style="border-radius: 50%;height: 80px; width: 80px;" alt="">
                                        <span class="fs-5 "> -- Shiva B.SC. Maths</span>
                                    </div>

                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="row mt-3">
                                    <div class="col-sm-6 py-4 border border-1  mx-auto">
                                        <p class=" fs-3 ">" It was incredible, time flew and I had a <br> great learning
                                            experience. "</p>
                                        <img src="images/student.png" class="img-fluid bg-dark"
                                            style="border-radius: 50%;height: 80px; width: 80px;" alt="">

                                        <span class="fs-5 "> -- Shiva B.SC. Maths</span>
                                    </div>

                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="row mt-3">
                                    <div class="col-sm-6 py-4 border border-1  mx-auto">
                                        <p class=" fs-3 ">" It was incredible, time flew and I had a <br> great learning
                                            experience. "</p>
                                        <img src="images/student.png" class="img-fluid bg-dark"
                                            style="border-radius: 50%;height: 80px; width: 80px;" alt="">

                                        <span class="fs-5 "> -- Shiva B.SC. Maths</span>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- testimonals end -->

        <!-- FAQ s and gallery -->
        <div class="row mt-5 py-5">
            <div class="col-sm-11 mx-auto">
                <div class="row">
                    <!-- Gallery -->
                    <div class="col-sm-12 align-items-center" data-aos="fade-up" data-aos-duration="1000">
                        <div class="row">
                            <div class="col-sm-12">
                                <span class="float-start fs-1 fw-semibold"
                                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                                    Photo <span style="color: #cc9c20;">Gallery</span> <i
                                        class="fa-regular fa-image"></i>
                                    <div class="col-sm-12 pt-1 rounded-pill ms-5" style="background-color: #16423C;">
                                    </div>
                                </span>

                                <span class="float-end mt-3 fs-5 fw-semibold"><a href="gallery.php" class="btn fw-semibold"
                                        style="text-decoration: underline; color: #16423C;">Show more <i
                                            class="fa-solid fa-shake fa-arrow-right"></i></a></span>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <?php
                            while($row=mysqli_fetch_array($res))
                            {
                            ?>
                            <div class="col-sm-3 float-start">
                                <img src="http://localhost/RNC/admin/gallery/<?php echo $row['photo']; ?>"
                                    class="w-100 mt-3" height="200" alt="">
                            </div>
                            <?php
                            }
                            ?>

                        </div>


                    </div>
                    <!-- Gallery end -->
                </div>
            </div>
        </div>
        <!-- FAQ s and gallery end -->

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

        <!-- Useful links -->
        <div class="row py-5">
            <div class="col-sm-11 mx-auto">
                <div class="row">
                    <span class="float-start fs-1 fw-semibold"
                        style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                        Useful<span style="color: #cc9c20;"> Links</span></span>
                    <div class="col-sm-3 pt-1 rounded-pill ms-5" style="background-color: #16423C;"></div>
                </div>

                <div class="row mt-5 align-items-center">
                    <div class="splide" id="link-slider" style="height: 200px;">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link1.png" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>


                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link4.jpg" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link5.png" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link2.jpg" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link6.png" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="col-sm-8">
                                        <div class="card w-100 px-3">
                                            <img src="images/link3.jpg" class="w-100" alt="">
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Useful links end -->

        <!-- Important links -->

        <div class="row mt-5 py-5" style="background-color: #16423C;">
            <div class="col-sm-11 mx-auto">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="row">
                            <a href="" class="col-sm-10 btn foot-btn text-center text-light mx-auto py-2">
                                <i class="fa-solid fs-4 border border-1 p-2 fa-file-lines"
                                    style="border-radius: 50%; "></i>
                                <p class="fw-semibold mt-3">Onine Admission & Enquiry</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-10 btn foot-btn text-center text-light mx-auto py-2">
                                <i class="fa-solid fs-4 border border-1 p-2 fa-grip" style="border-radius: 50%; "></i>
                                <p class="fw-semibold mt-3">Grievance Redressal</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-10 btn foot-btn text-center text-light mx-auto  py-2">
                                <i class="fa-solid fs-4 border border-1 p-2 fa-user-tie"
                                    style="border-radius: 50%; "></i>
                                <p class="fw-semibold mt-3">Admission</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="row">
                            <div class="col-sm-10 btn foot-btn text-center text-light mx-auto py-2">
                                <i class="fa-solid fs-4 border border-1 p-2 fa-phone" style="border-radius: 50%; "></i>
                                <p class="fw-semibold mt-3">Enquiry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Important links end -->

        

    </div>


    <script src="js/bootstrap.bundle.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/js/splide.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#banner-carousel', {
                type: 'loop',  // Loop the slides
                perPage: 1,       // Show one slide at a time
                autoplay: true,   // Auto-slide
                interval: 3000,   // Delay between transitions (in milliseconds)
                padding: '0px',
                arrows: true,
            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#image-slider', {
                type: 'loop',       // Looping the slides
                perPage: 1,            // Display one slide at a time
                pagination: true,         // Enable pagination (bullet controls)
                arrows: false,         // Enable navigation arrows
                autoplay: true,
                interval: 2000,
                pauseonhover: true,

            }).mount();
        });

        document.addEventListener('DOMContentLoaded', function () {
            new Splide('#link-slider', {
                type: 'loop',       // Looping the slides
                perPage: 4,            // Display one slide at a time
                pagination: true,         // Enable pagination (bullet controls)
                arrows: false,         // Enable navigation arrows
                autoplay: true,
                interval: 3000,
                pauseonhover: true,

            }).mount();
        });
    </script>
    <!-- Aos js  -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>

<?php include("footer.php"); ?>