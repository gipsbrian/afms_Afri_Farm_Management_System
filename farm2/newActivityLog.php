<!DOCTYPE html>
<html>
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/underscore1.png">
        <!-- App title -->
        <title>Zircos - Responsive Admin Dashboard Template</title>

        <!-- Notification css (Toastr) -->
        <link href="plugins/toastr/toastr.min.css" rel="stylesheet" type="text/css" />

        <!-- -->
        <link href="plugins/timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet">
        <!--<link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">-->
        <link href="plugins/clockpicker/css/bootstrap-clockpicker.min.css" rel="stylesheet">
        <link href="plugins/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="plugins/switchery/switchery.min.css">


        <!--<script src="plugins/bootstrap-sweetalert/sweetalert.min.js"></script>-->
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/sweetalert.css">
        <script src="plugins/bootstrap-sweetalert/sweetalert-dev.js"></script>



        <!--<script type="text/javascript" src="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.js"> </script>-->

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
<script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-83057131-1', 'auto');
          ga('send', 'pageview');

        </script>

    </head>
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

<style type="text/css">
    
</style>

<script type="text/javascript">
   //swal("Here's a message!"); 
</script>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
     <?php include "includes/navbar.php";?>
	 <?php include "includes/leftsidemenu.php";?>

     

     </script>
       
    
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
                                    <h4 class="page-title">Daily Attendant Activity Log </h4>
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
                                                <form action="#" method="post" data-parsley-validate novalidate>

                                                    <!--
                                                	<div class="form-group">
                                                        <label for="dobe">Name of Attendant <span class="text-danger">*</span></label>
                                                        <input type="Text" name="names" parsley-trigger="change" required
                                                               placeholder="The name of the attendant who performed the activities" class="form-control" id="dob">
                                                    </div>-->
                                                    <br>

                                             

                                                 <div class="form-group">
                                                    <label for="emailAddress">Name of Attendant<span class="text-danger">*</span></label>
                                                     <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="location">
                                                    <?php
                                                     $select="SELECT * FROM `Attendant`";
                                                      $sel_query=mysqli_query($dbcon,$select);
                                                         while ($rw=mysqli_fetch_array($sel_query)) {
                                                         ?>
                                                        <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[1]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
                                                    </div>
                                                    <br>


                                                    <!--<div class="input-group">
                                                        <label for="dobe">Date of Activity<span class="text-danger">*</span></label>
                                                        <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                        <input type="date" name="date_joined" parsley-trigger="change" required
                                                               placeholder="The date for which the activities being recorded took place" class="form-control" id="=dob">
                                                    </div>-->
                                                    <!--<div class="form-group">
                                                                    <label>Default Functionality</label>
                                                                    <div>
                                                                        <div class="input-group">
                                                                            <input type="text" class="form-control" placeholder="mm/dd/yyyy" id="datepicker">
                                                                            <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                                        </div> input-group 
                                                                    </div>
                                                    </div>-->
                                                    
                                                    <div class="form-group">
                                                    <label for="dobe">Date of Activity<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date_activity" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>
                                                    
                                                    <br>

                                                    
                                                    <div class="form-group">
                                                        <label>Time of Activity</label>
                                                        <div class="input-group">
                                                            <input id="timepicker" type="text" class="form-control" name="time_activity">
                                                            <span class="input-group-addon"><i class="mdi mdi-clock"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                    
                                                    <!--
                                                    <div class="form-group">
                                                        <label for="emailAddress">Time of Activity<span class="text-danger">*</span></label>
                                                        <input type="text" name="residence" parsley-trigger="change" required
                                                               placeholder="The time when a specific activity took place" class="form-control" id="emailAddress">
                                                    </div>-->
                                                    <br>
													 <div class="form-group">
                                                        <label for="emailAddress">Description of Activty<span class="text-danger">*</span></label>
                                                        <input type="text" name="activity_description" parsley-trigger="change" required
                                                               placeholder="A detailed description of the activity that was conducted by the attendant" class="form-control" id="emailAddress">
                                                    </div>
                                                    <br>
                                           	       <div class="form-group">
                                                        <label for="emailAddress">Verified By:- <span class="text-danger">*</span></label>
                                                        <input type="text" name="activity_verified" parsley-trigger="change" required
                                                               placeholder="The person who verified that this activity actually took place at the stated time" class="form-control" id="emailAddress">
                                                        
                                                    </div>

                                                       <!-- <pre id="toastrOptions">Command: toastr["success"]("I do not think that means what you think it means.")

                                                                    toastr.options = {
                                                                  "closeButton": true,
                                                                  "debug": false,
                                                                  "newestOnTop": false,
                                                                  "progressBar": true,
                                                                  "positionClass": "toast-bottom-center",
                                                                  "preventDuplicates": true,
                                                                  "showDuration": "300",
                                                                  "hideDuration": "1000",
                                                                  "timeOut": "5000",
                                                                  "extendedTimeOut": "1000",
                                                                  "showEasing": "swing",
                                                                  "hideEasing": "linear",
                                                                  "showMethod": "fadeIn",
                                                                  "hideMethod": "fadeOut"
                                                                        }</pre> -->
                                                                   

                                                    <br>
                												

												    <!--
                                                    <div class="form-group">
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
                                                        <div class="checkbox">
                                                            <input id="remember-1" type="checkbox">
                                                            <label for="remember-1"> Remember me </label>
                                                        </div>
                                                    </div>-->

                                                    <div class="form-group text-right m-b-0">
                                                        <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit"
                                                        onclick="">
                                                            Submit
                                                        </button>

                                                        <button type="button" class="btn btn-primary waves-effect waves-light" id="showtoast" name="showtoast" onclick="toastr.success('Data inserted Succcessfully', 'Success')">Show Toast</button>
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

                <footer class="footer text-right">
                    2016 © Zircos.
                </footer>

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <a href="javascript:void(0);" class="right-bar-toggle">
                    <i class="mdi mdi-close-circle-outline"></i>
                </a>
                <h4 class="">Settings</h4>
                <div class="setting-list nicescroll">
                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Notifications</h5>
                            <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">API Access</h5>
                            <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Auto Updates</h5>
                            <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>

                    <div class="row m-t-20">
                        <div class="col-xs-8">
                            <h5 class="m-0">Online Status</h5>
                            <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                        </div>
                        <div class="col-xs-4 text-right">
                            <input type="checkbox" checked data-plugin="switchery" data-color="#7fc1fc" data-size="small"/>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <!-- <script src="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.js"></script>-->


       

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>
       
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/moment.js"></script>
        <script src="assets/js/datetimepicker.js"></script>


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

         <!-- Toastr js -->
        <script src="plugins/toastr/toastr.min.js"></script>
        <!-- Toastr init js (Demo)-->
        <script src="assets/pages/jquery.toastr.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <!-- Init js -->
        <script src="assets/pages/jquery.form-pickers.init.js"></script>
        


       <script src="plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="plugins/bootstrap-sweetalert/sweetalert.css">

<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Activity Saved In Database";
       

         $location  = $_POST['location'];
        $date_activity = $_POST['date_activity'];
        $time_activity = $_POST['time_activity'];
        $activity_description = $_POST['activity_description'];
        $activity_verified = $_POST['activity_verified'];


         $select1="SELECT * FROM `Attendant` where Attendant_ID='$location'";
                                                      $sel_query1=mysqli_query($dbcon,$select1);
                                                         $rw1=mysqli_fetch_array($sel_query1);
                                                         
                                                        

                                                        
                                                            
                                                            
        $name = $rw1[1];

        

        
       
         //$query = "INSERT INTO `Attendant`( `Full_Names`, `Date_Joined`, `Residence`, `Contact`, `Next_Of_Kin_Names`, `Next_Of_Kin_Contact`, `Primary_Role`, `Secondary_Role`, `Qualifications`, `Additional_Training`, `Current_Salary`, `Gender`) VALUES ('$names', '$date_joined', '$residence', '$contact', '$nok', '$nokc', '$pri_role', '$sec_role', '$qualify', '$train', '$sal','$gender') " or die(mysqli_error($dbcon));
        // $query .= "";
         
        
         $query ="INSERT INTO `attendant_activity_log` (`Attendant_Name`,`Date_Of_Activity`, `Time_of_Activity`, `Description_Of_Activity`, `Verified_By`,`Attendant_ID`) VALUES ('$name','$date_activity', '$time_activity', '$activity_description', '$activity_verified', '$location')";

         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{

          ?>

          <script type="text/javascript">   
                                                        function doyou1(){
                                                            

                                                                swal({
                                                                      title: "Data inserted Succcessfully!",
                                                                      text: "Thanks for Updating Activity Menu.",
                                                                      timer: 5000,
                                                                      showConfirmButton: false
                                                                    });
                                                                         
                                                                        // window.open('index.php?message=entered','_self');                                                        
                                                                
                                                        }
                                                        

        </script>

          <script>
          //toastr.success('Data inserted Succcessfully', 'Success');

          doyou1();
 
          setTimeout(function(){ window.location.href = 'index.php' }, 5000);

        


         // window.open('index.php?message=entered','_self');


          //toastr.success('Data inserted Succcessfully', 'Success');
          </script>


          <?php
         // header( "refresh:5; url=index.php" ); 



        }


       }


    
  ?>

  <?php include "includes/footer.php";

 ?>


    </body>
</html>