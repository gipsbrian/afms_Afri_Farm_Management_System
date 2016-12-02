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
                                    <h4 class="page-title">Add Medicial Record </h4>
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
                                                        <label for="emailAddress">Pig Location<span class="text-danger">*</span></label>
                                                        
                                                        <select name="location" class="form-control">
                                                            <option></option>
                                                            <?php
                                                            $select2="SELECT * FROM `Animal_Location`";
                                                            $sel_query2=mysqli_query($dbcon,$select2);
                                                            while ($rw2=mysqli_fetch_array($sel_query2)) {
                                                                ?>
                                                                <option value="<?php echo $rw2[0]; ?>" parsley-trigger="change" required><?php echo "Sty".$rw2[1]." Pen ".$rw2[2]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

                                                    

                                                    <div class="form-group">
                                                        <label for="medicine">Type of Medication<span class="text-danger">*</span></label>
                                                        <input type="text" name="typeOfMedication" parsley-trigger="change" required
                                                               placeholder="Type of medicine Administered" class="form-control" id="medication">
                                                    </div>


                                                 <!-- <div class="form-group">
                                                        <label for="dobe">Date of Administration <span class="text-danger">*</span></label>
                                                        <input type="date" name="dateOfAdmin" parsley-trigger="change" required
                                                               placeholder="Enter date of administration" class="form-control" id="=doa">
                                                    </div>-->

                                                     <div class="form-group">
                                                    <label for="date">Date of Administration<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="dateOfAdmin" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="emailAddress">Dosage<span class="text-danger">*</span></label>
                                                        <input type="text" name="dosage" parsley-trigger="change" required
                                                               placeholder="Enter quantity of medicine administered" class="form-control" id="medication">
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="purpose">Purpose<span class="text-danger">*</span></label>
                                                        <input type="text" name="purposeOfAdmin" parsley-trigger="change" required
                                                               placeholder="Enter purpose of administration" class="form-control" id="purpose">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location">Administered By<span class="text-danger">*</span></label>
                                                        <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="administrator">
                                                             <?php
                                                            $select1="SELECT * FROM `attendant`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                ?>
                                                                <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="location">Attendant Name<span class="text-danger">*</span></label>
                                                        <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="attendantName">
                                                             <?php
                                                            $select="SELECT * FROM `attendant`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
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

<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $location = $_POST['location'];
       $dateOfAdmin=   $_POST['dateOfAdmin'];
       $dosage= $_POST['dosage'];
       $purposeOfAdmin = $_POST['purposeOfAdmin'];
       $typeOfMedication=$_POST['typeOfMedication'];
       $administrator = $_POST['administrator'];
       $attendantName = $_POST['attendantName'];


        $query = "INSERT INTO `animal_medication_tracker` (`Date_Of_Medication`, `Dosage`, `Purpose`, `Type_Of_Medication`, `Administered_By`, `Location_ID`, `Attendant_ID`) VALUES ('$dateOfAdmin','$dosage','$purposeOfAdmin','$typeOfMedication','$administrator','$location','$attendantName')" ;

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
    <?php include "includes/footer.php";?>

 
</html>