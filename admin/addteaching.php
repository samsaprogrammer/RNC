<?php
include("header.php");
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
            <div class="row">
                <!-- content  -->
                <div class="col-sm-12">
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
                                    <span class="fs-4 ms-5 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Add Teaching Staff</span>
                                </div>
                                <div class="col-sm-9 px-4 py-1 mt-2 shadow mx-auto">
                                <form action="addteachingcode.php" class="mt-2" method="post" enctype="multipart/form-data">
                                    <span class="fs-5">Enter name - </span>
                                    <input type="text" class="form-control" required name="name">
                                    <br>
                                    <span class="fs-5">Upload Photo - </span>
                                    <input type="file" class="form-control" required name="file">
                                    <br>
                                    <span class="fs-5">Enter designation - </span>
                                    <input type="text" class="form-control" required name="designation">
                                    <br>
                                    <span class="fs-5">Enter Qualification - </span>
                                    <input type="text" class="form-control" required name="qualification">
                                    <br>
                                    <span class="fs-5">Enter Department - </span>
                                    <input type="text" class="form-control" required name="department">
                                    <br>
                                    <span class="fs-5">Enter E-mail - </span>
                                    <input type="email" class="form-control" required name="email">
                                    <br>
                                    <span class="fs-5">Enter Mobile no. - </span>
                                    <input type="number" class="form-control" required name="mobile">

                                    <div class="text-center">
                                    <input type="submit" class="btn mt-5 fs-5 w-25" style="background-color: #e9efec;color: #16423c;">
                                    </div>
                                </form>
                                </div>
                               </div>
                            </div>
                            
                            <!-- right card  end -->

                        </div>
                        <!-- right section end -->

                </div>
                </div>
                <!-- content  -->

            </div>
        </div>
    </body>
</html>