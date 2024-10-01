<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form of Integral University</title>
    <style>
        body{
            background-color: black;
        }
        .outer{
            border: 2px solid orangered;
            height: 500px;
            width: 900px;
            
        }
        .border{
            padding: 30px;;
        }
        input::placeholder{
            color: black;
            font-size: 15px;
        }
        select::placeholder{
            color: black;
            font-size: 15px;
        }
        option{
            color: black;
            font-size: 15px;
        }
       input{
        border: 2px black;
       }
    </style>
</head>
<body>
    <center>
        <div class="outer">
            <div class="border">
             <form method="post">
                <i class="icon-name"></i>
                 <input type="text" placeholder="Enter Name *" name="name" style="height: 40px; width: 370px;">
                 <input type="email" placeholder="Enter Email Address" name="email"style="height: 40px; width: 370px;">
                 <br>
                 
                 
                 <input type="submit" value="Apply Now" style="display: block; background-color: rgb(223, 175, 101); height: 40px; width: 180px; border-radius: 10px 10px 10px ; margin-top: 20px; font-size: 20px; ">
             </form>
            </div>
         </div>
    </center>
</body>
</html>
<?php
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name = $_POST['name'];
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
    $mail->addAddress($email,$name);
    $mail->Port=465;
    $mail->Subject='Registration Form For RNC Student';
    $mail->Body="Thank You '$name' For contacting us. We will contact you soon.
    ";
    $mail->send();
}
?>


