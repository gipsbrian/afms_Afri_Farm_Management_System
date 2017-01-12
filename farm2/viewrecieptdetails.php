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
  
    
    if(isset($_GET['p_id'])){
	$the_reciept_id = $_GET ['p_id'];
	
	 $query = "SELECT * FROM feed_receipt_attendant WHERE feed_receipt_acquisition_ID = '$the_reciept_id'";
	 $select_pigs = mysqli_query($dbcon, $query);
				  
      $row = mysqli_fetch_array($select_pigs); 
   
         $Date    = $row[1];
         $Attendant  = $row[2];
         // $Item    = $row[3];
         // $Quantity = $row[4];
         // $Quantity_After_Grinding   = $row[5];
         // $Total_Quantity_After_Mixing   = $row[6];

         
    

       if (isset($_POST['update_pig'])){
               
			     $post_birth= $_POST['pig_birth'];
			     $post_weaning = $_POST['pig_weaning'];
				 $post_breed = $_POST['pig_breed'];
			     $post_location= $POST['pig_location'];
			     $post_gender= $_POST['pig_gender'];
          
		  $query = "UPDATE animal SET";
				$query .= "pig_birth = '{$post_birth}', ";
				$query .= "pig_weaning = '{$post_weaning}', ";
				$query .= "pig_breed = '{$post_breed}'";
				$query .= "pig_ location= '{$post_location}', ";
				$query .= "pig_gender = '{$post_gender}', ";
	
				
				$update_post = mysqli_query($dbcon, $query);
	   }

   }
     //confirmQuery($update_pig);
           ?>

                        <div class="row">
							<div class="col-xs-12">
								<div class="page-title-box">
                                    <h4 class="page-title" style="margin-left: 40%;">View _  <?php echo $Attendant; ?> _ Reciept details </h4>
                                   
                                    <div class="clearfix"></div>
                                </div>
								 <!-- <div class="p-20"> -->
                                              <!--  <form class="form-horizontal " action="" method = "post">
                                                    <div class="form-group">
                                                        <label>Receipt ID</label>
                                                        <input value="<?php echo $the_reciept_id; ?>" type = "text" class="form-control" disabled />
                                                        <input value="<?php echo $the_reciept_id; ?>" type = "hidden" class="form-control"  name="p_id" />

                                                    </div>


                                                <div class="form-group">
                                                        <label for="dobe">Date of Receipt<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $Date; ?>" name="date" type = "text" class="form-control" disabled>
                                                    </div>

                                                <div class="form-group">
                                                        <label for="emailAddress">Attendant Name<span class="text-danger">*</span></label>
                                                        <input value="<?php echo $Attendant; ?>" name="Full_Names" type = "text" class="form-control" disabled>
                                                    </div> -->
												<!--  <div class="form-group">
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
                                                    </div> -->
