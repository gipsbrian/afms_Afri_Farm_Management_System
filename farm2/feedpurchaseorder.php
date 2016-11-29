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
                                    <h4 class="page-title">Feeds Purchase Order Form </h4>
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
                                                        <label for="dobe">Date of Purchase Order<span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date" class="form-control" id="=dobe">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="time">Time of Purchase<span class="text-danger">*</span></label>
                                                        <input type="time" name="time" parsley-trigger="change" required
                                                               placeholder="Enter time of purchase" class="form-control" id="=time">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="item">Items To Be Purchased <span class="text-danger">*</span></label>
                                                        <input type="Text" name="item" parsley-trigger="change" required
                                                               placeholder="What item" class="form-control" id="item">
                                                    </div>

                                                    
                                                    <div class="form-group">
                                                        <label for="quantity">Quantity of Feeds To Be Purchased <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="quantity">
                                                        
                                                    </div>
                            
                                                    <div class="form-group">
                                                        <label for="veri">Supplier<span class="text-danger">*</span></label>
                                                        
                                                        <select name="supplier" class="form-control" placeholder="Name of Supplier">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `Supplier`";
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

                

<?php
  if(isset($_POST['submit1'])){

    echo $_POST['time'];
  }
    
   if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

        $date  = $_POST['date'];
        $date1 =date('Y-m-d',$date);
        $time = $_POST['time'];
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $supplier = $_POST['supplier'];
        
       
    
       
         $query = "INSERT INTO `feeds_purchase_order`( `Time`, `Date_Of_Purchase_Order`, `Item_Purchased`, `Quantity`, `Supplier_ID`) VALUES ( '$time','$date',  '$item', '$quantity', '$supplier')" or die(mysqli_error($dbcon));
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

<?php 
    include 'includes/footer.php';
  ?>

    </body>
</html>





