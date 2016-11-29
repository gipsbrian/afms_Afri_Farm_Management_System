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
                                    <h4 class="page-title">FULL PIG DETAILS </h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                                <form action="" method="post" data-parsley-validate novalidate>

                                                	<div class="form-group">
                                                        <label for="dobe">Animal ID<span class="text-danger">*</span></label>
                                                        <input type="Text" name="animalId" parsley-trigger="change" required
                                                               placeholder="Enter Animal ID e.g. LILLY001" class="form-control" id="dob">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="dobe">Date of Birth<span class="text-danger">*</span></label>
                                                        <input type="date" name="birth" parsley-trigger="change" required
                                                               placeholder="Enter date of birth" class="form-control" id="=dob">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="emailAddress">Date of Weaning<span class="text-danger">*</span></label>
                                                        <input type="date" name="weaning" parsley-trigger="change" required
                                                               placeholder="Enter email" class="form-control" id="emailAddress">
                                                    </div>
													 <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                        <input type="text" name="breed" parsley-trigger="change" required
                                                               placeholder="Animal breed e.g. xxxxxx" class="form-control" id="emailAddress">
                                                    </div>
                                           	       <div class="form-group">
                                                        <label for="emailAddress">Location<span class="text-danger">*</span></label>
                                                        <select name="location" class="form-control">
                                                        	<?php
                                                        	$select="SELECT * FROM `Animal_Location`";
                                                        	$sel_query=mysqli_query($dbcon,$select);
                                                        	while ($rw=mysqli_fetch_array($sel_query)) {
                                                        		?>
                                                        		<option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[1]; ?></option>

                                                        <?php
                                                        	}
                                                        	?>

                                                        </select>
                                                        
                                                    </div>
												
												   <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="male"
                                                                   name="gender" >
                                                            <label for="inlineRadio1"> Male </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="female"
                                                                   name="gender">
                                                            <label for="inlineRadio2"> Female </label>
                                                        </div>
                                                    </div>
													
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>
                                                    </div>

                                                    <div class="form-group text-right m-b-0">
                                                        <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                           Mark Pig as Dead
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Edit Pig Details
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
 <?php include "includes/footer.php"; ?>
    </body>
</html>