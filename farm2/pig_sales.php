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
                                    <h4 class="page-title">Pig Sales </h4>
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
                                                <form action="" method="post" data-parsley-validate novalidate>

                                                	<div class="form-group">
                                                        <label for="dobe">Date Of Sale <span class="text-danger">*</span></label>
                                                        <input type="date" name="sale_date" parsley-trigger="change" required
                                                                class="form-control" id="dob">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Customer<span class="text-danger">*</span></label>
                                                        <input type="text" name="customer" parsley-trigger="change" required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                    </div>
                                                   
                                                    <div class="form-group">
                                                        <label for="emailAddress">Animal ID<span class="text-danger">*</span></label>
                                                        
                                                        <select name="animalID">
                                                            <?php
                                                            $select1="SELECT * FROM `Animal`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                ?>
                                                                <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[0]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>
													 

                                                    <div class="form-group">
                                                        <label for="emailAddress">Quantity <span class="text-danger">*</span></label>
                                                        <input type="number" name="qty" parsley-trigger="change" required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                        
                                                    </div>


                                           	       <div class="form-group">
                                                        <label for="emailAddress">Amount <span class="text-danger">*</span></label>
                                                        <input type="number" name="amount" parsley-trigger="change" required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                        
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
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $sale_date  = $_POST['sale_date'];
        $customer = $_POST['customer'];
        $animalID = $_POST['animalID'];
        $qty = $_POST['qty'];
        $amount = $_POST['amount'];
        
       
         $query = "INSERT INTO `Pig_Sales`(`Customer_Name`, `Date_Of_Sale`, `Price_Of_Animal`, `Quantity`, `Animal_ID`) VALUES ('$customer','$sale_date','$amount','$qty','$animalID')" or die(mysqli_error($dbcon));
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