<?php
include("header.php");
include("connection.php");
$query="select * from tbl_committe";
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
                                    <span class="fs-4 ms-5 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Add Committee</span>
                                </div>
                                <div class="col-sm-9 px-4 py-1 mt-4 pb-3 shadow mx-auto">
                                <form action="addmembercode.php" method="post">
                                <select name="ccid" id="" class="mt-5 mb-3 form-select">
                                            <option value="">Select Committee</option>
                                        <?php
                                        $a=1;
                                        while($row=mysqli_fetch_array($res))
                                        {
                                        ?>
                                        <option value="<?php echo $row['ccid']; ?>"><?php echo $row['name']; ?></option>
                                        <?php
                                        $a++;
                                        }
                                        ?>
                                    </select>
                                    <span class="fs-5 mt-5">Add Member - </span>
                                    <input type="text" class="form-control" required name="member">
                                    <br>
                                    <span class="fs-5 mt-5">Add Department - </span>
                                    <input type="text" class="form-control" required name="department">
                                    <br>
                                    <span class="fs-5 mt-5">Add Designation - </span>
                                    <input type="text" class="form-control" required name="designation">
                                    <br>
                                    <div class="text-center">
                                    <input type="submit" class="btn mt-3 fs-5 w-25" style="background-color: #e9efec;color: #16423c;">
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