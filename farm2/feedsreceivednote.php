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
                                    <h4 class="page-title">Feeds Received Note Form </h4>
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
                                                        <label for="dobe">Date <span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date" class="form-control" id="=dob">
                                                    </div>

                                                   <div class="form-group">
                                                        <label for="time">Time <span class="text-danger">*</span></label>
                                                        <input type="time" name="time" parsley-trigger="change" required
                                                               placeholder="Enter time" class="form-control" id="=time">
                                                    </div> 
                                                    
                                                    <div class="form-group">
                                                        <label for="item">Item <span class="text-danger">*</span></label>
                                                        <input type="Text" name="item" parsley-trigger="change" required
                                                               placeholder="What item" class="form-control" id="dob">
                                                    </div>

                                                    
                                                    <div class="form-group">
                                                        <label for="supplier">Supplier(s)<span class="text-danger">*</span></label>

                                                        <select name="supplier" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select1="SELECT * FROM `supplier`";
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
                                                        <label for="quantity">Quantity of Feeds <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="quantity">
                                                        
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="Full_Names">Verified By<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Verifier">
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


           
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $date  = $_POST['date'];
         $time = $_POST['time'];
        $item = $_POST['item'];
        $supplier = $_POST['supplier'];
        $quantity = $_POST['quantity'];
        $Full_Names = $_POST['Full_Names'];
        
       
       
    
       
         $query = "INSERT INTO `farm`.`feeds_received` (`Feeds_Received_ID`, `Date_Of_Receiving`, `Time`, `Name_Of_Feeds_Received`, `Supplier_Of_Feeds`, `Quantity`, `Store_Keeper_ID`) VALUES (NULL, '$date', '$time','$item', '$supplier', '$quantity', '$Full_Names')" or die(mysqli_error($dbcon));
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


   include 'includes/footer.php'; 
  ?>

    </body>
</html>





