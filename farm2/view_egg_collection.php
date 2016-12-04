<!DOCTYPE html>
<html>
 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>


    <body class="fixed-left">

        <!-- Loader -->
        <div id="preloader">
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
        </div>

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
                                    <h4 class="page-title">VIEW EGG COLLECTION</h4>
                      
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->



                        <div class="row">
                        <div class="col-lg-6"><a href="egg_collection.php"><button class="btn btn-primary">Add New Egg Collection</button></a></div><br/><br/></div>
                        <div class="row">
							<div class="col-sm-12">
								<div class="table-responsive ."><!--this is used for responsive display in mobile and other devices-->


   <table class="table m-0 table-colored-full table-full-pink table-hover" style="table-layout: fixed">
        <thead>

        <tr>

            <th>DATE OF COLLECTION</th>
            <th>LAYING HENS</th>
            <th>COCKS</th>
            <th>EGGS COLLECTED</th>
            <th>DAMAGED EGGS</th>
            <th>VERIFIED BY</th>
            <th>ATTENDANT</th>
            <th>CAGE ID</th>
			<th>Full Details</th>
   
        </tr>
        </thead>
		<?php
        $view_users_query="SELECT * from egg_collection_tracker";//select query for viewing chicken sales.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        ?>
			<!--added -->
			
			<tbody>
                  <?php  
                     while ( $row= mysqli_fetch_array($run)) { 
                    
                 ?>
                   <tr>
                    <td><?php echo $row['Date_Of_Collection']; ?></td>
					          <td><?php echo $row['Num_Of_Laying_Hens']; ?></td>
                    <td><?php echo $row['Num_Of_Cocks']; ?></td>
                    <td><?php echo $row['Num_Of_Eggs_Collected']; ?></td>
                    <td><?php echo $row['Num_Of_Damaged_Eggs']; ?></td>
                    <td><?php echo $row['Verified_By']; ?></td>
                    <td><?php echo $row['Attendant_ID']; ?></td>
                    <td><?php echo $row['Cage_ID']; ?></td>
				    <td><a href ='#'><button class="btn btn-success">FULL DETAILS</button></td>
                                                        
                 </tr>
                  <?php } ?>
                                                    
                  </tbody>
			
			
    </table>
        </div>



                    </div> <!-- container -->

                </div> <!-- content -->


            </div>

 <?php include "includes/footer.php";?>
    </body>
</html>