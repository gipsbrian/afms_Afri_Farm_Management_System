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
                                    <h4 class="page-title">Egg Sales Form </h4>
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
                                                        <label for="date">Date_Of_Collection <span class="text-danger">*</span></label>
                                                        <input type="date" name="date" parsley-trigger="change" required
                                                               placeholder="Enter date of sale" class="form-control" id="=date">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="time">Time of Sale <span class="text-danger">*</span></label>
                                                        <input type="time" name="time" parsley-trigger="change" required
                                                               placeholder="Enter time of sale" class="form-control" id="=time">
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="hens">Num_Of_Laying_Hens<span class="text-danger">*</span></label>
                                                        <input type="number" name="hens" parsley-trigger="change" required
                                                               placeholder="Enter number of Laying Hens" class="form-control" id="=hens">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="cocks">Num_Of_Cocks <span class="text-danger">*</span></label>
                                                        <input type="number" name="cocks" parsley-trigger="change" required
                                                               placeholder="Enter number of cocks sold" class="form-control" id="=cocks">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="eggs">Num_Of_Eggs_Collected <span class="text-danger">*</span></label>
                                                        <input type="number" name="eggs" parsley-trigger="change" required
                                                               placeholder="Enter number of eggs collected" class="form-control" id="=eggs">
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="damages">Num_Of_Eggs_Damaged <span class="text-danger">*</span></label>
                                                        <input type="number" name="damages" parsley-trigger="change" required
                                                               placeholder="Enter number of eggs damaged" class="form-control" id="=damages">
                                                    </div>

                                                    

                                                    <div class="form-group">
                                                        <label for="Full_Names">Verifier<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Verifier" class="form-control" placeholder="Name of Verifier">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `attendant`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="Full_Names">Attendant<span class="text-danger">*</span></label>
                                                        
                                                        <select name="Full_Names" class="form-control" placeholder="Name of Attendant">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `attendant`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>


                                                    <div class="form-group">
                                                        <label for="cage">Cage ID<span class="text-danger">*</span></label>
                                                        
                                                        <select name="cage" class="form-control" placeholder="Cage ID">
                                                        <option></option>
                                                            <?php
                                                            $select="SELECT * FROM `chicken_storage`";
                                                            $sel_query=mysqli_query($dbcon,$select);
                                                            while ($rw=mysqli_fetch_array($sel_query)) {
                                                                ?>
                                                                <option value="<?php echo $rw[0]; ?>" parsley-trigger="change" required><?php echo $rw[0]; ?></option>

                                                        <?php
                                                            }
                                                            ?>

                                                        </select>
                                                    </div>



                                                    <!-- <div class="form-group">
                                                        <label for="cage">Cage ID <span class="text-danger">*</span></label>
                                                        <input type="Number" name="cage" parsley-trigger="change" required
                                                               placeholder="Cage ID" class="form-control" id="cage">
                                                    </div> -->

                                                    

                                                    

                                                    
                                                    
                                                   
                            
                                                    

                                                   

                                                   

                                                    

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
        $time  = $_POST['time'];
        $hens  = $_POST['hens'];
        $cocks  = $_POST['cocks'];
        $eggs  = $_POST['eggs'];
        $damages = $_POST['damages'];
        $Verifier = $_POST['Verifier'];
        $Full_Names = $_POST['Full_Names'];
        $cage = $_POST['cage'];
        
        
       
       
    
        $query = "INSERT INTO `undersco_farm2`.`egg_collection_tracker` (`Date_Of_Collection`, `Time`, `Num_Of_Laying_Hens`, `Num_Of_Cocks`, `Num_Of_Eggs_Collected`, `Num_Of_Damaged_Eggs`, `Verified_By`, `Attendant_ID`, `Cage_ID`) VALUES ('$date', '$time', '$hens', '$cocks', '$eggs', '$damages', '$Verifier', '$Full_Names', '$cage')" or die(mysqli_error($dbcon));
         
         $result = mysqli_query($dbcon , $query);
       if  (!$result){
          die ('QUERY FAILED' . mysqli_error($dbcon));
       }else{
          ?>

          <script>window.open('index.php?message=entered','_self')</script>

          <?php



        }


       }


    
  ?>
<?php include "includes/footer.php";?>

    </body>
</html>
