<?php

include ("header.php");
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>

<body>
    <div class="container-fluid">
        <!-- content  -->

        <div class="row">

            <!-- left section start  -->
            <?php include("left.php"); ?>

            <!-- left section end  -->

            <!-- right section  -->
            <div class="col-sm-9 right ps-2 overflow-y-scroll">

                <!-- right card -->
                <div class="row">
                    <div class="col-sm-10 rounded pb-2 pt-3 text-light mx-auto">
                        <div class="text-center">
                            <span class="fs-4 ms-5 text-center text-light pb-2"
                                style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Change
                                Password</span>
                        </div>
                        <div class="col-sm-8 mx-auto">
                            <form class="mt-5" action="cpcode.php" method="post">
                                <?php
                                if(isset($_REQUEST['msg']))
                                {
                                    $a=$_REQUEST['msg'];
                                    // echo $a;
                                    if($a==1)
                                    {
                                ?>
                                <div class="alert text-center  alert-success" role="alert">
                                    Your password has been successfully changed.
                                </div>
                                       
                                <?php
                                    }
                                 
                                    elseif($a==2)
                                    {
                                ?>
                                        <div class="alert text-center  alert-danger" role="alert">
                                            Please Enter Same Password.
                                        </div>
                                <?php        
                                    }
                                    else 
                                    {
                                ?>
                                        <div class="alert text-center  alert-danger" role="alert">
                                            Invalid Password!
                                        </div>
                                    <?php   
                                    }
                                }
                                    ?>
                                <input type="text" class="form-control" required name="op"
                                    placeholder="Enter old password">
                                <br>

                                <input type="text" class="form-control" required name="np"
                                    placeholder="Enter new password">
                                <br>

                                <input type="text" class="form-control" required name="cnp"
                                    placeholder="Confirm password">
                                <br>
                                <div class="text-center">
                                    <input type="submit" class="btn px-5 mt-3 fs-5 fw-semibold"
                                        style="background-color: #e9efec;color: #16423c;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- right card  end -->

            </div>
            <!-- right section end -->

        </div>

        <!-- content  -->
    </div>
</body>

</html>