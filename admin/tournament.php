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
                     <h1 class="header-title">Add Tournament Details</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/tournamentcrud.php">
                                 <div class="row">
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournament Name</label>
                                          <input type="text" class="form-control" name="tname" placeholder="Enter Tournament Name" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournament Type</label>
                                          <input type="text" class="form-control"  name="ttype" placeholder="Enter Tournament Type" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Sport Name</label>
                                          <select class=" xyz form-control form-control-lg "name="sport" class="xyz">
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
                                    
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Staff Advisor Name</label>
                                          <select class="xyz form-control form-control-lg " name="name" class="xyz form-group">
                                             <option>----Select Staff Advisor Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from facilitator where delete_status='0'");
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
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Physical Director Name</label>
                                          <select class="xyz form-control form-control-lg " name="pname" class="xyz form-group">
                                             <option>----Select Physical Director Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from physicaldirector where delete_status='0'");
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
                                          <label class="control-label">Tournamnet Venue</label>
                                          <input type="text" class="form-control" name="venue" placeholder="Enter Tournament Venue" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournamnet Date</label>
                                          <input type="date" class="form-control" name="date" placeholder="Enter Tournament Date" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournament Start Time</label>
                                          <input type="time" class="form-control" name="stime" placeholder="Enter Tournament Start Time" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournament End Time</label>
                                          <input type="time" class="form-control"   name="etime" placeholder="Enter Tournament End Time" >
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Tournament Status</label>
                                          <input type="text" class="form-control"  name="status" placeholder="Enter Tournament Status" >
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Academic Year</label>
                                          <input type="text" class="form-control"   name="ay" placeholder="Enter Academic Year"required>
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