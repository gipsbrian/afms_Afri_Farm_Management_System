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
                                    <h4 class="page-title">All Pigs</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                      
                        <div class="row">

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-info">
                                    <i class="mdi mdi-chart-areaspline widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <h3><p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">STY A </p></h3>
                                        <h4 class="text-white"><span data-plugin="counterup">Number of pigs: <?php 
										$sty="SELECT * FROM Animal_Location Where Location_Name='A'";
										$styquery=mysqli_query($dbcon,$sty);
										$add=0;
										while($sties=mysqli_fetch_array($styquery)){
											$stloc=$sties['Location_ID'];
											$styanimal="SELECT * FROM Animal Where Location_ID='$stloc'";
											$styanim=mysqli_query($dbcon,$styanimal);
											 $pig= mysqli_num_rows($styanim);
											
											$add+=$pig;
										}
										echo $add;
										?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
										 <a href="viewallpigsa.php"><button type="button" class="btn btn-teal btn-rounded waves-light waves-effect w-md">View All</button></a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-primary">
                                    <i class="mdi mdi-layers widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <h3 ><p class="m-0 text-uppercase font-600 font-secondary text-overflow" >STY B</p></h3>
                                        <h4 class="text-white"><span data-plugin="counterup">Number of pigs: <?php 
										$sty="SELECT * FROM Animal_Location Where Location_Name='B'";
										$styquery=mysqli_query($dbcon,$sty);
										$add=0;
										while($sties=mysqli_fetch_array($styquery)){
											$stloc=$sties['Location_ID'];
											$styanimal="SELECT * FROM Animal Where Location_ID='$stloc'";
											$styanim=mysqli_query($dbcon,$styanimal);
											 $pig= mysqli_num_rows($styanim);
											
											$add+=$pig;
										}
										echo $add;
										?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
										<a href="viewallpigsb.php"><button type="button" class="btn btn-teal btn-rounded waves-light waves-effect w-md">View all</button></a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-lg-3 col-md-6">
                                <div class="card-box widget-box-two widget-two-danger">
                                    <i class="mdi mdi-access-point-network widget-two-icon"></i>
                                    <div class="wigdet-two-content text-white">
                                        <h3><p class="m-0 text-uppercase font-600 font-secondary text-overflow" title="Statistics">STY C</p></h3>
                                        <h4 class="text-white"><span data-plugin="counterup">Number of pigs: <?php 
										$sty="SELECT * FROM Animal_Location Where Location_Name='C'";
										$styquery=mysqli_query($dbcon,$sty);
										$add=0;
										while($sties=mysqli_fetch_array($styquery)){
											$stloc=$sties['Location_ID'];
											$styanimal="SELECT * FROM Animal Where Location_ID='$stloc'";
											$styanim=mysqli_query($dbcon,$styanimal);
											 $pig= mysqli_num_rows($styanim);
											
											$add+=$pig;
										}
										echo $add;
										?> </span> <small><i class="mdi mdi-arrow-up text-success"></i></small></h2>
										<a href="viewallpigsc.php"><button type="button" class="btn btn-teal btn-rounded waves-light waves-effect w-md">View All</button></a>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->
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
<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       $animalId = $_POST['animalId'];
         $birth=   $_POST['birth'];
         $weaning = $_POST['weaning'];
         $breed= $_POST['breed'];
         $location = $_POST['location'];
         $gender = $_POST['gender'];
         
    
       
         $query = "INSERT INTO `Animal`(`Animal_ID`, `Date_Of_Birth`, `Date_Of_Weaning`, `Breed_Of_Animal`, `Location_ID`,`Gender`) VALUES ('$animalId','$birth','$weaning','$breed','$location','$gender') " or die(mysqli_error($dbcon));


        // $query .= "";
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          
           ?>

            <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "New Pig inserted Succcessfully!",
                                                                      text: "Thanks for Updating Pigs Menu.",
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


          setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

          </script>



          <?php
      

          



        }


       }


    
  ?>

<?php include "includes/footer.php";
 
 ?>
    </body>
</html>