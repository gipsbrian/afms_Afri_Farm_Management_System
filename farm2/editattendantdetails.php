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
  
    
    if(isset($_POST['update_attendant'])){
	$the_attendant_id = $_POST ['a_id'];
	
	 // $query = "SELECT * FROM animal WHERE Attendant_ID = '$the_pig_id'";
	 // $select_pigs = mysqli_query($dbcon, $query);

     $query=" SELECT * FROM `Attendant` WHERE Attendant_ID = '$the_attendant_id' ";
     $select_attendant = mysqli_query($dbcon,$query);
                                                            
				  
      $row = mysqli_fetch_array($select_attendant); 

        $attendant_id = $row[0];
   
        $names  = $row[1];
        $date_joined = $row[2];
        $residence = $row[3];
        $contact = $row[4];
        $nok = $row[5];
        $nokc = $row[6];
        
        $pri_role = $row[7];
        $sec_role = $row[8];
        $qualify = $row[9];
        $train = $row[10];
        $sal = $row[11];
        $gender = $row[12];
        $image_location = $row[13];


         
    

    //    if (isset($_POST['update_pig'])){
               
			 //     $post_birth= $_POST['pig_birth'];
			 //     $post_weaning = $_POST['pig_weaning'];
				//  $post_breed = $_POST['pig_breed'];
			 //     $post_location= $POST['pig_location'];
			 //     $post_gender= $_POST['pig_gender'];
          
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
                                    <h4 class="page-title">Edit Attendant</h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                              <!--  <form class="form-horizontal " action="pigedit.php" method = "post">
                                                    <div class="form-group">
                                                        <label>Animal ID</label>
                                                        <input value="<?php echo $the_pig_id; ?>" type = "text" class="form-control" disabled />
                                                        <input value="<?php echo $the_pig_id; ?>" type = "hidden" class="form-control"  name="p_id" />

                                                    </div>


                                                <div class="form-group">
                                                        <label for="dobe">Date of Birth<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $birth; ?>" type = "text" class="form-control" disabled>
                                                    </div>

                                                <div class="form-group">
                                                        <label for="emailAddress">Date of Weaning<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $weaning; ?>" type = "text" class="form-control" disabled>
                                                    </div>
												 <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $breed; ?>" type = "text" class="form-control" disabled>
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="emailAddress">Breed<span class="text-danger">*</span></label>
                                                      <input value="<?php echo $breed; ?>" type = "text" class="form-control" disabled>
                                                    </div>
                                                   <div class="form-group m-b-20">
                                                        <label class="m-b-10">Gender</label>
                                                        <br/>
                                                    <input value="<?php echo $gender; ?>" type = "text" class="form-control" disabled>
                                                    </div>
                                                    <div class="form-group" align="center">
                                                        <div>
                                                            <button type="submit" class="btn btn-primary" name="update_pig" >
                                                                Edit Pig
                                                            </button>

                                                        </div>
                                                    </div>
                                                </form>

                                                // -->
                                                             <form role="form" data-parsley-validate id="form" method="post" enctype="multipart/form-data" >

                                                    <div class="form-group">
                                                        <label for="dobe">Full Names <span class="text-danger">*</span></label>
                                                        <input type="Text" name="names" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $names; ?>" class="form-control" id="dob">
                                                        <input value="<?php echo $the_attendant_id; ?>" type = "hidden" class="form-control"  name="attendant_id" />
                                                    </div>
                                                    <!--
                                                    <div class="form-group">
                                                        <label for="dobe">Date of Appointment<span class="text-danger">*</span></label>
                                                        <input type="date" name="date_joined" parsley-trigger="change" required
                                                               placeholder="Enter date of birth" class="form-control" id="=dob">
                                                    </div>-->

                                                    <div class="form-group">
                                                    <label for="dobe">Date of Appoitment<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date_joined" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" value="<?php echo $date_joined; ?>" parsley-trigger="change" >
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Residence<span class="text-danger">*</span></label>
                                                        <input type="text" name="residence" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $residence; ?>" class="form-control" id="emailAddress">
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="emailAddress">Contact<span class="text-danger">*</span></label>
                                                        <input type="text" name="contact" data-parsley-length="[10,10]" data-parsley-type="number" required
                                                               value="<?php echo $contact; ?>" class="form-control" id="emailAddress" >
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="emailAddress">Next Of Kin <span class="text-danger">*</span></label>
                                                        <input type="text" name="nok" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $nok; ?>" class="form-control" id="emailAddress" >
                                                        
                                                    </div>
                                                <div class="form-group">
                                                        <label for="emailAddress">Next Of Kin contact <span class="text-danger">*</span></label>
                                                        <input type="text" name="nokc" parsley-trigger="change" data-parsley-length="[10,10]" data-parsley-type="number"  required
                                                               value="<?php echo $nokc; ?>" class="form-control" id="emailAddress" >
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Primary Role <span class="text-danger">*</span></label>
                                                        <input name="pri_role" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" 
                                                        value="<?php echo $pri_role; ?>" class="form-control"  required >
                                                        
                                                    </div>


                                                    

                                                    <div class="form-group">
                                                        <label for="emailAddress">Secondary Role <span class="text-danger">*</span></label>
                                                        <input name="sec_role" value="<?php echo $sec_role; ?>" class="form-control" data-parsley-pattern="^[A-Za-z. ]*$" required >
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Qualifications<span class="text-danger">*</span></label>
                                                        <input name="qualify" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" value="<?php echo $qualify; ?>" class="form-control"  required >
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Additional Training<span class="text-danger">*</span></label>
                                                        <input name="train" value="<?php echo $train; ?>" data-parsley-pattern="^[A-Za-z. ]*$" class="form-control"  required >
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Current Salary <span class="text-danger">*</span></label>
                                                        <input type="text" name="sal" parsley-trigger="change" required
                                                               value="<?php echo $sal; ?>" data-parsley-type="number" class="form-control" id="emailAddress" >
                                                        
                                                    </div>

                                                 <!--    <div class="form-group">
                                                        <label for="emailAddress">Gender <span class="text-danger">*</span></label>
                                                        <input type="text" name="gender" parsley-trigger="change" required
                                                               value="<?php echo $gender; ?>" class="form-control" id="gender" disabled>
                                                        
                                                    </div> -->

                                                   <!--  <div class="form-group">
                                                        <label for="emailAddress">Image Location - Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="image_location" parsley-trigger="change" required
                                                               value="<?php echo $image_location; ?>" class="form-control" id="gender" disabled>
                                                        
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
                                                    

                                                   <!--  <div class="form-group" >
                                                    <label class="control-label">Select File</label>
                                                    <input id="input-44" name="input44[]" type="file" multiple class="file-loading">
                                                    <div id="errorBlock" class="help-block"></div>
                                                    <script>
                                                    $(document).on('ready', function() {
                                                        $("#input-44").fileinput({
                                                            uploadUrl: '/file-upload-batch/2',
                                                            maxFilePreviewSize: 10240
                                                        });
                                                    });
                                                    </script>
                                                       
                                                    </div> -->

                                                    <br >    
                                            <!-- <div class="col-sm-12"> -->
                                                
                                                 <div class="form-group clearfix col-md-offset-4">
                                                <div class="col-xs-12 col-sm-6">

                                                <div>
                                             
                                                     <!-- <input type="file" name="files[]" id="filer_input12" multiple="multiple" > -->



                     <script type="text/javascript">
                                            //             $(document).ready(function(){

                                            //     $('#filer_input12').filer({
                                            //         showThumbs: true,
                                            //         addMore: true,
                                            //         allowDuplicates: false
                                            //     });

                                            // });

                                            //              jQuery(document).ready(function(){

                                            //     jQuery('#filer_input12').filer({
                                            //         showThumbs: true,
                                            //         addMore: true,
                                            //         allowDuplicates: false
                                            //     });

                                            // });
                                           
                                           $(document).ready(function(){

                                                //'use-strict';

                                             $('#filer_input12').filer({
                                                limit: 3,
                                                maxSize: 3,
                                                extensions: ['jpg', 'jpeg', 'png', 'gif', 'psd'],
                                                changeInput: true,
                                                showThumbs: true,
                                                addMore: false
                                                    // uploadFile: {
                                                    //         url: null, //URL to which the request is sent {String}
                                                    //         data: null, //Data to be sent to the server {Object}
                                                    //         type: 'POST', //The type of request {String}
                                                    //         enctype: 'multipart/form-data', //Request enctype {String}
                                                    //         synchron: false, //Upload synchron the files
                                                    //         beforeSend: null, //A pre-request callback function {Function}
                                                    //         success: null, //A function to be called if the request succeeds {Function}
                                                    //         error: null, //A function to be called if the request fails {Function}
                                                    //         statusCode: null, //An object of numeric HTTP codes {Object}
                                                    //         onProgress: null, //A function called while uploading file with progress percentage {Function}
                                                    //         onComplete:null//  //A function called when all files were uploaded {Function}
                                                    //     }
                                                    
                                                    
                                            });

                                             });

                                           // function sam{
                                           //  swal("file Uploaded Succcessfully!");
                                           // }

                                                        
                                                    </script>




                                                    

                                                    <p align="center">Browse For Attendant Profile Picture</p>

                                        <input type="file" name="files[]" value="<?php echo $image_location; ?>" id="filer_input12" multiple="multiple"  style="position: relative; left: -9999px; top: -9999px; z-index: -9999;">


                                                    <!-- <form action="form_upload.php" method="post" enctype="multipart/form-data">

                                                      <input type="file" name="files[]" id="filer_input12" multiple="multiple" style="position: relative; left: -9999px; top: -9999px; z-index: -9999;">

                                                
            

                                                    </form>
 -->

                                                      
            

                                                    
                                                </div>
                       
        



                                               </div> 
                                                </div> 
                                           <!--  </div> -->

                                            <hr >
                                            <br >

                                                   
                                           
                                                <!--
                                                <div class="form-group clearfix">
                                                    <div class="col-sm-12 padding-left-0 padding-right-0">
                                                            <input type="file" name="files[]" id="filer_input2" multiple="multiple">
                                                    </div>
                                                </div>
                                                -->




                                                    <div class="form-group text-right m-b-0">


                                                    <!-- <div style="text-align: center; ">


                                                         <button style="margin: auto; width: 120px;" name="submit" class="btn btn-primary" type="submit" id="tooltip-animation" title="Submit/insert Data to Database!" >
                                                            Submit
                                                        </button>

                                                    </div> -->
                                                       
                                                        
                                                        <!--<button type="reset" class="btn btn-default">
                                                            Cancel
                                                        </button>-->
                                                    </div>
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


                                                        <a href="farm_staff_details.php"><button type="" class="btn btn-default" style="margin: auto; width: 120px;">
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


<?php
}
  //

  
    if(isset($_POST['submit']))
    {

         // $the_pig_id = $_POST ['animalId'];
      // $the_pig_id = '$animalId';
      // $birth = '$birth';
      // $weaning = '$weaning';
      // $breed = '$breed';
      // $gender = '$gender';

      $message = "Data Save In Database";

         // $the_attendant_id = $_POST ['a_id'];

         


                                                               

                                                                 

                                                                 

       



        

                    // UPDATE `attendant` SET `Full_Names` = 'Kiwanuka Samuel1', `Residence` = 'busunjuu3' WHERE `attendant`.`Attendant_ID` = 4;



      ?>




      <script type="text/javascript">   

                                                        //doyou3();

                                                        // swal({
                                                        //       title: 'Are you sure?',
                                                        //       text: "You won't be able to revert this!",
                                                        //       type: 'warning',
                                                        //       showCancelButton: true,
                                                        //       confirmButtonColor: '#3085d6',
                                                        //       cancelButtonColor: '#d33',
                                                        //       confirmButtonText: 'Yes, delete it!',
                                                        //       cancelButtonText: 'No, cancel!',
                                                        //       confirmButtonClass: 'btn btn-success',
                                                        //       cancelButtonClass: 'btn btn-danger',
                                                        //       buttonsStyling: false
                                                        //     }).then(function () {
                                                        //       swal(
                                                        //         'Deleted!',
                                                        //         'Your file has been deleted.',
                                                        //         'success'
                                                        //       )
                                                        //     }, function (dismiss) {
                                                        //       // dismiss can be 'cancel', 'overlay',
                                                        //       // 'close', and 'timer'
                                                        //       if (dismiss === 'cancel') {
                                                        //         swal(
                                                        //           'Cancelled',
                                                        //           'Your imaginary file is safe :)',
                                                        //           'error'
                                                        //         )
                                                        //       }
                                                        //     })

                                                        // swal({
                                                        //       title: 'Are you sure?',
                                                        //       text: "The Attendant details will be Updated!",
                                                        //       type: 'warning',
                                                        //       showCancelButton: true,
                                                        //       confirmButtonColor: "#DD6B55",
                                                        //       //cancelButtonColor: '#d33',
                                                        //       confirmButtonText: 'Yes, Update Attendant details!',
                                                        //       cancelButtonText: 'No, Ignore!',
                                                        //       confirmButtonClass: 'btn btn-success',
                                                        //       cancelButtonClass: 'btn btn-danger',
                                                        //       buttonsStyling: false
                                                        //     }).then(function () {
                                                        //       swal({
                                                        //         // 'Deleted!',
                                                        //         // 'Your file has been deleted.',
                                                        //         // 'success'
                                                        //         title: "Attendant details edited/updated Succcessfully!",
                                                        //               text: "Thanks for Updating Pigs Menu.",
                                                        //               timer: 5000,
                                                        //               showConfirmButton: false

                                                                 
                                                        //       })
                                                        //       //setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);

                                                              
                                                        //     }, function (dismiss) {
                                                        //       // dismiss can be 'cancel', 'overlay',
                                                        //       // 'close', and 'timer'
                                                        //       if (dismiss === 'cancel') {
                                                        //         swal({
                                                        //           // 'Cancelled',
                                                        //           // 'Your imaginary file is safe :)',
                                                        //           // 'error'

                                                                  
                                                        //               title: "Attendant details have not been updated!",
                                                        //               type: "error",
                                                        //               text: " Attendant Menu Not Updated.",
                                                        //               timer: 5000,
                                                        //               showConfirmButton: false
                                                                    

                                                                


                                                        //         })
                                                        //        // setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);
                                                        //       }
                                                        //     })



                                                       // function doyou3(){
                                                            swal({
                                                              title: "Are you sure?",
                                                              text: "This Attendant details will be Updated!",
                                                              type: "warning",
                                                              showCancelButton: true,
                                                              confirmButtonColor: "#DD6B55",
                                                              confirmButtonText: "Yes, Update Attendant details!",
                                                              cancelButtonText: "No, Ignore!",
                                                              closeOnConfirm: false,
                                                              closeOnCancel: false
                                                            },
                                                            function(isConfirm) {
                                                               



                                                              if(isConfirm == true) {

                                                                swal({
                                                                      title: "Attendant details edited/updated Succcessfully!",
                                                                      text: "Thanks for Updating Pigs Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });




                                                            

                                                                 setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);

                                                                     <?php

                                                  $attendant_id1 = $_POST['attendant_id'];
                                                                $names  = $_POST['names'];

                                                                $date_joined = $_POST['date_joined'];
                                                                $residence = $_POST['residence'];
                                                                $contact = $_POST['contact'];
                                                                $nok = $_POST['nok'];
                                                                $nokc = $_POST['nokc'];
                                                                $sal = $_POST['sal'];
                                                                $pri_role = $_POST['pri_role'];
                                                                $sec_role = $_POST['sec_role'];
                                                                $qualify = $_POST['qualify'];
                                                                $train = $_POST['train'];
                                                                $gender = $_POST['gender'];


                                                                $query2 = "UPDATE `attendant` SET `Full_Names` = '$names', 
                                                                                    `Date_Joined` = '$date_joined',
                                                                                    `Residence` ='$residence', 
                                                                                    `Contact` ='$contact',
                                                                                    `Next_Of_Kin_Names` ='$nok',
                                                                                    `Next_Of_Kin_Contact` ='$nokc',
                                                                                    `Primary_Role` ='$pri_role',
                                                                                    `Secondary_Role` ='$sec_role',
                                                                                    `Qualifications` ='$qualify',
                                                                                    `Additional_Training` ='$train',
                                                                                    `Current_Salary` ='$sal',
                                                                                    `Gender` ='$gender' WHERE `attendant`.`Attendant_ID` = '$attendant_id1'";



                                                                   $result2 = mysqli_query($dbcon , $query2);




                                                               

                                                                     
       


                                                                    // if  (!$result2){
                                                                    //         die ('QUERY FAILED' . mysqli_error($dbcon));
                                                                    //      }else{

                                                                ?>

                                                                 // <?php

                                                                 // }

                                                                 // ?>




                                                              } else {

                                                               // if(!isConfirm){
                                                                    //swal("Cancelled", "The Pig has not been edited :)", "error");
                                                                 swal({
                                                                      title: "Attendant details have not been updated!",
                                                                      type: "error",
                                                                      text: " Attendant Menu Not Updated.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });

                                                                setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);

                                                                


                                                               // }


                                                                
                                                              }


                                                                } //close if function isConfirm






                                                                );



                                                                
                                                       //}
                                                        

      </script>

                                                        <?php

   
         
      
       // if  (!$result){
       //    die ('QUERY FAILED' . mysqli_error($dbcon));
       // }else{
          
           ?>
<!-- 
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

          </script> -->



          <?php
      

          



    }


       //}


  //

  ?>
 <?php include "includes/footer.php"; ?>
    </body>
</html>