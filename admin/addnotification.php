<?php
include("header.php");
include("connection.php");
$query="select * from tbl_notification";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Notifications</title>
    <link rel="icon" href="images/logo.png">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.bundle.js"></script>

    <link rel="stylesheet" href="css/style.css">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- font-awesome -->
    <!-- AOS css  -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Splide css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@3.6.12/dist/css/splide.min.css">
    <style>

    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <?php include("left.php"); ?>
            <div class="col-sm-9 right overflow-y-scroll">
                <div class="row">
                    <div class="col-sm-10 rounded pb-2 pt-3 text-light mx-auto">
                        <div class="text-center">
                            <span class="fs-4 text-center text-light pb-2"
                                style="font-family: 'Times New Roman', Times, serif;border-bottom: 2px solid;">Add
                                Notification</span>
                        </div>
                        <div class="col-sm-9  px-4 py-1 mt-4 pb-3 shadow mx-auto">
                            <form class="mt-5" action="addnotificationcode.php" method="post" enctype="multipart/form-data">
                                <tr>
                                    <td><span class="fs-5">Enter Message - </span></td>
                                    <td><input type="text" class="form-control" required name="message"></td>
                                </tr>
                                <br>
                                <span class="fs-5">Upload File - </span>
                                <input type="file" class="form-control" required name="file">
                                <br>
                                <div class="text-center">
                                    <input type="submit" class="btn mt-3 fs-5 fw-semibold"
                                        style="background-color: #e9efec;color: #16423c;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row px-4 mt-3">
                    
                        <table class="table mt-5 table-striped-columns">
                            <tr align="center">
                                <th><span class="fs-5 fw-semibold">S. no.</span></th>
                                <th><span class="fs-5 fw-semibold">Message</span> </th>
                                <th><span class="fs-5 fw-semibold">Dor</span></th>
                                <th><span class="fs-5 fw-semibold">Delete</span></th>
                            </tr>
                            <?php
                                $a=1;
                                while($row=mysqli_fetch_array($res))
                                {
                                ?>
                            <tr align="center">
                                <td><?php echo $a; ?></td>
                                <td><?php echo $row['message'];?></td>
                               
                                </a></td>
                                <td><?php echo $row['dor'];?></td>
                                <td><a href="deletenotification.php?id=<?php echo $row['nid'];?>" class="btn btn-danger">Delete</a></td>
                            </tr>
                            <?php
                                $a++;
                                }
                                ?>
                        </table>
                    </div>
            </div>
        </div>
    </div>
</body>

</html>