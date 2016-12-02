<!DOCTYPE html>
<html>
 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include "includes/navbar.php";?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
           <?php include "includes/leftsidemenu.php";?>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Dashboard</h4>
                                  
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                         <div class="row">
                        <div class="col-lg-6"><a href="medicineAdministration.php"><button class="btn btn-primary">Add Pig Medication</button></a></div><br/><br/></div>

                        <div class="row text-center">
                        
                       
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Medicine Administration Records</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table m-0 table-colored-full table-full-pink table-hover" style="table-layout: fixed">
                                            <?php
                                                            $selectatt="SELECT * FROM `Animal_medication_tracker`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);

                                                          

                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                
                                                        <th><center>Animal Sty | Pen</center></th>
                                                        <th><center>Purpose</center></th>
                                                        <th><center>Type of Medication</center></th>
                                                        <th><center>Dosage</center></th>
                                                        <th><center>Date of Administration</center></th>
                                                        <th><center>Administered by</center></th>
                                                        <th><center>Attendant Name</center></th>
                                                        <th><center>Action</center></th>
                                                        <!--<th><center>Action</center></th>-->
                                                      
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                   
                                                 

                                                 ?>
                                                    <tr>
                                                  
                                                    
                                                         <td><?php 
                                                    $location_Id=$rw_att['Location_ID'];

                                                    $selec_loc = "select * from animal_location where Location_ID = '$location_Id' ";
                                                    $query_loc=mysqli_query($dbcon,$selec_loc) or die('QUERY FAILED'.mysqli_error($dbcon));
                                                    while ( $rw_loc=mysqli_fetch_array($query_loc)){
                                                        echo $rw_loc[1],$rw_loc[2];

                                                       } ?></td>
                                                        <td><?php echo $rw_att['Purpose']; ?></td>
                                                        <td><?php echo $rw_att['Type_Of_Medication']; ?></td>
                                                        <td><?php echo $rw_att['Dosage']; ?></td>
                                                        <td><?php echo $rw_att['Date_Of_Medication']; ?></td>

                                                        <td><?php 
                                                    $admin=$rw_att['Administered_By'];

                                                    $selec_loc = "select * from attendant where Attendant_ID = '$admin' ";
                                                    $query_loc=mysqli_query($dbcon,$selec_loc) or die('QUERY FAILED'.mysqli_error($dbcon));
                                                    while ( $rw_loc=mysqli_fetch_array($query_loc)){
                                                        echo $rw_loc[1];

                                                       } ?></td>


                                                        <td><?php 
                                                    $attendant=$rw_att['Attendant_ID'];

                                                    $selec_loc = "select * from attendant where Attendant_ID = '$attendant' ";
                                                    $query_loc=mysqli_query($dbcon,$selec_loc) or die('QUERY FAILED'.mysqli_error($dbcon));
                                                    while ( $rw_loc=mysqli_fetch_array($query_loc)){
                                                        echo $rw_loc[1];

                                                       } ?></td>

                                                      <td>
                                                       <a class="btn btn-success" href="update.php?id='.$rw_att['id'].'">Edit</a>
                                                       </td>
                                                       
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                        </div>





                        </div>
                    </div>
                </div>
            </div>
                <?php include "includes/footer.php";?>
        </body>
    </html>



