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
                                                            $select_purch ="SELECT * FROM `Feeds_Purchase_Order`";
                                                            $sel_purch=mysqli_query($dbcon,$select_purch);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Item</center></th>
                                                        <th><center>Quantity</center></th>
                                                        <th><center>Supplier</center></th> 
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php  
                                                while ( $rw_purch = mysqli_fetch_array($sel_purch)) {
                                                    
                                                   $test = $rw_purch['Supplier_ID'];
                                                 ?>

                                                     <tr>
                                                      <th>
                                                          
                                                        </th>
                                                    
                                                        <td><center><?php echo $rw_purch['Date_Of_Purchase_Order']; ?></center></td>
                                                        <td><center><?php echo $rw_purch['Item_Purchased']; ?></center></td>
                                                        <td><center><?php echo $rw_purch['Quantity']; ?></center></td>
                                                        <?php 

                                                        $SupplierName = "SELECT Supplier_Name FROM Supplier WHERE Supplier_ID = '$test'";
                                                        $SupplierName1=mysqli_query($dbcon,$SupplierName);
                                                        if(mysqli_num_rows($SupplierName1)<=1){
                                                         $rw1=mysqli_fetch_array($SupplierName1);
                                                         ?>
                                                        <td><center><?php echo $rw1['Supplier_Name']; ?></center></td>
                                                       
                                                       
                                                    
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