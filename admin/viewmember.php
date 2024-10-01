<?php
include("header.php");
include("connection.php");
$query="select * from tbl_member";
$query2="select * from tbl_committe";
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
                            <div class="row px-4 mt-3">
                            <div class="text-center">
                                    <span class="fs-4 ms-5 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">All Committee Member</span>
                                </div>
                                
                                <table class="table mt-5 table-striped-columns">
                                    <tr align="center">
                                        <th><span class="fs-5 fw-semibold">S.no.</span></th>
                                        <th><span class="fs-5 fw-semibold">Name</span></th>
                                        <th><span class="fs-5 fw-semibold">Department</span></th>
                                        <th><span class="fs-5 fw-semibold">Designation</span></th>
                                        <th><span class="fs-5 fw-semibold">Date of Add</span></th>
                                        <th><span class="fs-5 fw-semibold">status</span></th>
                                        <th><span class="fs-5 fw-semibold">Delete</span></th>
                                    </tr>
                                    <?php
                                        $a=1;
                                        while($row=mysqli_fetch_array($res))
                                        {
                                        ?>
                                    <tr align="center">
                                            <td><?php echo $a; ?></td>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['department']; ?></td>
                                            <td><?php echo $row['designation'];?></td>
                                            <td><?php echo $row['doa'];?></td>
                                            <td><?php echo $row['status'];?></td>
                                            <td><a href="deletemember.php?id=<?php echo $row['cmid']; ?>"  class="btn btn-danger">delete</a></td>
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