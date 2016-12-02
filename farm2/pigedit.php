<!DOCTYPE html>
<html>
<?php 
include "includes/header.php";
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
  
    
    if(isset($_POST['update_pig'])){
	$the_pig_id = $_POST ['p_id'];
	
	 $query = "SELECT * FROM animal WHERE Animal_ID = '$the_pig_id'";
	 $select_pigs = mysqli_query($dbcon, $query);
				  
      $row = mysqli_fetch_array($select_pigs); 



         $birth    = $row[1];
         $weaning  = $row[2];
         $breed    = $row[3];
         $location = $row[5];
         $gender   = $row[4];
       
         
    

       // if (isset($_POST['update_pig1'])){
               
			  //    $post_birth= $_POST['pig_birth'];
			  //    $post_weaning = $_POST['pig_weaning'];
				 // $post_breed = $_POST['pig_breed'];
			  //    $post_location= $POST['pig_location'];
			  //    $post_gender= $_POST['pig_gender'];
          
		  // $query = "UPDATE animal SET";
				// $query .= "pig_birth = '{$post_birth}', ";
				// $query .= "pig_weaning = '{$post_weaning}', ";
				// $query .= "pig_breed = '{$post_breed}'";
				// $query .= "pig_ location= '{$post_location}', ";
				// $query .= "pig_gender = '{$post_gender}', ";
	
				
				// $update_post = mysqli_query($dbcon, $query);
	   // }
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
                                                        <input value="<?php echo $the_pig_id; ?>" type = "text" class="form-control" disabled/>
                                                        <input value="<?php echo $the_pig_id; ?>" name ="animalId" type = "hidden" class="form-control" />
                                                    </div>


                                                <div class="form-group">
                                                        <label for="dobe">Date of Birth<span class="text-danger">*</span></label>
                                                        <input id="datepicker-autoclose" name="birth" value="<?php echo $birth; ?>" parsley-trigger="change" type ="text" class="form-control" placeholder="mm/dd/yyyy">
                                                      
                                                    </div>

                                                <div class="form-group">
                                                        <label for="emailAddress">Date of Weaning<span class="text-danger">*</span></label>
                                                        <input id="datepicker" name="weaning" value="<?php echo $weaning; ?>" type = "text" class="form-control">
                                                    </div>
												                         
                                                 <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                        <input name="breed" value="<?php echo $breed; ?>" type = "text" class="form-control">
                                                    </div>
                                                   <!-- <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                      <input value="<?php echo $breed; ?>" type = "text" class="form-control">
                                                    </div> -->

                                                   <!-- <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                    <input value="<?php echo $gender; ?>" type = "text" class="form-control">
                                                    </div> -->


                                                     <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio1" value="male"
                                                                   name="gender" checked>
                                                            <label for="inlineRadio1"> Male </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="inlineRadio2" value="female"
                                                                   name="gender">
                                                            <label for="inlineRadio2"> Female </label>
                                                        </div>
                                                    </div>



                                                      <br >
                                                      <br >

                                                    <div class="form-group" align="center">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary" name="submit">
                                                                Submit
                                                            </button>

                                                            
                                                            <!-- <button type="reset" class="btn btn-danger">
                                                               Cancel
                                                            </button> -->
                                                        </div>
                                                    </div>
                                                </form>

                                                <br >
                                                <br >

                                                 <div style="text-align: center; ">


                                                        <a href="viewallpigs.php"><button type="" class="btn btn-default" style="margin: auto; width: 120px;">
                                                            Cancel
                                                        </button></a>

                                                      </div>
                                            </div>
							</div>
						</div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

    
            </div>

            </div>







   <!--  //}
  
    
    //if(isset($_POST['submit']))
    //
    //{
    /* -->
     <!--   $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
         $location = $_POST['location'];
         $gender = $_POST['gender'];
         
     -->
       
         <!-- $query = "INSERT INTO `animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') ";
        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ("<div class='container  text-center'>QUERY FAILED" . mysqli_error($dbcon)."</div>");
       }else{
          
 -->
		<!--   <td>
                                                    <button class="btn btn-warning waves-effect waves-light btn-sm" id="warning-alert">Click me</button>
                                                </td>
          <script>window.open('index.php?message=entered','_self')</script>

          -->


        

       

<?php
}
  
    
    if(isset($_POST['submit']))
    {

         // $the_pig_id = $_POST ['animalId'];
      $the_pig_id = '$animalId';
      $birth = '$birth';
      $weaning = '$weaning';
      $breed = '$breed';
      $gender = '$gender';

  
   // $query1 = "SELECT * FROM animal WHERE Animal_ID = '$the_pig_id'";
   // $select_pigs = mysqli_query($dbcon, $query1);
          
   //    $row = mysqli_fetch_array($select_pigs); 




         // $birth    = $row[1];
         // $weaning  = $row[2];
         // $breed    = $row[3];
         // $location = $row[5];
         // $gender   = $row[4];
       


       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
        // $location = $_POST['location'];
         $gender = $_POST['gender'];

         
    
       
         // $query = "INSERT INTO `Animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') " or die(mysqli_error($dbcon));

         // $query = "UPDATE `Animal` SET";
         //   $query .= " `Breed_Of_Animal` = 'Green Boar1' WHERE `animal`.`Animal_ID` = 'LIL24';"
         //   $query .= "pig_birth = '{$post_birth}', ";
         //   $query .= "pig_weaning = '{$post_weaning}', ";
         //   $query .= "pig_breed = '{$post_breed}'";
         //   $query .= "pig_ location= '{$post_location}', ";
         //   $query .= "pig_gender = '{$post_gender}', ";

         $query = "UPDATE `animal` SET `Breed_Of_Animal` = '$breed', 
                                                `Gender` = '$gender',
                                                `Date_Of_Weaning` ='$weaning', 
                                                `Date_Of_Birth` ='$birth' 
                    WHERE `animal`.`Animal_ID` = '$animalId'";




      // $query = "UPDATE animal SET";
      //   $query .= "Animal_ID = '{$animalId}', ";
      //   $query .= "Date_Of_Birth = '{$birth}', ";
      //   $query .= "Date_Of_Weaning = '{$weaning}'";
      //   $query .= "Breed_Of_Animal = '{$location}', ";
      //   $query .= "Gender = '{$gender}', ";



  


        // $query .= "";


      ?>

      <script type="text/javascript">   

      doyou();

                                                        function doyou(){
                                                            swal({
                                                              title: "Are you sure?",
                                                              text: "This Pig will be Updated from Today!",
                                                              type: "warning",
                                                              showCancelButton: true,
                                                              confirmButtonColor: "#DD6B55",
                                                              confirmButtonText: "Yes, Update Pig details!",
                                                              cancelButtonText: "No, Ignore!",
                                                              closeOnConfirm: false,
                                                              closeOnCancel: false
                                                            },
                                                            function(isConfirm){
                                                              if (isConfirm) {
                                                               // swal("Fill Form!", "The Attendant will be deleted after Form Submission.", "success");

                                                                //swal("Deleted!", "The Activity has been deleted.", "success");

                                                                <?php



                                                                   $result = mysqli_query($dbcon , $query);

                                                                    if  (!$result){
                                                                            die ('QUERY FAILED' . mysqli_error($dbcon));
                                                                         }else{

                                                                         




                                                                ?>

                                                                 swal({
                                                                      title: "Pig details edited/updated Succcessfully!",
                                                                      text: "Thanks for Updating Pigs Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         


                                                                 setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

                                                                 <?php

                                                                 }

                                                                 ?>




                                                              } else {


                                                                //swal("Cancelled", "The Pig has not been edited :)", "error");
                                                                 swal({
                                                                      title: "Pig details have not been updated!",
                                                                      type: "error",
                                                                      text: " Pigs Menu Not Updated.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });

                                                                setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

                                                              }
                                                                });
                                                        }
                                                        

      </script>

                                                        <?php

   
         
      
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          
           ?>

            <script type="text/javascript">   
                                                        // function doyou2(){
                                                            

                                                        //         swal({
                                                        //               title: "Pig details updated Succcessfully!",
                                                        //               text: "Thanks for Updating Pigs Menu.",
                                                        //               timer: 5000,
                                                        //               showConfirmButton: false
                                                        //             });
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        // }

                                                        

        </script>


          <script>

          //window.open('index.php?message=entered','_self')






          //doyou2();
          // doyou();
 
          //setTimeout(function(){ window.location.href = 'index.php' }, 5000);


          //setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

          </script>



          <?php
      

          



        }


       }


    
  ?>




  

 <?php include "includes/footer.php"; ?>


    </body>
</html>