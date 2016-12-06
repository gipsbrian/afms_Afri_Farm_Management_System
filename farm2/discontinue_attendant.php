
<!DOCTYPE html>
<html>
<?php include "includes/header.php";
include('database/db_conection.php');

?>



<?php

    if(isset($_GET['id'])){
    $attendantID = $_GET ['id'];
    
     $query = "SELECT * FROM attendant WHERE Attendant_ID = '$attendantID'";
     $select_attendant = mysqli_query($dbcon, $query);
                  
      $row = mysqli_fetch_array($select_attendant); 

         $attendantName = $row[1];

   ?>



    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

     <?php include "includes/navbar.php";?>
	  <?php include "includes/leftsidemenu.php";?>

            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


             <div class="row">
              <div class="col-xs-12">
                <div class="page-title-box">
                                    <h4 class="page-title">Discontinue of Attendant</h4>
                                   
                                    <div class="clearfix"></div>
                                </div>

								           <div class="p-20">
                                                <form action="discontinue_attendant.php" method="post" data-parsley-validate novalidate>

                                                    <br>
                                                 <div class="form-group">
                                                    <label for="emailAddress">Name of Discontinued Attendant<span class="text-danger">*</span></label>
                                                      <input value="<?php echo $attendantName; ?>" type = "text" class="form-control" disabled/>

                                                      <input value="<?php echo $attendantID ; ?>" name ="attendantId" type = "hidden" class="form-control" />
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
                                                               placeholder="A detailed description of the activity that was conducted by the attendant" class="form-control" id="emailAddress">
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
                                                    <br/>
                                                   
                                                </form>
                                               
							</div>
						</div>
                        <!-- end row -->

          </div>

                    </div> <!-- container -->

                </div> <!-- content -->

       

            </div>



        <?php
}
  
    
    if(isset($_POST['submit']))
    {


        $message = "Data Save In Database"; 

       
        $attendantId= $_POST['attendantId'];
  
        $date_activity = $_POST['date_activity'];
        $time_activity = $_POST['time_activity'];
        $activity_description = $_POST['activity_description'];
        $verified_by = $_POST['verified_by'];


         $select1="SELECT * FROM `Attendant` where Attendant_ID='$attendantId'";
         $sel_query1=mysqli_query($dbcon,$select1);
         $rw1=mysqli_fetch_array($sel_query1);
                                      
                                                            
        $name = $rw1[1];



         $query_insert="INSERT INTO `attendant_discontinue` (`Attendant_ID`, `Attendant_Name`, `Date_Discontinued`, `Time_Discontinued`, `Reason_Discontinued`, `Verified_discontinued`) VALUES ('$attendantId', '$name', '$date_activity', '$time_activity', '$activity_description', '$verified_by');";



        $query_insert.="DELETE FROM attendant WHERE Attendant_ID = '$attendantId'";
        


           ?>

     <h1>.</h1>
        <script type="text/javascript">   

      doyou();

                                                       function doyou(){
                                                         swal({
                                                              title: "Are you sure?",
                                                              text: "This Attendant will be Discontinued from Today!",
                                                              type: "warning",
                                                              showCancelButton: true,
                                                              confirmButtonColor: "#DD6B55",
                                                              confirmButtonText: "Yes, Discontinue attendant!",
                                                              cancelButtonText: "No, Ignore!",
                                                              closeOnConfirm: false,
                                                              closeOnCancel: false
                                                            },
                                                            function(isConfirm){
                                                              if (isConfirm) {
                                                              

                                                                <?php



                                                                   $result = mysqli_multi_query($dbcon,$query_insert);
                                                                    if  (!$result){

                                                                    die ('QUERY FAILED' . mysqli_error($dbcon));

                                                                    }else{



                                                                ?>

                                                                  swal({
                                                                     title: "Attendant Succcessfully! Discontinued",
                                                                     text: "",
                                                                     timer: 5000,
                                                                     showConfirmButton: false
                                                                     });


                                                                 setTimeout(function(){ window.location.href = 'farm_staff_details.php' }, 5000);

                                                                 <?php

                                                                 }

                                                                 ?>




                                                              } else {


                                                                //swal("Cancelled", "The Attendant was not Discontinued :)", "error");
                                                                 swal({
                                                                      title: "Attendant details have not Been Altered",
                                                                      type: "error",
                                                                      text: " Attedant Not Deleted .",
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
            
                                                        

        </script>


          <script>


          </script>

          <?php


        }


       }
  ?>

 <?php include "includes/footer.php"; ?>
    </body>
</html>



