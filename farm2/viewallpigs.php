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
                                    <h4 class="page-title">VIEW ALL PIGS </h4>
                      
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->



                        <div class="row">
                        <div class="col-lg-6"><a href="newpig.php"><button class="btn btn-primary">Add New Pig</button></a></div><br/><br/></div>
                        <div class="row">
							<div class="col-sm-12">
								<div class="table-responsive ."><!--this is used for responsive display in mobile and other devices-->


   <table class="table m-0 table-colored-full table-full-pink table-hover" style="table-layout: fixed">
        <thead>

        <tr>

            <th>PIG Id</th>
            <th>AGE</th>
            <th>BREED</th>
            <th>LOCATION</th>
			<th>Full Details</th>
   
        </tr>
        </thead>
		<?php
        $view_users_query="SELECT * from Animal";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        ?>
			<!--added -->
			
			<tbody>
                  <?php  
                     while ( $row= mysqli_fetch_array($run)) { 
                    
                 ?>
                   <tr>
                    <td><?php echo $row['Animal_ID']; ?></td>
					<td><?php echo $row['Date_Of_Birth']; ?></td>
                    <td><?php echo $row['Breed_Of_Animal']; ?></td>
                    <td><?php echo $row['Location_ID']; ?></td>
				    <td><a href ='pigfull2.php?p_id=<?php echo $row['Animal_ID']; ?>'><button class="btn btn-success">FULL DETAILS</button></td>
                   	                                    
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