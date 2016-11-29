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
                                    <h4 class="page-title">Chicken Sales Form </h4>
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
                                                    <label for="date">Date of Sale<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <!-- <div class="form-group">
                                                        <label for="time">Time of Sale <span class="text-danger">*</span></label>
                                                        <input type="time" name="time" parsley-trigger="change" required
                                                               placeholder="Enter time of sale" class="form-control" id="=time">
                                                    </div> -->
                                                    
                                                    <div class="form-group">
                                                        <label for="cage">Cage Number<span class="text-danger">*</span></label>
                                                        <input type="number" name="cage" parsley-trigger="change" required
                                                               placeholder="Enter cage number" class="form-control" id="=cage">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="hens">Number of Hens Sold <span class="text-danger">*</span></label>
                                                        <input type="number" name="hens" parsley-trigger="change" required
                                                               placeholder="Enter number of hens sold" class="form-control" id="=hens">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cocks">Number of Cocks Sold <span class="text-danger">*</span></label>
                                                        <input type="number" name="cocks" parsley-trigger="change" required
                                                               placeholder="Enter number of cocks sold" class="form-control" id="=cocks">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Full_Names">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Verifier">
                                                        <option></option>
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



                                                    <div class="form-group">
                                                        <label for="customer">Customer <span class="text-danger">*</span></label>
                                                        <input type="Text" name="customer" parsley-trigger="change" required
                                                               placeholder="Customer receiving chickens" class="form-control" id="customer">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="total">Total Amount <span class="text-danger">*</span></label>
                                                        <input type="number" name="total" parsley-trigger="change" required
                                                               placeholder="Total Amount of Chicken Sales" class="form-control" id="total">
                                                        
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
        // $time  = $_POST['time'];
        $cage  = $_POST['cage'];
        $hens  = $_POST['hens'];
        $cocks  = $_POST['cocks'];
        $Full_Names = $_POST['Full_Names'];
        $customer = $_POST['customer'];
        $total = $_POST['total'];
        
        
       
       
    
        $query = "INSERT INTO `farm2`.`chicken_sales` (`Date_Of_Sale`, `Original_Cage`,`Num_Of_Hens`, `Num_Of_Cocks`, `Customer_Name`, `Total_Amount`, `Attendant_ID`, `Cage_ID`, `Time`) VALUES ('$date', '$cage','$hens', '$cocks', '$customer', '$total', '$Full_Names', '$cage', '$time')" or die(mysqli_error($dbcon));
         
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
