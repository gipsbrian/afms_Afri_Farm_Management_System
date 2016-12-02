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
                                    <h4 class="page-title">Chicken Feed Consumption</h4>
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
                                                    <label for="date">Date of Consumption<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="feed">Feed_Composition<span class="text-danger">*</span></label>
                                                        <input type="Text" name="feed" parsley-trigger="change" required
                                                               placeholder="Enter feed composition" class="form-control" id="=feed">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="weight">Total_Weight<span class="text-danger">*</span></label>
                                                        <input type="number" name="weight" parsley-trigger="change" required
                                                               placeholder="Enter total weight" class="form-control" id="=weight">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="water">Water_Provided<span class="text-danger">*</span></label>
                                                        <input type="number" name="water" parsley-trigger="change" required
                                                               placeholder="Enter amount of water provided" class="form-control" id="=water">
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
        $feed  = $_POST['feed'];
        $weight  = $_POST['weight'];
        $water  = $_POST['water'];
        $Full_Names = $_POST['Full_Names'];
        $cage = $_POST['cage'];
        
        
       
       
    
        $query = "INSERT INTO `farm2`.`chicken_feed_consumption` (`Date_Of_Consumption`, `Feed_Composition`, `Total_Weight`, `Water_Provided`, `Attendant_ID`, `Cage_ID`) VALUES ('$date', '$feed', '$weight', '$water', '$Full_Names', '$cage')" or die(mysqli_error($dbcon));
         
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
