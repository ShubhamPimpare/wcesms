<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
        $stmt = $conn->prepare("SELECT * from sportdetails WHERE id='".$_GET['id']."'");
       $stmt->execute();
              $record1 = $stmt->fetchAll();
              foreach($record1 as $res1){}
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
      <!--  <title>jquery select2 ajax php example</title> -->
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
                  <h1 class="header-title">Update Sport Details</h1>
                  <br><br>
                  <form method="POST" action="app/sportdetailscrud.php">
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
                                    <label class="control-label"> Sport Name</label>
                                    <input type="text" class="form-control" name="name"  value="<?php echo $res1['name']; ?>" required>
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Sport Type</label><br>

                                    <select class=" xyz form-control form-control-lg "name="sporttype" class="xyz">
                                    
                                       <option> </option>
                                       <option <?php if($res1['sporttype']=="SINGLE") { echo "selected" ; }  ?>>SINGLE</option>
                                       <option <?php if($res1['sporttype']=="DOUBLE") { echo "selected" ; }  ?>>DOUBLE</option>
                                       <option <?php if($res1['sporttype']=="TEAM") { echo "selected" ; }  ?>>TEAM</option>
                                    </select>
                                 </div>
                              </div>

                            

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Number Of Players</label>
                                    <input type="text" class="form-control" pattern="^[0-9 ]+$"  name="numofplayers" value="<?php echo $res1['numofplayers']; ?>">
                                 </div>
                              </div>
                               <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Annual budget</label>
                                    <input type="text" class="form-control" name="annualbudget" value="<?php echo $res1['annualbudget']; ?>" >
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
                                        <label class="control-label">Staff Advisor Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select class=" xyz form-control form-control-lg "name="sname" class="xyz">
                                      
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from facilitator where delete_status='0'");
                                            $stmt->execute();
                                            $record2=$stmt->fetchAll();
                                            ?>
                                            <?php foreach($record2 as $rec1){?>


                                            <option value="<?php echo $rec1['name'];?>" <?php if($res1['name']==$rec1['name']){echo 'selected';}?>>


                                                    <?php echo $rec1['name'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Co-Staff Advisor Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select class=" xyz form-control form-control-lg "name="csaname" class="xyz">
                                      
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from csa where delete_status='0'");
                                            $stmt->execute();
                                            $record2=$stmt->fetchAll();
                                            ?>
                                            <?php foreach($record2 as $rec1){?>


                                            <option value="<?php echo $rec1['name'];?>" <?php if($res1['name']==$rec1['name']){echo 'selected';}?>>


                                                    <?php echo $rec1['name'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                    </div>
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