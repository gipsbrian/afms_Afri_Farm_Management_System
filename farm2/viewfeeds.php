<!DOCTYPE html>
<html>
     <!-- Sweet Alert -->
     

 <?php include "includes/header.php";
 include('database/db_conection.php');
 ?>

 


    <body class="fixed-left">

        <!-- Loader -->
        <!--<div id="preloader">
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
        </div> -->

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
           <?php include "includes/navbar.php";?>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
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
                                    <h4 class="page-title">Farm Reciept Book</h4>
                                    
                                    <div class="clearfix"></div>
                                </div>
							</div>
						</div>
                        <!-- end row -->
                        <div class="row">
                        <div class="col-lg-6"><a href="feedreceipt.php"><button class="btn btn-primary">Add New Reciept</button></a></div>

                        <script type="text/javascript">
                            
                           //swal("Here's a message!")
                        </script>
                        
                        </div>

                        <br>

                        <?php

                         if(isset($_GET['g_id'])){
    $the_reciept_id = $_GET ['g_id'];
    
    // $query = "SELECT * FROM feed_receipt_attendant WHERE feed_receipt_acquisition_ID = '$the_reciept_id'";
     //$select_pigs = mysqli_query($dbcon, $query);
                  
      //$row = mysqli_fetch_array($select_pigs); 
   
         //$Date    = $row[1];
         //$Attendant  = $row[2];
         // $Item    = $row[3];
         // $Quantity = $row[4];
         // $Quantity_After_Grinding   = $row[5];
         // $Total_Quantity_After_Mixing   = $row[6];



     $query2 = "DELETE FROM `feed_receipt_acquisition` WHERE `feed_receipt_acquisition`.`feed_receipt_acquisition_ID`   = '$the_reciept_id' ";
             $result2 = mysqli_query($dbcon , $query2);


         
       if  ( !$result2 ) {
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
           ?>

          <!-- <script>window.open('index.php?message=entered','_self')</script> -->

           <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "Attendant Receipt details deleted Succcessfully!",
                                                                      text: "Thanks for Updating Attendant Receipt details Menu.",
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


          setTimeout(function(){ window.location.href = 'viewfeeds.php' }, 5000);

          </script>

           <?php



        }


       } 

     

       ?>




         
    

    

   

  

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Current Feed Reciepts</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectatt="SELECT * FROM `feed_receipt_attendant`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Date</center></th>
                                                        <th><center>Attendant</center></th>
                                                        <th><center>Edit Details </center></th>
                                                        <th><center>View Details</center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {

                                                 ?>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['feed_receipt_acquisition_ID'],0,1);?></span> 
                                                           
                                                        </th>
                                                        <td>
                                                         <a href="#"><h5 class="m-0"> <?php echo $rw_att['Date']; ?></h5>
                                        
                                                        </td>
                                                        <td><?php echo $rw_att['Attendant']; ?></td>
                                                        <script type="text/javascript">   
                                                        // function doyou(){
                                                        //     swal({
                                                        //       title: "Are you sure?",
                                                        //       text: "This Attendant will be Discontinued from Today!",
                                                        //       type: "warning",
                                                        //       showCancelButton: true,
                                                        //       confirmButtonColor: "#DD6B55",
                                                        //       confirmButtonText: "Yes, Discontinue him!",
                                                        //       cancelButtonText: "No, Give him/her some time!",
                                                        //       closeOnConfirm: false,
                                                        //       closeOnCancel: false
                                                        //     },
                                                        //     function(isConfirm){
                                                        //       if (isConfirm) {
                                                        //        // swal("Fill Form!", "The Attendant will be deleted after Form Submission.", "success");

                                                        //         //swal("Deleted!", "The Activity has been deleted.", "success");


                                                                


                                                        //          swal({
                                                        //               title: "Attendant Discontinuation!",
                                                        //               text: "The Attendant will be Discontinued after Form Submission.",
                                                        //               timer: 5000,
                                                        //               showConfirmButton: false
                                                        //             });
                                                                         


                                                        //          setTimeout(function(){ window.location.href = 'Discontinue.php' }, 5000);


                                                        //       } else {
                                                        //         swal("Cancelled", "The Attendant is safe :)", "error");
                                                        //       }
                                                        //         });
                                                        // }
                                                        

                                                        </script>

                                                        <td><a href ='editreceiptdetails.php?p_id=<?php echo $rw_att['feed_receipt_acquisition_ID']; ?>'><button style="width:100px;" class="btn btn-success">Edit Details</button>
                                                        </td>
                                                        <td><a href ='viewrecieptdetails.php?p_id=<?php echo $rw_att['feed_receipt_acquisition_ID']; ?>'><button style="width:100px;" class="btn btn-primary">View Details</button>
                                                          </td>
                                                       
                                                        
                                                    </tr>
                                                    <?php } ?>
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                            </div>
                        </div>





                        </div>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
     
     document.querySelector('.showcase.sweet button').onclick = function(){
 
};
 </script>



   


            <?php include "includes/footer.php";
 
 ?>

 

        </body>
    </html>