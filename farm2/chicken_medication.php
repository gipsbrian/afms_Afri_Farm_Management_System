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
                                    <h4 class="page-title">Chicken Medication Tracker</h4>
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
                                                    <label for="date">Date_Of_Medication<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter Date of Medication" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="hens">Num_Of_Hens<span class="text-danger">*</span></label>
                                                        <input type="number" name="hens" parsley-trigger="change" required
                                                               placeholder="Enter Number of Hens Transferred" class="form-control" id="=hens">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="cocks">Num_Of_Cocks<span class="text-danger">*</span></label>
                                                        <input type="number" name="cocks" parsley-trigger="change" required
                                                               placeholder="Enter Number of Cocks Transferred" class="form-control" id="=cocks">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="type">Type_Of_Medication<span class="text-danger">*</span></label>
                                                        <input type="Text" name="type" parsley-trigger="change" required
                                                               placeholder="Enter Type of Medication" class="form-control" id="=type">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="dosage">Dosage<span class="text-danger">*</span></label>
                                                        <input type="number" name="dosage" parsley-trigger="change" required
                                                               placeholder="Enter Dosage Administered" class="form-control" id="=dosage">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="purpose">Purpose<span class="text-danger">*</span></label>
                                                        <input type="Text" name="purpose" parsley-trigger="change" required
                                                               placeholder="Enter Purpose of Medication" class="form-control" id="=purpose">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="by">Administered_By<span class="text-danger">*</span></label>
                                                        <input type="Text" name="by" parsley-trigger="change" required
                                                               placeholder="Enter Name of Person Administering Medication" class="form-control" id="=by">
                                                    </div>



                                                    <div class="form-group">
                                                        <label for="Full_Names">Attendant_ID<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Attendant">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `attendant`";
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
                                                        <label for="cage">Cage_ID<span class="text-danger">*</span></label>
                                                        
                                                        <select name="cage" class="form-control" placeholder="Cage ID">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `chicken_storage`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

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

  

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

        $date  = $_POST['date'];
        $hens  = $_POST['hens'];
        $cocks  = $_POST['cocks'];
        $type  = $_POST['type'];
        $dosage  = $_POST['dosage'];
        $purpose = $_POST['purpose'];
        $by = $_POST['by'];
        $Full_Names = $_POST['Full_Names'];
        $cage = $_POST['cage'];
        
        
       
       
    
        $query = "INSERT INTO `farm2`.`chicken_medication_tracker` (`Date_Of_Medication`, `Num_Of_Hens`, `Num_Of_Cocks`, `Type_Of_Medication`, `Dosage`, `Purpose`, `Administered_By`, `Attendant_ID`, `Cage_ID`) VALUES ('$date', '$hens', '$cocks', '$type', '$dosage', '$purpose', '$by', '$Full_Names', '$cage')" or die(mysqli_error($dbcon));
         
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
