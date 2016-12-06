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
                                    <h4 class="page-title">Pig Feed Consumption Monitoring Form </h4>
                       
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                                <form action="" method="post" data-parsley-validate novalidate >

                                                	
                                                    <div class="form-group">
                                                        <label for="dobe">Date <span class="text-danger">*</span></label>

                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">

                                                        <!-- <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date of birth" class="form-control" id="=dob"> -->
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="dobe">Feed Receipt <span class="text-danger">*</span></label>

                                                        <select name="attendant" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select1="SELECT * FROM `feed_receipt_acquisition`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                ?>
                                                                <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[3]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                       <!--  <input type="Text" name="feed" parsley-trigger="change" required
                                                               placeholder="What does the food contain" class="form-control" id="dob"> -->
                                                    </div>

                                                    
													 <div class="form-group">
                                                        <label for="emailAddress">Meal Weight<span class="text-danger">*</span></label>
                                                        <input type="number" name="meal" parsley-trigger="change" required
                                                               placeholder="Weight of the food" class="form-control" id="emailAddress">
                                                    </div>
                                           	       
												    
                                                    

                                                    <div class="form-group">
                                                        <label for="emailAddress">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="attendant" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select1="SELECT * FROM `Attendant`";
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
                                                        <label for="emailAddress">Pig Location<span class="text-danger">*</span></label>
                                                        
                                                        <select name="location" class="form-control">
                                                        <option></option>
                                                            <?php
                                                            $select2="SELECT * FROM `Animal_Location`";
                                                            $sel_query2=mysqli_query($dbcon,$select2);
                                                            while ($rw2=mysqli_fetch_array($sel_query2)) {
                                                                ?>
                                                                <option value="<?php echo $rw2[0]; ?>" parsley-trigger="change" required><?php echo "Stay ".$rw2[1]." Pen ".$rw2[2]; ?></option>

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
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

        $date  = $_POST['date'];
        $feed = $_POST['feed'];
        $meal = $_POST['meal'];
        $attendant = $_POST['attendant'];
        $location = $_POST['location'];
     
       
    
       
 $query = "INSERT INTO `animal_feed_consumption` (`Date_Of_Consumption`, `Feed_Composition`, `Meal_Weight`, `Location_ID`, `Attendant_ID`) VALUES ('$date', '$feed', '$meal', '$location', '$attendant')" or die(mysqli_error($dbcon));        
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