<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $stmt = $conn->prepare("SELECT * from school WHERE id='".$_GET['id']."'");
        
         $stmt->execute();
              $record1 = $stmt->fetchAll();
              foreach($record1 as $res1){}
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
<!DOCTYPE html>
<html>
   <head>
      <title>School CRUD Operations</title>
   </head>
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="page-header">
                  <h1 class="header-title">Update Team Details</h1>
                  <br><br>
                  <form method="POST" action="app/schcrud.php">
                     <div class="card">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Id</label>
                                    <input type="text" class="form-control" name="id"  value="<?php echo $res1['id']; ?>" readonly>
                                 </div>
                              </div>

                             

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Team Name</label>
                                    <input type="text" class="form-control" name="sname" placeholder="Enter Team Name" value="<?php echo $res1['sname']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Team Address</label>
                                    <input type="text" class="form-control"   name="saddress" placeholder="Enter Team Address" value="<?php echo $res1['saddress']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Team State</label>
                                    <select class=" xyz form-control form-control-lg "name="school_state" class="xyz">
                                       <option>----Select Team State----</option>
                                       <?php
                                          $stmt=$conn->prepare("SELECT * from state WHERE delete_status=0 ");
                                                $stmt->execute();
                                                $record1=$stmt->fetchAll();           
                                          
                                                    
                                                     ?>
                                       <?php foreach($record1 as $rec1){?>
                                       <option>    </option>
                                       <option value="<?php echo $rec1['school_state'];?>" <?php if($res1['school_state']==$rec1['school_state']){echo 'selected';}?>>
                                          <?php echo $rec1['school_state'];?>  
                                       </option>
                                       <?php }?>
                                    </select>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Team Level</label>
                                    <input type="text" class="form-control" name="sgrade" placeholder="Enter Team Level" value="<?php echo $res1['sgrade']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Email</label>
                                    <input type="text" class="form-control" name="email"  value="<?php echo $res1['email']; ?>">
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Academic Year</label>
                                    <input type="text" class="form-control" name="ay"  value="<?php echo $res1['ay']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sport Name</label><br>
                                        <select class=" xyz form-control form-control-lg "name="sportname" class="xyz">
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from sportdetails where delete_status='0'");
                                            $stmt->execute();
                                            $record=$stmt->fetchAll();
                                            ?>
                                         


                                          <!--      <option> </option>   -->
                                            <?php foreach($record as $rec){?>


                                            <option>  </option>
                                            <option value="<?php echo $rec['name'];?>" <?php if($res1['sportname']==$rec['name']){echo 'selected';}?>>


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
                           <button name="btnupdate" class="btn btn-success btn-lg">UPDATE</button>
                        </div>
                     </div>
                  </form>
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
      <?php
         include("footer.php");
         ?>
  