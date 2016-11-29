<!DOCTYPE html>
<html>
<?php include "includes/header.php";
include('database/db_conection.php');

?>

    <body class="fixed-left">

        <!-- Loader 
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
        </div>-->

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
<?php
  
    
    if(isset($_GET['p_id'])){
	$the_pig_id = $_GET ['p_id'];
	
	 $query = "SELECT * FROM animal WHERE Animal_ID = '$the_pig_id'";
	 $select_pigs = mysqli_query($dbcon, $query);
				  
      $row = mysqli_fetch_array($select_pigs); 
   
         $birth    = $row[1];
         $weaning  = $row[2];
         $breed    = $row[3];
         $location = $row[5];
         $gender   = $row[4];
         
    

       if (isset($_POST['update_pig'])){
               
			     $post_birth= $_POST['pig_birth'];
			     $post_weaning = $_POST['pig_weaning'];
				 $post_breed = $_POST['pig_breed'];
			     $post_location= $POST['pig_location'];
			     $post_gender= $_POST['pig_gender'];
          
		  $query = "UPDATE animal SET";
				$query .= "pig_birth = '{$post_birth}', ";
				$query .= "pig_weaning = '{$post_weaning}', ";
				$query .= "pig_breed = '{$post_breed}'";
				$query .= "pig_ location= '{$post_location}', ";
				$query .= "pig_gender = '{$post_gender}', ";
	
				
				$update_post = mysqli_query($dbcon, $query);
	   }
     //confirmQuery($update_pig);
           ?>

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Edit Pig </h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                               <form class="form-horizontal " action="#" method = "post">
                                                    <div class="form-group">
                                                        <label>Animal ID</label>
                                                        <input value="<?php echo $the_pig_id; ?>" type = "text" class="form-control" />
                                                    </div>


                                                <div class="form-group">
                                                        <label for="dobe">Date of Birth<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $birth; ?>" type = "text" class="form-control">
                                                    </div>

                                                <div class="form-group">
                                                        <label for="emailAddress">Date of Weaning<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $weaning; ?>" type = "text" class="form-control">
                                                    </div>
												 <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $breed; ?>" type = "text" class="form-control">
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                      <input value="<?php echo $breed; ?>" type = "text" class="form-control">
                                                    </div>
                                                   <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                    <input value="<?php echo $gender; ?>" type = "text" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light" name="update_pig">
                                                                Submit
                                                            </button>
                                                            <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
							</div>
						</div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

    
            </div>


<?php
}
  
    
    if(isset($_POST['submit']))
    {/*
       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
         $location = $_POST['location'];
         $gender = $_POST['gender'];
         
    
       
         $query = "INSERT INTO `animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') ";
        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ("<div class='container  text-center'>QUERY FAILED" . mysqli_error($dbcon)."</div>");
       }else{
          ?>

		  <td>
                                                    <button class="btn btn-warning waves-effect waves-light btn-sm" id="warning-alert">Click me</button>
                                                </td>
          <script>window.open('index.php?message=entered','_self')</script>

          <?php



        }
*/

       }


  ?>
 <?php include "includes/footer.php"; ?>
    </body>
</html>