<!-- 
                                                <div class="form-group">
                                                        <label for="item">Item(s) <span class="text-danger">*</span></label>
                                                        <input type="Text" name="item" parsley-trigger="change" required
                                                               placeholder="Items Being Received" class="form-control" id="dob">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="quantity">Quantity of Feeds <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="quantity">
                                                        
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="quantityaftergrinding">Quantity of Feeds Afer Grinding <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantityaftergrinding" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="qag">
                                                        
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="quantityaftermixing">Total Quantity after Mixing <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantityaftermixing" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="tqm">
                                                        
                                                    </div>

                                                     <br >
                                                <br >
                                                <hr >

                                                    <div class="form-group text-right m-b-0">

                                                    <div style="text-align: center; ">
                                                     <button name="submit" class="btn btn-primary" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>

                                                    </div>
                                                       
                                                    </div> -->

                                                <!-- </form> -->



                                               

                                                        <!-- <div style="text-align: center; ">
                                                     <button name="submit" class="btn btn-primary" type="submit">
                                                            Submit
                                                        </button>
                                                        <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button>

                                                    </div> -->
                                                 
                                                       <!--  <div>
                                                           
                                                             <?php echo '<a class="btn btn-danger" href="deletePig.php?id='.$the_pig_id.'">Discontinue Pig</a>'; ?>

                                                        </div> -->

                                                        
                                                    

                                           <!--  </div> -->

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
                                                            $selectatt="SELECT * FROM `feed_receipt_acquisition` WHERE Attendant = '$Attendant'";
                                                            $sel_att=mysqli_query($dbcon,$selectatt);
                                                            
                                                            ?>
                                                <thead>
                                                    <tr>
                                                        <th></th>
                                                        <!-- <th><center>Item</center></th> -->
                                                        <th><center>Date</center></th>
                                                        <!-- <th><center>Attendant</center></th> -->
                                                        <th><center>Item</center></th>
                                                        
                                                        <th><center>Quantity</center></th>
                                                        <th><center>Quantity After Grinding</center></th>
                                                        <th><center>Quantity After Mixing</center></th>
                                                        
                                                        <th><center></center></th>
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
                                                            <span class="avatar-sm-box bg-success"><?php echo $rw_att['feed_receipt_acquisition_ID'];?></span> 
                                                           
                                                        </th>
                                                        <td>
                                                            <a href="#"><h5 class="m-0"> <?php echo $rw_att['Date']; ?></h5>
                                                           <!--  <p class="m-0 text-muted font-13"><small><?php echo $rw_att['Attendant']; ?></small></p></a> -->
                                                        </td>
                                                        <!-- <td><?php echo $rw_att['Attendant']; ?></td> -->
                                                        <td><?php echo $rw_att['Item']; ?></td>

                                                        <td><?php echo $rw_att['Quantity']; ?></td>
                                                        <td><?php echo $rw_att['Quantity_After_Grinding']; ?></td>
                                                        <td><?php echo $rw_att['Total_Quantity_After_Mixing']; ?></td>
                                                      <!--   <td><?php echo $rw_att['Residence']; ?></td> -->
                                                        <!-- <td><?php echo $rw_att['Date']; ?></td> -->
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

                                                      //  "DELETE FROM `feed_receipt_acquisition` WHERE `feed_receipt_acquisition`.`feed_receipt_acquisition_ID` = 14"
                                                        

                                                        </script>

                                                        <!-- <td><a href ='editreceiptdetails.php?p_id=<?php echo $rw_att['feed_receipt_acquisition_ID']; ?>'><button style="width:100px;" class="btn btn-danger">Delete Item</button>
                                                        </td> -->
                                                        <!-- <td><a href ='viewrecieptdetails.php?p_id=<?php echo $rw_att['feed_receipt_acquisition_ID']; ?>'><button style="width:100px;" class="btn btn-primary">View Details</button>
                                                        </td> -->
                                                      
              <td><a href ='viewfeeds.php?g_id=<?php echo $rw_att['feed_receipt_acquisition_ID']; ?>'><button style="width:100px;" class="btn btn-danger" type="submit" name="submit">Delete Item</button></td>
                                                        


                                                       <?php
                                                       // $loc1 = $rw_att['feed_receipt_acquisition_ID'];

                                                      }

                                                        if(isset($_POST['submit']))
                                                    {

                                                     

                                                       


         $query2 = "DELETE FROM `feed_receipt_acquisition` WHERE `feed_receipt_acquisition`.`feed_receipt_acquisition_ID`   = $loc1 ";
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



         

          



        

                                                      


                                                             
                                                        

                                                      
                                                    
                                                        
                                                    </tr>

                                                    
                                                    
                                                </tbody>
                                            </table>

                                        </div> <!-- table-responsive -->
                                    </div>
                                </div> <!-- end panel -->

                                <br >
                                <br >

                                <hr >


                                <div class="form-group text-right m-b-0">

                                                    <div style="text-align: center; ">
                                                        <form action="printreceipt.php" method="post">
                                                     <button name="submit" class="btn btn-primary" type="submit">
                                                            View Attendant Reciept
                                                        </button>
                                                    </form>
                                                        <!-- <button type="reset" class="btn btn-default waves-effect m-l-5">
                                                            Cancel
                                                        </button> -->

                                                    </div>
                                                       
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

 $date  = $Date;
        $Full_Names = $Attendant;

  






    if(isset($_POST['submit1']))
    {
       $message = "Data Save In Database";
       

       
        $item = $_POST['item'];
        $quantity = $_POST['quantity'];
        $quantityaftergrinding = $_POST['quantityaftergrinding'];
        $quantityaftermixing = $_POST['quantityaftermixing'];
        
       
       
    
       
         //$query = "INSERT INTO `feeds_receipt_acquisition`( 'Date', `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`,`Total_Quantity_After_Mixing`) VALUES ('$date','$Full_Names','$item','$quantity','$quantityaftergrinding','$quantityaftermixing')" or die(mysqli_error($dbcon));
        
        $query = "INSERT INTO `farm2`.`feed_receipt_acquisition` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`, `Total_Quantity_After_Mixing`) VALUES (NULL, '$date', '$Full_Names', '$item', '$quantity', '$quantityaftergrinding', '$quantityaftermixing')" or die(mysqli_error($dbcon));

         // $query = "INSERT INTO `farm2`.`feed_receipt_attendant` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`) VALUES (NULL, '$date', '$Full_Names')" or die(mysqli_error($dbcon));
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

          <!-- <script>window.open('index.php?message=entered','_self')</script> -->

           <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "Attendant Receipt details inserted Succcessfully!",
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
  
    
    //if(isset($_POST['submit']))
    /*
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



       //}


  ?>
 <?php include "includes/footer.php"; ?>
    </body>
</html>