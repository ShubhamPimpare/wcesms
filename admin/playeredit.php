<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
      $stmt = $conn->prepare("SELECT * from player WHERE id='".$_GET['id']."'");
      
     $stmt->execute();
              $record1 = $stmt->fetchAll();
              foreach($record1 as $res1){}
              //echo print_r($record1);exit;
    }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage(); exit;
    }
   ?>
<?php include("header.php");?>
<?php include("sidepanel.php");?>
<!DOCTYPE html>
<html>
   <head>
    <!--   <title>jquery select2 ajax php example</title> -->
      <script src="../assets/js/sample.js"></script>
      <link href="../assets/css/select2.css" rel="stylesheet" />
      <script src="../assets/js/select2.js"></script>
   </head>
   <!-- <head>
      <title>Sport details CRUD Operations</title>
      </head> -->
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="page-header">
                  <h1 class="header-title">Update Player Details</h1>
                  <br><br>

                  <form method="POST" action="app/playercrud.php">
                     <div class="card">
                        <div class="card-body">
                           <div class="row">
 
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">ID</label>
                                    <input type="text" class="form-control" name="id"  value="<?php echo $res1['id']; ?>" readonly>
                                 </div>
                              </div>
                               
                              

                             
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> First Name</label>
                                    <input type="text" class="form-control"  name="fname" value="<?php echo $res1['fname']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Middle Name</label>
                                    <input type="text" class="form-control"  name="mname" value="<?php echo $res1['mname']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Last Name</label>
                                    <input type="text" class="form-control"  name="lname" value="<?php echo $res1['lname']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Age</label>
                                    <input type="text" class="form-control" pattern="^[0-9 ]+$" name="page"  value="<?php echo $res1['page']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Player Course</label>
                                    <br>
                                    <select class="form-control form-control-lg" name="pcourse" class=xyz>
                                       <!-- <option> </option> -->
                                       <option <?php if($res1['pcourse']=="CSE") { echo "selected" ; }  ?>>CSE</option>
                                       <option <?php if($res1['pcourse']=="IT") { echo "selected" ; }  ?>>IT</option>
                                       <option <?php if($res1['pcourse']=="ELECTRICAL") { echo "selected" ; }  ?>>ELECTRICAL</option>
                                       <option <?php if($res1['pcourse']=="ELECTRONICS") { echo "selected" ; }  ?>>ELECTRONICS</option>
                                       <option <?php if($res1['pcourse']=="MECHANICAL") { echo "selected" ; }  ?>>MECHANICAL</option>
                                       <option <?php if($res1['pcourse']=="CIVIL") { echo "selected" ; }  ?>>CIVIL</option>
                                    </select>
                                 </div>
                              </div>

                        

                                    <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Player Year</label>
                                    <br>
                                    <select class="form-control form-control-lg" name="pyear" class=xyz>
                                       <!-- <option> </option> -->
                                       <option <?php if($res1['pyear']=="FY") { echo "selected" ; }  ?>>FY</option>
                                       <option <?php if($res1['pyear']=="SY") { echo "selected" ; }  ?>>SY</option>
                                       <option <?php if($res1['pyear']=="TY") { echo "selected" ; }  ?>>TY</option>
                                       <option <?php if($res1['pyear']=="BTECH") { echo "selected" ; }  ?>>BTECH</option>
                                    </select>
                                 </div>
                              </div>

                     

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Address</label>
                                    <input type="text" class="form-control"  name="padd"  value="<?php echo $res1['padd']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Gender</label>
                                    <br>
                                    <select class="form-control form-control-lg" name="gender" class=xyz>
                                       <!-- <option> </option> -->
                                       <option <?php if($res1['gender']=="Male") { echo "selected" ; }  ?>>Male</option>
                                       <option <?php if($res1['gender']=="Female") { echo "selected" ; }  ?>>Female</option>
                                       <option <?php if($res1['gender']=="Other") { echo "selected" ; }  ?>>Other</option>
                                    </select>
                                 </div>
                              </div>


                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Contact</label>
                                    <input type="text" class="form-control" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$" name="contact" value="<?php echo $res1['contact']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" name="email"  value="<?php echo $res1['email']; ?>" required>
                                 </div>
                              </div>


                              <div class="col-md-6">
                                 <div class="form-group">Player Achievements</label>
                                    <input type="text" class="form-control" name="pa" placeholder="Enter Player Achievements If Any!" value="<?php echo $res1['pa']; ?>">
                                 </div>
                              </div>


                              <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Sport Name</label>
                                          <select class="xyz form-control form-control-lg "name="sportname" class="xyz form-group">
                                             <option>----Select Sport Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from sportdetails where delete_status='0'");
                                                $stmt->execute();
                                                $record2=$stmt->fetchAll();
                                                ?>
                                             <?php foreach($record2 as $rec){?>


                                            
                                            <option value="<?php echo $rec['name'];?>" <?php if($res1['sportname']==$rec['name']){echo 'selected';}?>>


                                                    <?php echo $rec['name'];?>  
                                            </option>
                                                <?php }?>
                                          </select>
                                       </div>
                                    </div>
                              
                               <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Team Name</label>
                                          <select class="xyz form-control form-control-lg "name="school" class="xyz form-group">
                                             <option>----Select Team Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from school where delete_status='0'");
                                                $stmt->execute();
                                                $record=$stmt->fetchAll();
                                                ?>
                                             <?php foreach($record as $rec){?>


                                            <option>  </option>
                                            <option value="<?php echo $rec['sname'];?>" <?php if($res1['school']==$rec['sname']){echo 'selected';}?>>


                                                    <?php echo $rec['sname'];?>  
                                            </option>
                                                <?php }?>
                                          </select>
                                       </div>
                                    </div> 

                                    
                            

                              

                              
                                  
                             

                              
                           </div>
                           <br>
                           <br>
                           <br>
                           <button name="update" class="btn btn-success btn-lg">UPDATE</button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<script type="text/javascript">
   $('.xyz').select2({
          });
</script>
<?php
   include("footer.php");
   ?>

                        