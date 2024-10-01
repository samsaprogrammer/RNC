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
                                    <span class="fs-4 ms-5 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Add Mentors</span>
                                </div>
                               <div class="col-sm-9 shadow px-4 py-3 mx-auto">
                               <form class="mt-5" action="addmentorscode.php" method="post" enctype="multipart/form-data">
                                    <tr>
                                        <td><span class="fs-5">Enter name - </span></td>
                                        <td><input type="text" class="form-control" required name="name"></td>
                                    </tr>
                                    <tr>
                                        <td><span class="fs-5">Enter designation - </span></td>
                                        <td><input type="text" class="form-control" required name="designation"></td>
                                    </tr>
                                    <tr>
                                        <td><span class="fs-5">Enter place - </span></td>
                                        <td><input type="text" class="form-control" required name="place"></td>
                                    </tr>
                                    <br>
                                    <span class="fs-5">Upload Photo - </span>
                                    <input type="file" class="form-control" required name="file">
                                    <br>
                                    <div class="text-center">
                                    <input type="submit" class="btn mt-3 fs-5 fw-semibold" style="background-color: #e9efec;color: #16423c;">
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
