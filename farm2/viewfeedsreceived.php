<!DOCTYPE html>
<html>
 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>


    <body class="fixed-left">

        <!-- Loader -->
        <!--<div id="preloader">
            <div id="status">
                <div class="spinner">
                  <div class="spinner-wrapper">
                    <div class="rotator">
                      <div class="inner-spin"></div>
                      <div class="inner-spin"></div>
                    </div>
                  </div>
                </div>
            </div>
        </div> -->

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
                                        <h3 class="panel-title">View Feeds Received</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectfeed="SELECT * FROM `feeds_received`";
                                                            $sel_feed=mysqli_query($dbcon,$selectfeed);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Item</center></th>
                                                        <th><center>Supplier ID</center></th>
                                                        <th><center>Quantity</center></th>
                                                        <th><center>Storekeeper ID</center></th>
                                                        
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_feed= mysqli_fetch_array($sel_feed)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th></th>
                                                       
                                                        <td><?php echo $rw_feed['Date_Of_Receiving']; ?></td>
                                                        <td><?php echo $rw_feed['Name_Of_Feeds_Received']; ?></td>
                                                        <td><?php 

                                                        $sup_iId=$rw_feed['Supplier_Of_Feeds']; 
                                                        $sel_sup="SELECT * FROM `supplier` WHERE `Supplier_ID` = '$sup_iId'";

                                                         $query_sup =mysqli_query($dbcon,$sel_sup);
                                                         while ( $rw_sup=mysqli_fetch_array($query_sup)){
                                                            echo $rw_sup[1];
                                                         }
                                                         

                                                        ?></td>

                                                        
                                                        <td><?php echo $rw_feed['Quantity']; ?></td>
                                                       <!--  <td><?php echo $rw_feed['Store_Keeper_ID']; ?></td> -->

                                                        <td><?php 

                                                        $att_Id=$rw_feed['Store_Keeper_ID']; 
                                                        $selectr_att="SELECT * FROM `farm2`.`attendant` WHERE `Attendant_ID` = '$att_Id'";
                                                         $query_att =mysqli_query($dbcon,$selectr_att);
                                                         while ( $rw_atten=mysqli_fetch_array($query_att)){
                                                            echo $rw_atten[1];
                                                         }
                                                         

                                                        ?></td>
                                                     
                                                        
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
			
	<?php include "includes/footer.php"; ?>
        </body>
    </html>