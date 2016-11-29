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

            <!-- Left Sidebar End -->

            <script type="text/javascript">
   //swal("Here's a message!"); 
            </script>



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
                                    <h4 class="page-title">Addition of New Attendant/Staff </h4>
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
                                                <form action="" method="post" role="form" data-parsley-validate id="form">

                                                	<div class="form-group">
                                                        <label for="dobe">Full Names <span class="text-danger">*</span></label>
                                                        <input type="Text" name="names" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               placeholder="Enter Staff Names here" class="form-control" id="dob">
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
                                                        
                                                        <input type="text" name="date_joined" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Residence<span class="text-danger">*</span></label>
                                                        <input type="text" name="residence" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               placeholder="Where do you live" class="form-control" id="emailAddress">
                                                    </div>
													 <div class="form-group">
                                                        <label for="emailAddress">Contact<span class="text-danger">*</span></label>
                                                        <input type="text" name="contact" data-parsley-length="[10,10]" data-parsley-type="number" required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                    </div>
                                           	       <div class="form-group">
                                                        <label for="emailAddress">Next Of Kin <span class="text-danger">*</span></label>
                                                        <input type="text" name="nok" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                        
                                                    </div>
												<div class="form-group">
                                                        <label for="emailAddress">Next Of Kin contact <span class="text-danger">*</span></label>
                                                        <input type="text" name="nokc" parsley-trigger="change" data-parsley-length="[10,10]" data-parsley-type="number"  required
                                                               placeholder="" class="form-control" id="emailAddress">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Primary Role <span class="text-danger">*</span></label>
                                                        <textarea name="pri_role" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" placeholder="Main Responsibilities" class="form-control"  required></textarea>
                                                        
                                                    </div>


                                                    

                                                    <div class="form-group">
                                                        <label for="emailAddress">Secondary Role <span class="text-danger">*</span></label>
                                                        <textarea name="sec_role" placeholder="Other Responsibilities" class="form-control" data-parsley-pattern="^[A-Za-z. ]*$" required></textarea>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Qualifications<span class="text-danger">*</span></label>
                                                        <textarea name="qualify" parsley-trigger="change" data-parsley-pattern="^[A-Za-z. ]*$" placeholder="Enter Qualifications here e.g. BSc Agriculture" class="form-control"  required></textarea>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Additional Training<span class="text-danger">*</span></label>
                                                        <textarea name="train" placeholder="Other Qualifications or Trainings" data-parsley-pattern="^[A-Za-z. ]*$" class="form-control"  required></textarea>
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="emailAddress">Current Salary <span class="text-danger">*</span></label>
                                                        <input type="text" name="sal" parsley-trigger="change" required
                                                               placeholder="Current Salary" data-parsley-type="number" class="form-control" id="emailAddress">
                                                        
                                                    </div>

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
													

                                                    <!--<div class="form-group" >
                                                    <label class="control-label">Select File</label>-->
                                                    <!--<input id="input-44" name="input44[]" type="file" multiple class="file-loading">
                                                    <div id="errorBlock" class="help-block"></div>
                                                    <script>
                                                    $(document).on('ready', function() {
                                                        $("#input-44").fileinput({
                                                            uploadUrl: '/file-upload-batch/2',
                                                            maxFilePreviewSize: 10240
                                                        });
                                                    });
                                                    </script>-->
                                                        <!--<div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>-->
                                                    <!--</div>-->

                                                    <br >
                                                    <br >

                                                    
                                                   
                                                

                                                   

                                            <div class="form-group clearfix col-md-offset-4">
                                                <div class="col-sm-6 padding-left-0 padding-right-0">
                                                   <input class="btn btn-success" type="file" name="files[]" id="filer_input2" multiple="multiple" >

                                                <div class="jFiler jFiler-theme-default">
                                                <input type="file" name="files[]" id="filer_input2" multiple="multiple" style="position: absolute; left: -9999px; top: -9999px; z-index: -9999;">

                                                <!--<div class="jFiler-input">-->

                                                <!--<div class="jFiler-input-caption"><span>Choose files To Upload</span>-->
                                               <!-- <div class="jFiler-input-caption" ><span>Choose files To Upload</span>
                                                </div>

                                                <div class="jFiler-input-button" > Choose Files</div>

                                                </div>-->
                                               <!-- <input type="file" name="files[]" id="filer_input2" multiple="multiple">-->


                                                </div>
                                                </div>

                                                  
                                                            
                                                    
                                                

                                            </div>

                                            
                                                
                                               




                                                    <div class="form-group text-right m-b-0">


                                                    <div style="text-align: center; ">


                                                         <button style="margin: auto; width: 120px;" name="submit" class="btn btn-primary" type="submit" id="tooltip-animation" title="Submit/insert Data to Database!" >
                                                            Submit
                                                        </button>

                                                    </div>
                                                       
                                                        
                                                        <!--<button type="reset" class="btn btn-default">
                                                            Cancel
                                                        </button>-->
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
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="plugins/switchery/switchery.min.js"></script>

        <script src="plugins/moment/moment.js"></script>
        <script src="plugins/timepicker/bootstrap-timepicker.js"></script>
        <script src="plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
        <script src="plugins/clockpicker/js/bootstrap-clockpicker.min.js"></script>
        <script src="plugins/bootstrap-daterangepicker/daterangepicker.js"></script>

         <script type="text/javascript" src="plugins/parsleyjs/parsley.min.js"></script>
         <!-- Tooltipster js -->
        <script src="plugins/tooltipster/tooltipster.bundle.min.js"></script>
        <script src="assets/pages/jquery.tooltipster.js"></script>

        <!-- Jquery filer js -->
        <script src="plugins/jquery.filer/js/jquery.filer.min.js"></script>
             
        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

         <!-- page specific js -->
        <script src="assets/pages/jquery.fileuploads.init.js"></script>


        <!-- Init js -->
        <script src="assets/pages/jquery.form-pickers.init.js"></script>
        <script type="text/javascript">

            $(document).ready(function() {
                $('#form').parsley();
            });

            $(function () {
                $('#demo-form').parsley().on('field:validated', function () {
                    var ok = $('.parsley-error').length === 0;
                    $('.alert-info').toggleClass('hidden', !ok);
                    $('.alert-warning').toggleClass('hidden', ok);
                })
                .on('form:submit', function () {
                    return false; // Don't submit form for this demo
                });
            });
        </script>

