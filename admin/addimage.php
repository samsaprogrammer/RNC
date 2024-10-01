<?php

include ("header.php");
include("connection.php");
$query="select * from tbl_gallery";
$res=mysqli_query($con,$query);
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
                                    <span class="fs-4 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Add Images</span>
                                </div>
                               <div class="col-sm-9 px-4 py-3 mt-2 shadow mx-auto">
                               <form class="mt-5 pb-3" action="addimagecode.php" method="post" enctype="multipart/form-data">
                                    
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
                            <div class="row px-4 mt-3">
                            
                                <table class="table mt-5 table-striped-columns">
                                    <tr align="center">
                                        <th><span class="fs-5 fw-semibold">S. no.</span></th>
                                        <th><span class="fs-5 fw-semibold">Gallery Image</span></th>
                                        <th><span class="fs-5 fw-semibold">Doi</span></th>
                                        <th><span class="fs-5 fw-semibold">Delete</span></th>
                                    </tr>
                                    <?php
                                        $a=1;
                                        while($row=mysqli_fetch_array($res))
                                        {
                                        ?>
                                    <tr align="center">
                                        <td><?php echo $a; ?></td>
                                        <td><img src="http://localhost/RNC/admin/gallery/<?php echo $row['photo'];?>" height="100" class="w-75" alt=""></td>
                                        <td><?php echo $row['dor'];?></td>
                                        <td><a href="deleteimage.php?id=<?php echo $row['gid'];?>" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    <?php
                                        $a++;
                                        }
                                        ?>
                                </table>
                            </div>
                            
                            <!-- right card  end -->

                        </div>
                        <!-- right section end -->

                </div>
                
                <!-- content  -->
        </div>
    </body>
</html>
