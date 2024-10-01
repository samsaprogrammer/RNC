<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .follow ul li {
            list-style-type: none;
            display: inline;
        }

        .follow ul li a i {
            color: white;
            font-size: 20px;
            padding: 3px;
        }

        .form-control {
            font-size: 13px;
            padding: 15px;
            height: 58px;
            border-radius: 0;
            color: #172f41;
        }

        .form-control:hover {
            border: 1px solid #16423C;
        }

        .table {
            border-color: white;
        }

        .home {
            color: #16423C;
            text-decoration: underline;
        }

        .home:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 p-0">
                <div class="row py-5"
                    style="background-repeat: no-repeat;background-size: cover; background-image: url('images/contactbg.jpg');">

                    <div class="col-sm-12  pe-5 py-5">
                        <span class="float-end fs-2 me-5"><a href="index.php" class="home">Home </a> / Contact us</span>
                    </div>
                </div>

            </div>

        </div>
        <div class="row mt-5">
            <div class="col-sm-10 mx-auto">
                <span class="fs-1 fw-semibold"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                    Send Us<span style="color: #cc9c20;"> Quick Message</span>
                </span>
                <div class="col-sm-6 pt-1 rounded-pill ms-4" style="background-color: #16423C;">
                </div>
                <div class="row my-5 py-5 shadow">
                    <?php
                        if(isset($_REQUEST['msg']))
                        {
                        $msg=$_REQUEST['msg'];
                        if($msg==1)
                        {
                            ?>
                    <div class="alert alert-success text-center" role="alert">
                        Your record has been submitted. We will respond you soon.
                    </div>
                    <?php
                        }
                        }
                        ?>
                    <form method="post" action="contactcode.php" class="form-group">

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <table class="table">
                                        <tr>
                                            <td>Name</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="name" placeholder="Enter your name" required
                                                    class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contact No.</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="number" name="number" placeholder="Enter your contact no."
                                                    class="form-control">
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                                <div class="col-sm-6">
                                    <table class="table">
                                        <tr>
                                            <td>Email</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="email" name="email" placeholder="Enter your email address"
                                                    required class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Enter Message</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="message" class="form-control"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-12">
                                    <tr>

                                        <td>
                                            <button class="btn mt-4 w-100 fs-5 text-light rounded" type="submit"
                                                style="background-color: #16423C;">!!! Send Message !!!</button>
                                        </td>
                                    </tr>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-sm-10 mx-auto py-5 ">
                <div class="row">
                    <div class="col-sm-6 px-0">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28627.741113974665!2d86.078476!3d26.246482!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39edce6ae82f4d87%3A0x85a04718eac6585a!2sR.N.%20College!5e0!3m2!1sen!2sin!4v1726259396285!5m2!1sen!2sin"
                            class="w-100 h-100" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                    </div>
                    <div class="col-sm-6 px-5 pb-5 text-light" style="background-color: #16423C;">
                        <h1 style="color: white;" class="py-5 "><b>Get in touch</b></h1>

                        <p class="foot_text">
                            <i class="fa-solid fa-location-dot" style="color: white;"></i>
                            <b> Address</b>
                        </p>
                        <p class="foot_text" style="margin-top: -10px;">Rash Narayan College Main Road, Sagarpur
                            Madhubani, Bihar - 847234</p>
                        <p class="foot_text"><i class="fa-solid fa-envelope" style="color: white;"></i><b> Email</b></p>
                        <p class="foot_text" style="margin-top: -10px;">rasnarayancollege@gmail.com</p>
                        <p class="foot_text"><i class="fa-solid fa-phone" style="color: white;"></i><b> Phone</b></p>
                        <p class="foot_text" style="margin-top: -10px;">+91 91990-43650</p>

                        <div class="follow">
                            <h3 style="color: white;"><b>Follow Us</b></h3>
                            <ul>
                                <li><a href="https://twitter.com/nalanda_univ"><i class="fa-brands fa-twitter"></i></a>
                                </li>
                                <li><a href="https://www.linkedin.com/school/nalanda-open-university-patna/"><i
                                            class="fa-brands fa-linkedin"></i></a></li>
                                <li><a href="https://youtu.be/Sh9VxOBoYbk?si=37AnlDSEqDnUVcK8"><i
                                            class="fa-brands fa-youtube"></i></a></li>
                                <li><a
                                        href="https://www.instagram.com/nalnadaopenuniversityofficial?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw=="><i
                                            class="fa-brands fa-square-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/share/LCUWiGYLKKCaE586/?mibextid=A7sQZp"><i
                                            class="fa-brands fa-square-facebook"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include("footer.php");
?>