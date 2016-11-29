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
                                    <h4 class="page-title"><h4>Edit Weight</h4>
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
                                                <form action="medicineAdministration.php" method="post" data-parsley-validate novalidate>

                                                      <div class="form-group">
                                                        <label for="location">Animal Name<span class="text-danger">*</span></label>
                                                        <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="animalName">

                                                             <?php
                                                            $select3="SELECT * FROM `animal`";
                                                            $sel_query3=mysqli_query($dbcon,$select3);
                                                            while ($rw3=mysqli_fetch_array($sel_query3)) {
                                                                ?>
                                                              
                                                                <option value="<?php echo $rw3[0]; ?>" parsley-trigger="change" required><?php echo $rw3[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location">Location<span class="text-danger">*</span></label>
                                                        <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="location">

                                                             <?php
                                                            $select2="SELECT * FROM `animal_location`";
                                                            $sel_query2=mysqli_query($dbcon,$select2);
                                                            while ($rw2=mysqli_fetch_array($sel_query2)) {
                                                                ?>

                                                                <option value="<?php echo $rw2[0]; ?>" parsley-trigger="change" required><?php echo $rw2[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
                                                    </div>


                                                      <div class="form-group">
                                                        <label for="currentWeight">Current Weight<span class="text-danger">*</span></label>
                                                        <input type="number" name="currentWeight" parsley-trigger="change" required
                                                               placeholder="Weight of the food" class="form-control" id="currentweight">
                                                    </div>

                                                   
                                                    <div class="form-group">
                                                        <label for="dobe">Date of Weigh <span class="text-danger">*</span></label>
                                                        <input type="date" name="dateOfWeigh" parsley-trigger="change" required
                                                               placeholder="Enter date of Weigh" class="form-control" id="dateofweigh">
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

                <footer class="footer text-right">
                    2016 © Zircos.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!--Added for datepicker -->
     <script src="assets/js/bootstrap.min.js"></script>
     <script src="assets/js/moment.js"></script>
     <script src="assets/js/datetimepicker.js"></script>

<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
       $locationId = $_POST['location'];
       $currentWeight = $_POST['currentWeight'];
       $dateOfWeigh = $_POST['dateOfWeigh'];
       

         $query = "INSERT INTO `animal_weight_tracker`(`Animal_ID`, `Date_Of_Weighin`, `Current_Weight`, `Location_ID`) VALUES ('$animalId','$dateOfWeigh','$currentweight','$locationId') " or die(mysqli_error($dbcon));

         
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

    </body>
</html>