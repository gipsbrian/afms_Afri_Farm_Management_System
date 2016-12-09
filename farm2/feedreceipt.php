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
                                    <h4 class="page-title">Feeds Receipt Form </h4>
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
                                                <form action="" method="post" data-parsley-validate novalidate >

                                                  
                                                    <div class="form-group">
                                                    <label for="date">Date of Receipt<span class="text-danger">*</span></label>
                                                        <div>
                                                        <div class="input-group">
                                                        
                                                        <input type="text" name="date" class="form-control" placeholder="mm/dd/yyyy" id="datepicker-autoclose" required="" placeholder="Enter date of employment Start" parsley-trigger="change">
                                                        <span class="input-group-addon bg-custom b-0"><i class="mdi mdi-calendar text-white"></i></span>
                                                        </div>
                                                    </div><!-- input-group -->
                                                    </div>
                                                    

                                                    <div class="form-group">
                                                        <label for="Full_Names">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Verifier">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `attendant`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[1]; ?>" parsley-trigger="change" required><?php echo $rw[1]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>

 <div class="panel panel-color panel-info">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">Select Item(s)</h3>
                                    </div> 


<div class="panel-body">
     <div class="table-responsive">
      <table class="table table table-hover m-0">
        <thead>

        <tr>
            <th>SELECT</th>
            <th>ITEM</th>
            <th>QUANTITY</th>
            
   
        </tr>
        </thead>
    <?php
        $view_users_query="SELECT * from feeds_received";//select query for viewing users.
        $run=mysqli_query($dbcon,$view_users_query);//here run the sql query.

        ?>

         <script>
                   // var sum;
                    function writeTo(object,count){

                          if(object.checked)
                          {
                            var feedsValue='feedsValue'+count;
                            var itemValue= document.getElementById('item'+count).innerHTML;
                            //alert(itemValue);
                            var stringConct=document.getElementById('numberOfFeeds'+count).value=itemValue;

                            var totalItems=document.getElementById('totalFeedItems');

                            var sum= totalItems.value=""+stringConct;
                               /* 
                                var theForm=document.forms["itemform"];
                                //
                                var selectedBox=theForm.elements["quantity"];


                                 for(var i = 0; i < selectedBox.length; i++)
                                  {
        
                                  if(selectedBox[i].checked)
                                     {
           
                                      var totalQuatity = selectedBox[i].value;

                                     }
                                  }*/
                               
                                
                            
                              object.onchange= function() {
                              document.getElementById(feedsValue).disabled = !this.checked;
                              document.getElementById('feeditems').value= document.getElementById(feedsValue).value;
                          };
  
                          }

                          else
                          {

                            var feedsValue='feedsValue'+count;
                            document.getElementById('numberOfFeeds'+count).value="";
                      
                            document.getElementById(feedsValue).value= "";
                   
                          }
                          }

                         function sumUp(count)
                             {
                              var totalQuatity=0;
                                var theForm=document.forms["itemform"];
                         
                                var selectedBox=theForm.elements["quantity"];


                                 for(var i = 0; i < selectedBox.length; i++)
                                  {
        
                                  if(selectedBox[i].checked)
                                     {
           
                                      totalQuatity = document.getElementById('feedsValue'+count).value;
                                      alert(totalQuatity);
            
                              
                                     }
                                  }
                               
                    }

                    
            </script>

      
      <tbody>
     
                <form action="" id="itemform" onsubmit="return false;">

                  <?php  
                  $count=0;while ( $row= mysqli_fetch_array($run)) { 
                    $count++;
                 ?>
                   <tr>
                   
                   <td>
                      <?php echo '<input id="checkbox'.$count.'" type="checkBox" onclick="return writeTo(this,'.$count.')" >'; ?> 
                   </td>  
                    <td><?php echo'<h5 id="item'.$count.'">' .$row['Name_Of_Feeds_Received']. '</h5>'; ?></td>
                    <td>
                    <?php echo '<input type="number"  name="quantity" parsley-trigger="change" required
                          class="form-control" placeholder="quantity" onkeyup="sumUp(this)" id="feedsValue'.$count.'" disabled>'; ?>

                      </td>
                  
                   <td><?php echo'<input id="numberOfFeeds'.$count.'" type="hidden "/>'; ?></td>
                   
                  <?php
                    } ?>

                          </tr>  
                 </form> 

                  </tbody>
      
      
    </table>
    </div>
      </div> 
      </div>
                      

                                                    <div class="form-group">
                                                        <label for="quantity">Quantity of Feeds <span class="text-danger">*</span></label>
                                                        <input type="number" name="quantity" parsley-trigger="change" required
                                                               placeholder="Quantity of Feeds" class="form-control" id="total" />

                                                               <!--START OF HIDDEN TO HOLD THE INPUT-->
                                                                <input  name="quantity" 
                                                               placeholder="Quantity of Feeds" class="form-control" value="" type = "text" id="totalFeedItems" />
                                                               
                                                               <!--END OF HIDDEN TO HOLD THE INPUT-->
                                                        
                                                    </div>


                                                    <div class="form-group text-right m-b-0">
                                                        <button name="submit" class="btn btn-primary waves-effect waves-light" type="submit">
                                                            Submit
                                                        </button>
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

  

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


<?php
  
    
    if(isset($_POST['submit']))
    {
       $message = "Data Save In Database";
       

         $date  = $_POST['date'];
        $Full_Names = $_POST['Full_Names'];
        $items = $_POST['item'];
        $quantity = $_POST['quantity'];
        $quantityaftergrinding = $_POST['quantityaftergrinding'];
        $quantityaftermixing = $_POST['quantityaftermixing'];
        
  
        
        $query = "INSERT INTO `farm2`.`feed_receipt_acquisition` (`feed_receipt_acquisition_ID`, `Date`, `Attendant`, `Item`, `Quantity`, `Quantity_After_Grinding`, `Total_Quantity_After_Mixing`) VALUES (NULL, '$date', '$Full_Names', '$item', '$quantity', '$quantityaftergrinding', '$quantityaftermixing')" or die(mysqli_error($dbcon));
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

          <!-- <script>window.open('index.php?message=entered','_self')</script> -->

           <script type="text/javascript">   
                                                        function doyou2(){
                                                            

                                                                swal({
                                                                      title: "Feeds inserted Succcessfully!",
                                                                      text: "Thanks for Updating Feeds Menu.",
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
<?php include "includes/footer.php";?>

    </body>
</html>





