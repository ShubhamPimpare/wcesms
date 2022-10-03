<?php 
   include '../assets/constant/config.php';
   try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   
          // $stmt=$conn->prepare("SELECT * from player where delete_status='0'");
          // $stmt->execute();
          // $record=$stmt->fetchAll();
          }catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage(); exit;
          }
   ?>        
<head>
   <!-- <title>jquery select2 ajax php example</title> -->
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
                     <h1 class="header-title">Add Team Details</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/schcrud.php">
                                 <div class="row">
                                    <br>
                                    <br>
                                    <?php
                                       $stmt = $conn->prepare("SELECT * from school WHERE id=(select max(id) from school)");
                                        $stmt->execute();
                                        $record = $stmt->fetchAll();
                                        foreach($record as $rec)
                                        {
                                       
                                        }
                                        $n=$rec['id']+1;
                                        $l='TEAM00';
                                        $scode=$l."".$n;
                                       ?>

                                   

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Team Name</label>
                                          <input type="text" class="form-control" name="sname" placeholder="Enter Team Name"   required>
                                          <br>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Team Address</label>
                                          <input type="text" class="form-control "  name="saddress" placeholder="Enter Team Address" required>
                                       </div>
                                    </div>
                                    
                                    <!-- <div class="col-md-6">
                                       <div class="form-group">
                                           <label class="control-label">School State</label>
                                           <input type="text" class="form-control"  pattern="^[a-zA-Z ]+$"  name="sstate" placeholder="Enter School State">
                                       </div>
                                       </div> -->
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Teams State</label>
                                          <select class=" xyz form-control form-control-lg "name="school_state" class="xyz">
                                             <option>----Select Team State----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from state WHERE delete_status=0 ");
                                                      $stmt->execute();
                                                      $record1=$stmt->fetchAll();           
                                                
                                                          
                                                           ?>
                                             <?php foreach($record1 as $rec){?>
                                             <option></option>
                                             <option value="<?php echo $rec['school_state'];?>">
                                                <?php echo $rec['school_state'];?> 
                                             </option>
                                             <?php }?>
                                          </select>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Team Level</label>
                                          <input type="text" class="form-control"    name="sgrade" placeholder="Enter Team Level"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Email</label>
                                          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  name="email" placeholder="Enter Email"required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Academic Year</label>
                                          <input type="text" class="form-control"   name="ay" placeholder="Enter Academic Year"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Sport Name</label>
                                          <select class=" xyz form-control form-control-lg "name="sportname" class="xyz">
                                             <option>----Select Sport Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from sportdetails where delete_status='0' ");
                                                      $stmt->execute();
                                                      $record1=$stmt->fetchAll();           
                                                
                                                          
                                                           ?>
                                             <?php foreach($record1 as $rec){?>
                                            
                                             <option value="<?php echo $rec['name'];?>">
                                                <?php echo $rec['name'];?> 
                                             </option>
                                             <?php }?>
                                          </select>
                                       </div>
                                    </div>
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
   