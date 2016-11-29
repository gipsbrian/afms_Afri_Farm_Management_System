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
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Feed Consumption </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                    $select_feed ="SELECT * FROM `animal_feed_consumption`";
                                                     $sel_feed=mysqli_query($dbcon,$select_feed);
                                                            
                                                     ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date of Feeding</center></th>
                                                        <th><center>Feed Consumption</center></th>
                                                        <th><center>Weight</center></th>
                                                        <th><center>Attendant</center></th> 
                                                        <th><center>Feed Location</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php  
                                                while ( $rw_feed = mysqli_fetch_array($sel_feed)) {
                                                    
                                                
                                                 ?>

                                                     <tr>
                                                      <th>
                                                          
                                                        </th>
                                                    
                                                        <td><center><?php echo $rw_feed['Date_Of_Consumption']; ?></center></td>
                                                        <td><center><?php echo $rw_feed['Feed_Composition']; ?></center></td>
                                                        <td><center><?php echo $rw_feed['Meal_Weight']; ?></center></td>
                                                       <td><center><?php 

                                                       $att_Id=$rw_feed['Attendant_ID']; 
                                                        $sel_supp = "select * from attendant where Attendant_ID='$att_Id' ";
                                                         $query_att=mysqli_query($dbcon,$sel_supp) or die('QUERY FAILED'.mysqli_error($dbcon));
                                                         while ( $rw_att=mysqli_fetch_array($query_att)){
                                                            echo $rw_att[1];

                                                         } ?></center></td>

                                                         <td><center><?php 

                                                       $loc_Id=$rw_feed['Location_ID']; 
                                                        $sel_loc = "select * from animal_location where Location_ID = '$loc_Id' ";
                                                         $query_loc=mysqli_query($dbcon,$sel_loc) or die('QUERY FAILED'.mysqli_error($dbcon));
                                                         while ( $rw_loc=mysqli_fetch_array($query_loc)){
                                                            echo $rw_loc[1],$rw_loc[2];

                                                         } ?></center></td>
                                                      
                                                    
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
                   

        </body>
    </html>