<?php
 include "includes/header.php";
include('database/db_conection.php');
    
    if(isset($_GET['id'])){
	$the_pig_id = $_GET ['id'];
	
	 $query = "SELECT * FROM animal WHERE Animal_ID = '$the_pig_id'";
	 $select_pigs = mysqli_query($dbcon, $query);
				  
      $row = mysqli_fetch_array($select_pigs); 

         $animal_id=$row[0];

   ?>





    <body class="fixed-left">


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
                                    <h4 class="page-title">Discontinue Pig </h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
								 <div class="p-20">
                                              <form action="deletePig.php" method="post" data-parsley-validate novalidate>

                                                 <div class="form-group">
                                                    <label for="emailAddress">Name of Pig<span class="text-danger">*</span></label>
                                                     <input value="<?php echo $animal_id; ?>" type = "text" class="form-control" disabled/>

                                                      <input value="<?php echo $animal_id; ?>" name ="animalId" type = "hidden" class="form-control" />
                                                    </div>
                                                    <br>

                                                    
                                                    <div class="form-group">
                                                    <label for="dobe">Date Discontinued<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date_activity" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>
                                                    
                                                    <br>

                                                    
                                                    <div class="form-group">
                                                        <label>Time Discontinued</label>
                                                        <div class="input-group">
                                                            <input id="timepicker" type="text" class="form-control" name="time_activity">
                                                            <span class="input-group-addon"><i class="mdi mdi-clock"></i></span>
                                                        </div><!-- input-group -->
                                                    </div>
                                                    
                                           
                                                    <br>
													 <div class="form-group">
                                                        <label for="emailAddress">Reason of Discontinuity<span class="text-danger">*</span></label>
                                                        <input type="text" name="activity_description" parsley-trigger="change" required
                                                               placeholder="A detailed description of why the animal was discontinued" class="form-control" id="emailAddress">
                                                    </div>
                                                    <br>
                                           	   
                                                     <div class="form-group">
                                                        <label for="location">Verified By:-<span class="text-danger">*</span></label>
                                                        <select class="btn-group bootstrap-select btn dropdown-toggle btn-custom " name="verified_by">
                                                             <?php
                                                            $select1="SELECT * FROM `attendant`";
                                                            $sel_query1=mysqli_query($dbcon,$select1);
                                                            while ($rw1=mysqli_fetch_array($sel_query1)) {
                                                                ?>
                                                                <option value="<?php echo $rw1[0]; ?>" parsley-trigger="change" required><?php echo $rw1[1]; ?></option>

                                                            <?php
                                                            }
                                                            ?>

                                                        </select>
                                                        
                                                    </div>
                                                    <br>
                								
                                                    <div class="form-group text-center m-b-0">
                                                        <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
                                                       
                                                    </div>

                                                </form>
                                                   

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


<?php
}
  
    
    if(isset($_POST['submit']))
    {


        $message = "Data Save In Database"; 

        $animalId = $_POST['animalId'];
        $date_activity = $_POST['date_activity'];
        $time_activity = $_POST['time_activity'];
        $activity_description = $_POST['activity_description'];
        $activity_verified = $_POST['verified_by'];
       
         $query="INSERT INTO `animal_discontinue` (`Animal_ID`, `Date_Discontinued`, `Time_Discontinued`, `Reason_Discontinued`, `Verified_by`) VALUES ('$animalId','$date_activity' ,'$time_activity' ,'$activity_description' ,'$activity_verified');";

         $query.="DELETE FROM animal WHERE Animal_ID = '$animalId'";

        $result = mysqli_multi_query($dbcon,$query);
        if  (!$result){

          die ('QUERY FAILED' . mysqli_error($dbcon));

       }else{
          
           ?>

            <script type="text/javascript">   
                function doyou2(){
                                                             

                          swal({
                                title: "Pig Succcessfully! Discontinued",
                                text: "",
                                timer: 5000,
                                showConfirmButton: false
                              });
                                                                                                             
                        }
        </script>
          <script>

          doyou2();
          setTimeout(function(){ window.location.href = 'viewallpigs.php' }, 5000);

          </script>
          <?php

        }


       }
  
  ?>
  ?>
 <?php include "includes/footer.php"; ?>
    </body>
</html>