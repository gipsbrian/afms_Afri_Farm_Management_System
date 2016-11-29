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
                                    <h4 class="page-title">New Medicine Administration </h4>
                      
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
                                                        <label for="medicine">Type of Medication<span class="text-danger">*</span></label>
                                                        <input type="text" name="typeOfMedication" parsley-trigger="change" required
                                                               placeholder="Type of medicine Administered" class="form-control" id="medication">
                                                    </div>

                                                      <div class="form-group" id='date1'>
                                                       <label for="medicine">Date of Administration<span class="text-danger">*</span></label>
                                                            <input type="text" class="form-control" name="dateOfAdmin" data-date-format="DD-MM-YYYY" value="">
                                                        <span class="icon-calendar"></span>
                                                               
                                                            <script type="text/javascript">
                                                                 $(function () {
                                                                 $('#date1').datetimepicker({
                                                                     </script>
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

            
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
           
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        
<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $animalName = $_POST['animalName'];
       $location = $_POST['location'];
       $dateOfAdmin=   $_POST['dateOfAdmin'];
       $dosage= $_POST['dosage'];
       $purposeOfAdmin = $_POST['purposeOfAdmin'];
       $typeOfMedication=$_POST['typeOfMedication'];
       $administrator = $_POST['administrator'];
       $attendantName = $_POST['attendantName'];


        $query = "INSERT INTO `animal_medication_tracker` (`Date_Of_Medication`, `Dosage`, `Purpose`, `Type_Of_Medication`, `Administered_By`, `location`, `Animal_ID`, `Attendant_ID`) VALUES ('$dateOfAdmin','$dosage','$purposeOfAdmin','$typeOfMedication','$administrator','$location','$animalName','$attendantName')" ;

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