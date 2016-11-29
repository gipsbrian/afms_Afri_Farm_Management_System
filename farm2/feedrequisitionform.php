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
                                    <h4 class="page-title">Feeds Requisition Form </h4>
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
                                                        <label for="date">Date <span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date" class="form-control" id="=date">
                                                    </div>


                                                     <div class="form-group">
                                                        <label for="attendant">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="attendant" class="form-control" placeholder="Name of Verifier">
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
                                                        <label for="item">Items <span class="text-danger">*</span></label>
                                                        <input type="Text" name="item" parsley-trigger="change" required
                                                               placeholder="Items Being Requisitioned" class="form-control" id="item">
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="quantity">Quantity of Feeds <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds Requisition" class="form-control" id="quantity">
                                                        
                                                    </div>

                                                     <div class="form-group">
                                                        <label for="purpose">Purpose <span class="text-danger">*</span></label>
                                                        <input type="Text" name="purpose" parsley-trigger="change" required
                                                               placeholder="Purpose of Requisition" class="form-control" id="purpose">
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

<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $date  = $_POST['date'];
       
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $attendant = $_POST['attendant'];
        $purpose = $_POST['purpose'];
        
       
    
       
         //$query = "INSERT INTO `farm`.`feeds_requisition` (`Feed_Requisition_ID`,`Date_Of_Requisition`, `Item_Requisitioned`, `Quantity`, `Attendant_ID`, `Purpose`) VALUES ('$date','$item','$quantity','$attendant','$purpose')" or die(mysqli_error($dbcon));
         $query = "INSERT INTO `farm`.`feeds_requisiton` (`Feed_Requisition_ID`, `Date_Of_Requisition`, `Item_Requisitioned`, `Quantity`, `Attendant_ID`, `Purpose`) VALUES (NULL, '$date', '$item', '$quantity', '$attendant', '$purpose')"or die(mysqli_error($dbcon));
         
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

   <?php include 'includes/footer.php'; 
  ?>
    </body>
</html>





