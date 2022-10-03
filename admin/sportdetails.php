<head>
 <!--   <title>jquery select2 ajax php example</title> -->
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
                     <h1 class="header-title">Add Sport Details</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/sportdetailscrud.php">
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from sportdetails WHERE id=(select max(id) from sportdetails)");
                                     $stmt->execute();
                                     $record = $stmt->fetchAll();
                                     foreach($record as $rec)
                                     {
                                    
                                     }
                                     $n=$rec['id']+1;
                                     $l='SPORT01';
                                     $sportcode=$l."".$n;
                                    ?>
                              <div class="row">
                                 
                               

                                <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Name Of Sport</label>
                                          <input type="text" class="form-control"  name="name" placeholder="Enter Name Of Sport"required>
                                       </div>
                                    </div>
                                    <br>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Sport Type</label>
                                          <select class="xyz form-control form-control-lg "name="sporttype" class=xyz>
                                             <option> ----Select Sport Type----</option>
                                             <option>  </option>
                                             <option>SINGLE  </option>
                                             <option>DOUBLE </option>
                                             <option>TEAM  </option>
                                          </select>
                                          <br>
                                          <br>
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Number Of Players</label>
                                          <input type="text" class="form-control" pattern="^[0-9 ]+$"  name="numofplayers" placeholder="Enter Number Of Players" required>
                                       </div>
                                    </div>
                                     <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Annual Budget(In Rs)</label>
                                    <input type="number" class="form-control" name="annualbudget" value="" required>
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
                                          <label class="control-label">Staff Advisor Name</label>
                                          <select class="xyz form-control form-control-lg " name="sname" class="xyz form-group">
                                             <option>----Select Staff Advisor Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from facilitator where delete_status='0'");
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
                                          <label class="control-label">Co-Staff Advisor Name</label>
                                          <select class="xyz form-control form-control-lg " name="csaname" class="xyz form-group">
                                             <option>----Select Co-Staff Advisor Name----</option>
                                             <?php
                                                $stmt=$conn->prepare("SELECT * from csa where delete_status='0'");
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