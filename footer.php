<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
?>

<div class="row pb-4 pt-5" style="
            background:linear-gradient(#16423c 30% ,#6A9C89 90%);">
    <div class="col-sm-3 text-center text-light">
        <img src="images/logo.png" class="img-fluid bg-white w-25" style="border-radius: 50%;" alt="">
        <p class="fs-5 mt-3 fw-semibold">Rash Narayan College Pandaul</p>
        <p>Rash Narayan College Main Road, Sagarpur Madhubani, Bihar - 847234</p>
        <i class="fa-solid fa-phone"></i>
        <span class="fw-semibold">+91 91990-43650 </span>
        <br>
        <i class="fa-solid fa-envelope"></i>
        <span class="fw-semibold">rasnarayancollege@gmail.com</span>
        <br>
        <div class="row mt-4 px-5">
            <div class="col-sm-2">
                <i class="fa-brands btn fa-facebook-f fw-bold p-3 bg-white"
                    style="border-radius: 50%; color: #16423c;"></i>
            </div>
            <div class="col-sm-2 ms-3">
                <i class="fa-brands btn fa-x-twitter fw-bold p-3 bg-white"
                    style="border-radius: 50%; color: #16423c;"></i>
            </div>
            <div class="col-sm-2 ms-3">
                <i class="fa-brands btn fa-instagram fw-bold p-3 bg-white"
                    style="border-radius: 50%; color: #16423c;"></i>
            </div>
            <div class="col-sm-2 ms-3">
                <i class="fa-brands btn fa-youtube p-3 fw-bold bg-white"
                    style="border-radius: 50%; color: #16423c;"></i>
            </div>
        </div>
    </div>
    <div class="col-sm-3 px-5 text-light">
        <div class="row">
            <span class="fs-4 fw-bold">Quick Links</span>
            <div class="bg-white pt-1 w-50 ms-3 rounded-pill"></div>
            <div class="mt-5">
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">Lalit Narayan Mithila Universty</a>
                </span>
                <br>
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">University Grants Commision</a>
                </span>
                <br>
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">NPTEL Lectures</a>
                </span>
                <br>
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">Swayam Student Portal</a>
                </span>
                <br>
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">Grievence Redressal System</a>
                </span>
                <br>
                <span>
                    <i class="fa-solid fa-link text-light"></i>
                    <a href="" class="btn foot px-0">e-PG Patshala</a>
                </span>
            </div>
        </div>

    </div>
    <div class="col-sm-3 px-5 text-light">
        <span class="fs-4 fw-bold">Explore here</span>
        <div class="bg-white pt-1 w-50"></div>
        <div class="mt-5">
            <a href="" class="btn foot">Digilocker</a>
            <br>
            <a href="gallery.php" class="btn foot">Image Gallery</a>
            <br>
            <a href="" class="btn foot">Press Release</a>
            <br>
            <a href="" class="btn foot">FAQ's</a>
            <br>
            <a href="contact.php" class="btn foot">Contact Us</a>
            <br>
            <a href="" class="btn foot">NAAC</a>
            <br>
            <a href="" class="btn foot">SSR</a>
        </div>
    </div>
    <div class="col-sm-3 text-light pe-5">
        <span class="fs-4 fw-bold">Subscribe here</span>
        <div class="bg-white pt-1 w-50"></div>
        <div class="mt-5">
            <span class="text-light fw-semibold">Fill the detail below to get in touch with Rash Narayan College Pandaul
                .</span>
            
                <div class="mt-5">
                    <form class="d-flex" method=" post">
                    <input type="email" name="email" placeholder="Email Address"
                        style="border-radius: 10px 0px 0px 10px; border: 0px;" class="w-100">
                    <input type="submit" value="send" style="background-color: #cc9c20;color: #16423c; border-radius: 0px 10px 10px 0px;" class="btn w-50">
                        
                    </input>
                    </form>
                </div>
           
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12 py-3 text-light text-center" style="background-color: #16423c;">
        <span>&copy; Copyright 2024 Designed & Developed by | <b>Mo Yusuf</b></span>
    </div>
</div>
</div>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $email=$_POST['email'];

    require 'src/Exception.php';
    require 'src/SMTP.php';
    require 'src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPAuth=true;
    $mail->Host = 'smtp.gmail.com';
    $mail->Username='kvonline9878@gmail.com';
    $mail->Password = 'sxet iwnn syyp fhag';
    $mail->SMTPSecure=PHPMailer::ENCRYPTION_SMTPS;
    $mail->setFrom('kvonline9878@gmail.com','Khushi Verma');
    $mail->addAddress($email);
    $mail->Port=465;
    $mail->Subject='Registration Form For RNC Student';
    $mail->Body="Thank You For contacting us. We will contact you soon.
    ";
    $mail->send();
}
?>

