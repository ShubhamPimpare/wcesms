<?php include '../assets/constant/config.php';
   try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
              
          }catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage(); exit;
          }
   ?>
<head>
   <!--  <title>jquery select2 ajax php example</title> -->
   <script src="../assets/js/sample.js"></script>
   <link href="../assets/css/select2.css" rel="stylesheet" />
   <script src="../assets/js/select2.js"></script>
</head>
<?php include("header.php");?>
<?php include("sidepanel.php");?>
<html>
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="card">
                  <div class="card-body">
                     <h1 class="header-title">Add Player Details</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/playercrud.php">
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from player WHERE id=(select max(id) from player)");
                                     $stmt->execute();
                                     $record = $stmt->fetchAll();
                                     foreach($record as $rec)
                                     {
                                    
                                     }
                                     $n=$rec['id']+1;
                                     $l='PLYR-0';
                                     $playercode=$l."".$n;
                                    ?>
                                
                                 <br>
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">First Name</label>
                                          <input type="text" class="form-control" name="fname" placeholder="Enter Player's First Name" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Middle Name</label>
                                          <input type="text" class="form-control" name="mname" placeholder="Enter Player's Middle Name" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Last Name</label>
                                          <input type="text" class="form-control" name="lname" placeholder="Enter Player's Last Name" required>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Player Age</label>
                                          <input type="text" class="form-control" pattern="^[0-9 ]+$" name="page" placeholder="Enter Player Age" required>
                                       </div>
                                    </div>
                                    <br>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Player Branch</label>
                                          <select  class="xyz form-control form-control-lg "name="pcourse" class=xyz>
                                             <option> ---Select Your Branch---</option>
                                            
                                             <option>DEGREE CSE   </option>
                                             <option>DEGREE IT </option>
                                             <option>DEGREE ELECTRICAL  </option>
                                             <option>DEGREE ELECTRONICS  </option>
                                             <option>DEGREE MECHANICAL  </option>
                                             <option>DEGREE CIVIL  </option>
                                             <option>DIPLOMA ELECTRICAL   </option>
                                             <option>DIPLOMA ELECTRONICS </option>
                                             <option>DIPLOMA MECHANICAL  </option>
                                             <option>DIPLOMA CIVIL  </option>
                                             <option>OTHER  </option>
                                          </select>
                                       </div>
                                    </div>
                                    <br>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Player Year</label>
                                          <select  class="xyz form-control form-control-lg "name="pyear" class=xyz>
                                             <option> ---Select Year---</option>
                                             <option>       </option>
                                             <option>FY   </option>
                                             <option>SY </option>
                                             <option>TY  </option>
                                             <option>BTECH  </option>
                           
                                          </select>
                                       </div>
                                    </div>
                                    <br>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Player Address</label>
                                          <input type="text" class="form-control"  name="padd" placeholder="Enter the Player Address" required>
                                       </div>
                                    </div>
                                    <br>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Gender</label>
                                          <select  class="xyz form-control form-control-lg "name="gender" class=xyz>
                                             <option> ---Select Gender---</option>
                                             <option>       </option>
                                             <option>Male   </option>
                                             <option>Female </option>
                                             <option>Other  </option>
                                          </select>
                                       </div>
                                    </div>
                                    <br>
                                    <br>
                                     <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact</label>
                                          <input type="text" class="form-control" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$"  name="contact" placeholder="Enter Contact Number"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Email</label>
                                          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  name="email" placeholder="Enter Email" required>
                                       </div>
                                    </div>

                                 

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Player Achievements</label>
                                          <input type="text" class="form-control" name="pa" placeholder="Enter Player Achievements If Any" >
                                       </div>
                                    </div>

                                    <br>
                                    <br>

                                   <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Sport Name</label>
                                          <select class="xyz form-control form-control-lg "name="sportname" class="xyz form-group">
                                             <option>----Select Sport Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from sportdetails where delete_status='0'");
                                                $stmt->execute();
                                                $record1=$stmt->fetchAll();
                                                ?>
                                             <?php foreach($record1 as $rec){?>
                                             <option></option>
                                             <option value="<?php echo $rec['name'];?>">
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
                                                $record1=$stmt->fetchAll();
                                                ?>
                                             <?php foreach($record1 as $rec){?>
                                             <option></option>
                                             <option value="<?php echo $rec['sname'];?>">
                                                <?php echo $rec['sname'];?>
                                             </option>
                                             <?php }?>
                                          </select>
                                       </div>
                                    </div>




                                   

                                    <br>
                                    <br>

                                    


                                    <br>
                                    <br>
                                   
                                 </div>
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                 <button name="submit"class="btn btn-success btn-lg">Submit</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script type="text/javascript">
         $('.xyz').select2({
                });
      </script>
   </body>
</html>
<?php include("footer.php");?>

