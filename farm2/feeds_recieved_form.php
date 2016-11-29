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
                                        <h3 class="panel-title">Feed Purchase Order </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $select_feeds ="SELECT * FROM `feeds_received`";
                                                            $sel_feed=mysqli_query($dbcon,$select_feeds);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Feed Recieved ID</center></th>
                                                        <th><center>Feed Recieved</center></th>
                                                        <th><center>Supplier</center></th> 
                                                        <th><center>Quantity</center></th>
                                                        <th><center>Store Keeper</center></th> 
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php  
                                                while ( $rw_feed = mysqli_fetch_array($sel_feed)) {
                                               
                                                   $test2 = $rw_feed['Store_Keeper_ID'];
                                                 ?>

                                                     <tr>
                                                      <th>
                                                          
                                                        </th>
                                                    
                                                        <td><center><?php echo $rw_feed['Date_Of_Receiving']; ?></center></td>
                                                        <td><center><?php echo $rw_feed['Feeds_Received_ID']; ?></center></td>
                                                         <td><center><?php echo $rw_feed['Name_Of_Feeds_Received']; ?></center></td> 
                                                       
                                                        <td><center><?php echo $rw_feed['Supplier_Of_Feeds']; ?></center></td>

                                                        <td><center><?php echo $rw_feed['Quantity']; ?></center></td>

                                                        <?php 

                                                        $attendantName = "SELECT Full_Names FROM attendant WHERE Attendant_ID = '$test2'";
                                                        $attendantName1=mysqli_query($dbcon,$attendantName);
                                                        if(mysqli_num_rows($attendantName1)<=1){
                                                         $rw2=mysqli_fetch_array($attendantName1);
                                                         ?>
                                                        <td><center><?php echo $rw2['Full_Names']; ?></center></td>
                                                       
                                                       
                                                    
                                                    <?php }} ?> 
                                                    
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

                  
          <?php

            include 'includes/footer.php';
              ?>

        </body>
    </html>