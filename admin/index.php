<?php
error_reporting(0);
$msg=$_REQUEST['msg'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RNC Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="icon" href="images/logo.png">
    <script src="/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        .font {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
</head>

<body style="background-color: #c3d8d5;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12  align-items-center text-light py-1"
                style=" background-color: #16423C;box-shadow: 20px 20px 50px black inset;">
                <span class="fs-5 font"><img src="images/logo.png" height="50px" alt=""> Welcome to RNC Admin
                    Panel</span>
                <a href="/rnc/index.php" class="btn text-light float-end mt-1 pe-5">Back to Home <i
                        class="fa-solid fa-backward-step ms-1 text-light"></i></a>
                <br>


            </div>
        </div>
        <div class="row mt-5">


            <div class="col-sm-4 mx-auto px-5 shadow bg-light rounded py-2 pb-0">
                <form action="logcode.php" method="post" class="pb-4">
                    <div class="text-center">
                        <span class="fs-3 fw-bold font" style="color: #16423C;">Login Here</span>
                        <hr>
                    </div>
                    <?php
                    if($msg==1)
                    {
                    ?>
                    <div class="alert text-center  alert-success" role="alert">
                        Logout Successfully.
                    </div>
                   <?php
                    }
                    if($msg==2)
                    {
                    ?>
                    <div class="alert text-center  alert-danger" role="alert">
                        Sorry, you have entered Invalid email or password. Please double-check that.
                    </div>
                    <?php
                    }
                    if($msg==3)
                    {
                    ?>
                    <div class="alert text-center  alert-danger" role="alert">
                        Unauthorised access !
                    </div>
                    <?php
                    }
                    ?>
                    <div class="mb-3 mt-4">
                        <label for="exampleFormControlInput1" class="form-label">Email Address</label>
                        <input type="email" class="form-control" placeholder="Type your email..." name="e">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Enter Your Password</label>
                        <input type="password" class="form-control" placeholder="Type your password..." name="p">
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Keep me logged in.
                        </label>
                    </div>
                    <div class="text-center mt-3">
                        <input type="submit" value="Login Here" class="text-center btn btn-primary form-control">
                    </div>

                </form>

            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <span class="text-center">Designed & Developed by <b>Mo Yusuf</b>.</span>
            </div>
        </div>

    </div>
</body>

</html>