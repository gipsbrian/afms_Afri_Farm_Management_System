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
  
    
    if(isset($_GET['a_id'])){
	$the_attendant_id = $_GET ['a_id'];
	
	 // $query = "SELECT * FROM animal WHERE Attendant_ID = '$the_pig_id'";
	 // $select_pigs = mysqli_query($dbcon, $query);

     $query=" SELECT * FROM `Attendant` WHERE Attendant_ID = '$the_attendant_id' ";
     $select_attendant = mysqli_query($dbcon,$query);
                                                            
				  
      $row = mysqli_fetch_array($select_attendant); 

        $the_attendant_id = $row[0];
   
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

           <script type="text/javascript">
               swal({
  title: 'Error!',
  text: 'Do you want to continue',
  type: 'error',
  confirmButtonText: 'Cool'
})
           </script>

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title">Attendant Details: </h4>
                                   
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
                                                data-parsley-validate

                                                // -->


                                                             <form role="form"  id="form" method="post"  action="editattendantdetails.php" enctype="multipart/form-data" >


                                                     <?php

                                                 $selectatt="SELECT * FROM `Attendant` WHERE Attendant_ID = '$the_attendant_id' ";
                                                            $sel_att1=mysqli_query($dbcon,$selectatt);


                                                             while ( $rw_att1= mysqli_fetch_array($sel_att1)) {
                                                     # code...
                                                        if($rw_att1['image_location']==null){
                                                            ?>
                                                            <div align="center">

                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att1['Full_Names'],0,1);?>
                                                                

                                                            </div>

                                                            
                                                            <?php
                                                        }else{
                                                            ?>

                                                            <div align="center">

                                                                <img src=<?php echo ($rw_att1['image_location']);?> alt="user" class="thumb-lg img-rounded">

                                                            </div>

                                                            
                                                            <?php
                                                        }

                                                                                                            }



                                                        ?>

                                                    <div class="form-group">
                                                        <label for="dobe">Full Names <span class="text-danger">*</span></label>
                                                        <input type="Text" name="names" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $names; ?>" class="form-control" id="dob" disabled>
                                                        <input value="<?php echo $the_attendant_id; ?>" type = "hidden" class="form-control"  name="a_id" />
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
                                                        
                                                        <input type="text" name="date_joined" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" value="<?php echo $date_joined; ?>" parsley-trigger="change" disabled>
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Residence<span class="text-danger">*</span></label>
                                                        <input type="text" name="residence" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $residence; ?>" class="form-control" id="emailAddress" disabled>
                                                    </div>
                                                     <div class="form-group">
                                                        <label for="emailAddress">Contact<span class="text-danger">*</span></label>
                                                        <input type="text" name="contact" data-parsley-length="[10,10]" data-parsley-type="number" required
                                                               value="<?php echo $contact; ?>" class="form-control" id="emailAddress" disabled>
                                                    </div>
                                                   <div class="form-group">
                                                        <label for="emailAddress">Next Of Kin <span class="text-danger">*</span></label>
                                                        <input type="text" name="nok" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               value="<?php echo $nok; ?>" class="form-control" id="emailAddress" disabled>
                                                        
                                                    </div>
                                                <div class="form-group">
                                                        <label for="emailAddress">Next Of Kin contact <span class="text-danger">*</span></label>
                                                        <input type="text" name="nokc" parsley-trigger="change" data-parsley-length="[10,10]" data-parsley-type="number"  required
                                                               value="<?php echo $nokc; ?>" class="form-control" id="emailAddress" disabled>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Primary Role <span class="text-danger">*</span></label>
                                                        <input name="pri_role" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" 
                                                        value="<?php echo $pri_role; ?>" class="form-control"  required disabled>
                                                        
                                                    </div>


                                                    

                                                    <div class="form-group">
                                                        <label for="emailAddress">Secondary Role <span class="text-danger">*</span></label>
                                                        <input name="sec_role" value="<?php echo $sec_role; ?>" class="form-control" data-parsley-pattern="^[A-Za-z. ]*$" required disabled>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Qualifications<span class="text-danger">*</span></label>
                                                        <input name="qualify" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" value="<?php echo $qualify; ?>" class="form-control"  required disabled>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Additional Training<span class="text-danger">*</span></label>
                                                        <input name="train" value="<?php echo $train; ?>" data-parsley-pattern="^[A-Za-z. ]*$" class="form-control"  required disabled>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Current Salary <span class="text-danger">*</span></label>
                                                        <input type="text" name="sal" parsley-trigger="change" required
                                                               value="<?php echo $sal; ?>" data-parsley-type="number" class="form-control" id="emailAddress" disabled>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Gender <span class="text-danger">*</span></label>
                                                        <input type="text" name="gender" parsley-trigger="change" required
                                                               value="<?php echo $gender; ?>" class="form-control" id="gender" disabled>
                                                        
                                                    </div>

                                                    

                                                    <div class="form-group">
                                                        <label for="emailAddress">Image Location - Name <span class="text-danger">*</span></label>
                                                        <input type="text" name="image_location" parsley-trigger="change" required
                                                               value="<?php echo $image_location; ?>" class="form-control" id="gender" disabled>
                                                        
                                                    </div>






                                                   <!-- <div class="form-group m-b-20">
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
                                                    </div> -->
                                                    

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




                                                    

                                                    <!-- <p align="center">Browse For Attendant Profile Picture</p>

                                        <input type="file" name="files[]" value="<?php echo $image_location; ?>" id="filer_input12" multiple="multiple"  style="position: relative; left: -9999px; top: -9999px; z-index: -9999;"> -->


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
                                                            <button type="submit" class="btn btn-primary" name="update_attendant" >
                                                                Edit Attendant
                                                            </button>

                                                        </div>
                                                    </div>

                                                </form>

                                                


                                                 <div class="form-group" align="center">
                                                        <div>
                                                           
                                                             <?php echo '<a class="btn btn-danger" href="discontinue_attendant.php?id='.$the_attendant_id.'">Discontinue Attendant</a>'; ?>

                                                        </div> 

                                                        
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