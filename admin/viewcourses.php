<?php
include("header.php");
include("connection.php");
$query="select * from tbl_courses";
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
                        <div class="col-sm-9 right ps-2 overflow-y-scroll" style="height:595px;">

                            <!-- right card -->
                            <div class="row px-4 mt-3">
                            <div class="text-center">
                                    <span class="fs-4 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">All Courses</span>
                                </div>
                                <table class="table mt-5 table-striped-columns">
                                    <tr align="center">
                                        <th><span class="fs-5 fw-semibold">S. no.</span></th>
                                        <th><span class="fs-5 fw-semibold">Program</span> </th>
                                        <th><span class="fs-5 fw-semibold">Course</span> </th>
                                        <th><span class="fs-5 fw-semibold">Year</span> </th>
                                        <th><span class="fs-5 fw-semibold">Type</span> </th>
                                        <th><span class="fs-5 fw-semibold">Duration</span> </th>
                                        <th><span class="fs-5 fw-semibold">Doc</span> </th>
                                        <th><span class="fs-5 fw-semibold">Status</span></th>
                                        <th><span class="fs-5 fw-semibold">Delete</span></th>


                                    </tr>
                                    <?php
                                        $a=1;
                                        while($row=mysqli_fetch_array($res))
                                        {
                                        ?>
                                    <tr align="center">
                                        
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row['pname'];?></td>
                                            <td><?php echo $row['cname'];?></td>
                                            <td><?php echo $row['year'];?></td>
                                            <td><?php echo $row['type'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td><?php echo $row['dor'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><a href="delcourse.php?id=<?php echo $row['cid']; ?>" class="btn-danger btn text-light">delete</a></td>
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