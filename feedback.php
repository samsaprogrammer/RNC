<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .follow ul li {
            list-style-type: none;
            display: inline;
        }

        .follow ul li a i {
            color: white;
            font-size: 20px;
            padding: 3px;
        }

        .form-control {
            font-size: 13px;
            padding: 15px;
            height: 58px;
            border-radius: 0;
            color: #172f41;
        }

        .form-control:hover {
            border: 1px solid #16423C;
        }

        .table {
            border-color: white;
        }

        .home {
            color: #16423C;
            text-decoration: underline;
        }

        .home:hover {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <div class="col-sm-12 p-0">
                <div class="row py-5"
                    style="background-repeat: no-repeat;background-size: cover; background-image: url('images/feedback.jpg');">

                    <div class="col-sm-3 ps-5 py-5">
                        <span class="fs-2 fw-semibold">Feedback</span>
                        <br>
                        <span class="fs-2"><a href="index.php" class="home">Home </a> / Feedback</span>
                    </div>
                </div>

            </div>

        </div>


        <div class="row mt-5">
            <div class="col-sm-10 mx-auto">
                <span class="fs-1 fw-semibold"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                    Give us <span style="color: #cc9c20;">Feedback</span>
                </span>


                <div class="col-sm-6 pt-1 mt-3 rounded-pill ms-4" style="background-color: #16423C;">
                </div>

                <div class="row my-5 py-5 shadow">
                    <?php
                        if(isset($_REQUEST['msg']))
                        {
                            $msg=$_REQUEST['msg'];
                            if($msg==1)
                            {
                    ?>
                                <div class="alert text-center alert-success" role="alert">
                                We recieved your message.Your feedback matters a lot.
                                </div>
                        <?php   
                            }
                        }
                        ?>
                    <form method="post" action="feedbackcode.php" class="form-group">

                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <table class="table">
                                        <tr>
                                            <td>Name</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="text" name="name" placeholder="Enter your name" required
                                                    class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Contact No.</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="number" name="contactno"
                                                    placeholder="Enter your contact no." class="form-control">
                                            </td>
                                        </tr>

                                    </table>

                                </div>
                                <div class="col-sm-6">
                                    <table class="table">
                                        <tr>
                                            <td>Email</td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <input type="email" name="email" placeholder="Enter your email address"
                                                    required class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Enter Message</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <textarea name="message" class="form-control"></textarea>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                                <div class="col-sm-12">
                                    <tr>

                                        <td>
                                            <button class="btn mt-4 w-100 fs-5 text-light rounded" type="submit"
                                                style="background-color: #16423C;">!!! Send Message !!!</button>
                                        </td>
                                    </tr>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

<?php
include("footer.php");
?>