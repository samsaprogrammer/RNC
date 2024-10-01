<?php
include("header.php");
$id=$_REQUEST['id'];
//echo $id;
include("connection.php");
$query="select * from tbl_nonteacher where ntid='$id'";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.bundle.js"></script>
</head>
<body>
    <div class="container-fluid">
        <!-- content  -->
       
            <div class="row">

                <!-- left section start  -->
                <?php include("left.php"); ?>

                <!-- left section end  -->

                <!-- right section  -->
                <div class="col-sm-9 right ps-2 overflow-y-scroll" style="height: 595px;">
                    <?php
                    if($row=mysqli_fetch_array($res))
                    {
                    
                    ?>
                    <!-- right card -->
                    <div class="row">
                       <div class="col-sm-10 rounded pb-2 pt-3 text-light mx-auto">
                        <div class="text-center">
                            <span class="fs-4 ms-5 text-center text-light pb-2" style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Update data</span>
                        </div>
                        <div class="col-sm-8 mx-auto">
                        <form action="updatenonteacher.php" method="post" enctype="multipart/form-data">
                            <input type="hidden" value="<?php echo $row['ntid']; ?>" name="id">
                            <span class="fs-5">Enter name - </span>
                            <input type="text" class="form-control" value="<?php echo $row['name']; ?>" required name="name">
                            
                            <br>
                            <span class="fs-5">Enter designation - </span>
                            <input type="text" class="form-control" value="<?php echo $row['designation']; ?>" required name="designation">
                            <br>
                            <span class="fs-5">Enter Qualification - </span>
                            <input type="text" class="form-control" value="<?php echo $row['qualification']; ?>" required name="qualification">
                            <br>
                            
                            <span class="fs-5">Enter Mobile no. - </span>
                            <input type="number" class="form-control" value="<?php echo $row['mobile']; ?>" required name="mobile">

                            <div class="text-center">
                            <input type="submit" value="Update" class="btn mt-5 fs-5 w-25" style="background-color: #e9efec;color: #16423c;">
                            </div>
                        </form>
                        </div>
                        
                       </div>
                    </div>
                    <?php
                    }
                    ?>
                    
                    <!-- right card  end -->

                </div>
                <!-- right section end -->

        </div>
       
        <!-- content  -->
</div>
</body>
</html>