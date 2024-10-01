<?php
include("header.php");
?>
<div class="container-fluid p-0 ">
    <div class="row">

        <div class="col-sm-12 p-0">
            <div class="row m-0 p-0 py-5"
                style="background-repeat: no-repeat;background-size: cover; background-image: url('images/contactbg.jpg');">

                <div class="col-sm-12  pe-5 py-5">
                    <span class="float-end fs-2 me-5"><a href="index.php" class="home">Home </a> / Committee & Cells</span>
                </div>
            </div>

        </div>

    </div>
    <div class="row mt-5">
        <div class="col-sm-10 mx-auto">
            <span class="fs-1 fw-semibold"
                    style="font-family:Georgia, 'Times New Roman', Times, serif; color: #16423C;">
                    Committee & <span style="color: #cc9c20;"> Cells</span>
                </span>
                <div class="col-sm-4 pt-1 rounded-pill ms-4" style="background-color: #16423C;">
                </div>
                <div class="row mt-5">
                    <div class="col-sm-12">
                        <?php 
                        if(isset($_REQUEST['ccid']))
                        {
                        $ccid=$_REQUEST['ccid'];
                        //echo $ccid;
            
                     include("connection.php");
                       $query="select * from tbl_member where ccid='$ccid'";
                        $res=mysqli_query($con,$query);
                    }
                    ?>

                        <table class="table text-center mt-5 table-striped-columns " style="border: 1px solid #16423C;">
                            <tr>
                                <th>S.No.</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Designation</th>
                            </tr>
                            <?php 
                        $a=1;
                        while($row=mysqli_fetch_array($res))
                        {
                        ?>
                            <tr>
                                <td class="text-center">
                                    <?php echo $a ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['name']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['department']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $row['designation']; ?>
                                </td>
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
     <!-- student information system  -->

     <div class="row my-5 py-5"
     style="background-image: linear-gradient(rgba(14, 12, 12, 0.5),rgba(14, 12, 12, 0.5)),url('images/counter.jpg');background-position: center;background-repeat: no-repeat;background-size: cover;background-attachment: fixed;color: white;box-shadow: 40px 40px 250px #16423C inset;">
     <div class="col-sm-10 mx-auto">
         <p class="fs-1" style="font-family:'Times New Roman', Times, serif;">Student Information System</p>
         <p class="fs-5" style="font-weight: lighter;">This section will deal with all the information pertaining
             to a student such as personal, academic as well as digital documents and student report.</p>
         <a href="https://cas.rnclnmu.ac.in/student/" class="btn fs-5 fw-semibold rounded px-4"
             style="background-color: #cc9c20;color: white;">Sign
             in</a>
     </div>
 </div>

 <!-- student information system  -->
</div>
</body>

</html>




<?php
include("footer.php"); 

?>