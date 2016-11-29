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
                                        <h3 class="panel-title">Pig Movement </h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $select_movement ="SELECT * FROM `animal_transfer_schedule`";
                                                            $sel_move=mysqli_query($dbcon,$select_movement);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date of transfer</center></th>
                                                        <th><center>Animal ID</center></th>
                                                        <th><center>Original location</center></th>
                                                        <th><center>New location</center></th> 
                                                        <th><center>Purpose Of Transfer</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                
                                                <?php  
                                                while ( $rw_move = mysqli_fetch_array($sel_move)) {
                                                    
                                                   
                                                 ?>

                                                     <tr>
                                                      <th>
                                                          
                                                        </th>
                                                    
                                                        <td><center><?php echo $rw_move['Date_Of_Transfer']; ?></center></td>
                                                        <td><center><?php echo $rw_move['Animal_ID']; ?></center></td>
                                                        <td><center><?php echo $rw_move['Location_ID']; ?></center></td>
                                                        <td><center><?php echo $rw_move['New_Location_ID']; ?></center></td>
                                                        <td><center><?php echo $rw_move['Purpose_Of_Transfer']; ?></center></td>
                                                       
                                                    
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