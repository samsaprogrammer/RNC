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
    <div class="row" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url('images/science.jpeg');height: 300px; background-position: center;background-repeat: no-repeat;background-size: cover;">
            
            <div class="col-sm-12 mt-5 pe-5 py-5">
                <span class=" fs-1 ms-5 text-light"><a href="index.php" class="home text-light">Home /</a> Departments</span>
            </div>
       

    </div>
    <div class="row mt-5">
        <div class="col-sm-11 my-5 mx-auto">
        <span class=" fs-1 fw-semibold"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;" data-aos="fade-right">
                    Science <span style="color: #cc9c20;">Department</span>
                    <div class="col-sm-5 pt-1 rounded-pill ms-4" style="background-color: #16423C;">
                    </div>
                </span>
                <div class="row mt-5">
                    <div class="col-sm-4">
                        <img src="images/science2.jpeg" class="w-100 p-2 border border-5" alt="">
                    </div>
                    <div class="col-sm-8">
                        <p class="fs-5" style="text-align: justify;">Science is the study of the nature and behaviour of natural things and the knowledge that we obtain about them. Particular branch of science such as physics, chemistry, or biology. Physics is the best example of a science which has developed strong, abstract theories.</p>
                            <p class="fs-5" style="text-align: justify;">
                                Modern science is typically divided into three major branches that consist of the natural sciences (e.g., biology, chemistry, and physics), which study nature in the broadest sense; the social sciences (e.g., economics, psychology, and sociology), which study individuals and societies; and the formal sciences (e.g., logic, mathematics, and theoretical computer science), which deal with symbols governed by rules.
                            </p>
                           
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <table class="table text-center table-striped-columns border">
                            <tr align="center">
                                <th>S. No.</th>
                                <th>Level</th>
                                <th>Programme</th>
                                <th>Duration</th>
                                <th>Minimum_Qualification</th>
                                <th>Strength</th>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>UG,B.Sc.(Honours)</td>
                                <td>Department of Physics</td>
                                <td>Three Years</td>
                                <td>Intermediate</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>UG,B.Sc.(Honours)</td>
                                <td>Department of Chemistry</td>
                                <td>Three Years</td>
                                <td>Intermediate</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>UG,B.Sc.(Honours)</td>
                                <td>Department of Mathematics</td>
                                <td>Three Years</td>
                                <td>Intermediate</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>UG,B.Sc.(Honours)</td>
                                <td>Department of Botany</td>
                                <td>Three Years</td>
                                <td>Intermediate</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>UG,B.Sc.(Honours)</td>
                                <td>Department of Zoology</td>
                                <td>Three Years</td>
                                <td>Intermediate</td>
                                <td>-</td>
                            </tr>
                        </table>
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