<?php


if(isset($_POST['submit'])){



if(!empty($_POST["names"]) && !empty($_POST["date_joined"]) && !empty($_POST["residence"]) && !empty($_POST["contact"]) && !empty($_POST["pri_role"]) && !empty($_POST["qualify"]) && !empty($_POST["nok"]) && !empty($_POST["nokc"])  ){
        //if($names == null){
           



$message = "Data Save In Database";
       


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

        
       
      
        // $query .= "";


        $query = "INSERT INTO `Attendant`( `Full_Names`, `Date_Joined`, `Residence`, `Contact`, `Next_Of_Kin_Names`, `Next_Of_Kin_Contact`, `Primary_Role`, `Secondary_Role`, `Qualifications`, `Additional_Training`, `Current_Salary`, `Gender`) VALUES ('$names', '$date_joined', '$residence', '$contact', '$nok', '$nokc', '$pri_role', '$sec_role', '$qualify', '$train', '$sal','$gender') " or die(mysqli_error($dbcon));


         $result = mysqli_query($dbcon , $query);




    
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));

          ?>

           <script type="text/javascript">   
                                                      
                        /*                                    
                        function doyou3(){

                                 swal({
                                    title: "Error!",
                                    text: "Data NOT inserted.  :(",
                                    timer: 5000,
                                    showConfirmButton: false 
                                    
                                      type: "error",
                                      //confirmButtonText: "Cool"
                                });


                        }
                             doyou3();
                            
                             setTimeout(function(){ window.location.href = 'newAttendant.php' }, 5000);
                             */

                            // swal("Data Not Inserted", "Try to view Error Log ", "error");
                                
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        
                                                        

        </script>



          <?php


       }else{
          ?>

            <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "Data inserted Succcessfully!",
                                                                      text: "Thanks for Updating Attendants Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        }

                                                        

        </script>


          <script>

          //window.open('index.php?message=entered','_self')






          doyou2();
 
          //setTimeout(function(){ window.location.href = 'index.php' }, 5000);


          setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);

          </script>



          <?php



        }












                                                                          }else{



            ?>
            <script type="text/javascript">   
                                                      
                                                            
                        function mean(){

                                 swal({
                                    title: "Error!",
                                    type: "error",
                                    text: "Data NOT inserted.  :(  Please Insert All fields",
                                    timer: 5000,
                                    showConfirmButton: false 
                                    
                                      
                                      //confirmButtonText: "Cool"
                                });


                        }

                        </script>

                        <script type="text/javascript">
                             mean();


                            
                             //setTimeout(function(){ window.location.href = 'newAttendant.php' }, 5000);

                            // swal("Data Not Inserted", "Try to view Error Log ", "error");
                                
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        
                                                        

        </script>

            <?php
           // die();




                                }


                                }

  

    
    
   


       


    
  ?>
<?php include "includes/footer.php";
 
 ?>
    </body>
</html>