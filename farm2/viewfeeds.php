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
                                    <h4 class="page-title">Farm Reciept Details</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Zircos</a>
                                        </li>
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Dashboard
                                        </li>
                                    </ol>
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

                        <div class="row text-center">
                            <div class="col-lg-12">
                                <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Current Feed Reciept</h3>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table table-hover m-0">
                                            <?php
                                                            $selectatt="SELECT * FROM `feed_receipt_acquisition`";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <th><center>Item</center></th>
                                                        <th><center>Attendant</center></th>
                                                        
                                                        <th><center>Quantity</center></th>
                                                        <th><center>Quantity After Grinding</center></th>
                                                        <th><center>Quantity After Mixing</center></th>
                                                        <th><center>Date</center></th>
                                                        <th><center></center></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  
                                                 while ( $rw_att= mysqli_fetch_array($sel_att)) {
                                                     # code...
                                                 

                                                 ?>
                                                    <tr>
                                                        <th>
                                                            <span class="avatar-sm-box bg-success"><?php echo substr($rw_att['feed_receipt_acquisition_ID'],0,1);?></span> 
                                                           
                                                        </th>
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Item']; ?></h5>
                                                           <!--  <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Attendant']; ?></small></p></a> -->
                                                        </td>
                                                        <td><?php echo $rw_att['Attendant']; ?></td>
                                                        <td><?php echo $rw_att['Quantity']; ?></td>
                                                        <td><?php echo $rw_att['Quantity_After_Grinding']; ?></td>
                                                        <td><?php echo $rw_att['Total_Quantity_After_Mixing']; ?></td>
                                                      <!--   <td><?php echo $rw_att['Residence']; ?></td> -->
                                                        <td><?php echo $rw_att['Date']; ?></td>
                                                        <!-- <td ><button style="width:50px;" class="btn btn-info">Edit </button></td>
                                                        <td><button style="width:100px;" class="btn btn-danger" onclick="doyou() ">Discontinue</button></td>
 -->
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

                                                        <td><a href =''><button style="width:100px;" class="btn btn-success">Full Details</button></td>
                                                       
                                                        
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