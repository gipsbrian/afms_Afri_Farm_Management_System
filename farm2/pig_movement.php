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
                                        <h4 class="page-title">Pig Movement</h4>
                                        <ol class="breadcrumb p-0 m-0">
                                            <li>
                                                <a href="#">Zircos</a>
                                            </li>
                                            <li>
                                                <a href="#">Pages </a>
                                            </li>
                                            <li class="active">
                                                Blank Page
                                            </li>
                                        </ol>
                                        <div class="clearfix"></div>
                                    </div>
    								 <div class="p-20">
                                                    <form action="" method="post" data-parsley-validate novalidate >

                                                    	 <div class="form-group">
                                                            <label for="emailAddress">Animal ID<span class="text-danger">*</span></label>
                                                            
                                                            <select name="animal_ID" class="form-control" placeholder="Litres of water">
                                                            <option></option>
                                                                <?php
                                                                $select="SELECT * FROM `animal`";
                                                                $sel_query=mysqli_query($dbcon,$select);
                                                                while ($rw=mysqli_fetch_array($sel_query)) {
                                                                    ?>
                                                                    <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

                                                            <?php
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>

                                                        <div class="form-group">
                                                            <label for="dobe">Date <span class="text-danger">*</span></label>
                                                            <input type="date" name="date" parsley-trigger="change" required
                                                                   placeholder="Enter date of birth" class="form-control" id="=dob">
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="dobe">Original location <span class="text-danger">*</span></label>
                                                            <select name="Original_Location" class="form-control">
                                                            <option></option>
                                                                <?php
                                                                $select1="SELECT * FROM `animal_location`";
                                                                $sel_query1=mysqli_query($dbcon,$select1);
                                                                while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                    ?>
                                                                    <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[1], $rw1[2]; ?></option>

                                                            <?php
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>

                                                        
    													 <div class="form-group">
                                                            <label for="emailAddress">New Location<span class="text-danger">*</span></label>
                                                            <select name="new_Location" class="form-control">
                                                            <option></option>
                                                                <?php
                                                                $select2="SELECT * FROM `animal_location`";
                                                                $sel_query2=mysqli_query($dbcon,$select2);
                                                                while ($rw2=mysqli_fetch_array($sel_query2)) {
                                                                    ?>
                                                                    <option value="<?php echo $rw2[0]; ?>" parsley-trigger="change" required><?php echo $rw2[1], $rw2[2]; ?></option>

                                                            <?php
                                                                }
                                                                ?>

                                                            </select>
                                                        </div>

                                               	       <div class="form-group">
                                                            <label for="emailAddress">Purpose of Transfer <span class="text-danger">*</span></label>
                                                            <input type="text" name="purpose" parsley-trigger="change" required
                                                                   placeholder="Purpose of Transfer" class="form-control" id="emailAddress">
                                                            
                                                        </div>
    												    
                                                       
                                                        

                                                        

                                                        <div class="form-group text-right m-b-0">
                                                            <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>

                                                    </form>
                                                </div>
    							</div>
    						</div>
                            <!-- end row -->



                        </div> <!-- container -->

                    </div> <!-- content -->

                  

                </div>

                <!-- ============================================================== -->
                <!-- End Right content here -->
                <!-- ============================================================== -->


                <!-- Right Sidebar -->
               
                <!-- /Right-bar -->

            </div>
            
      
            

                
        <?php
          
            
            if(isset($_POST['submit']))
            {
               $message = "Data Save In Database";
               

                $animal_ID  = $_POST['animal_ID'];
                $date = $_POST['date'];
                $Original_Location = $_POST['Original_Location'];
                $new_Location = $_POST['new_Location'];
                $purpose = $_POST['purpose'];
               
               
            
               
                 $query = "INSERT INTO `animal_transfer_schedule`( `Animal_ID`, `Date_Of_Transfer`, `Location_ID`, `New_Location_ID`, `Purpose_Of_Transfer`) VALUES ('$animal_ID','$date','$Original_Location','$new_Location','$purpose')" or die(mysqli_error($dbcon));
                // $query .= "";
                 
                 $result = mysqli_query($dbcon , $query);
               if  (!$result){
                  die ('QUERY FAILED' . mysqli_error($dbcon));
               }else{
                  ?>

                      <script>window.open('index.php?message=entered','_self')</script>

                    <?php
                }

            }
        ?>

 <?php include "includes/footer.php";?>

    </body>
</html>