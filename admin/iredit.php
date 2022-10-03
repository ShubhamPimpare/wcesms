<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
        $stmt = $conn->prepare("SELECT * from ir WHERE id='".$_GET['id']."'");
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
                  <h1 class="header-title">Update Requirements Details</h1>
                  <br><br>
                  <form method="POST" action="app/ircrud.php">
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
                                    <label class="control-label"> Requirement For</label>
                                    <input type="text" class="form-control" name="req"  value="<?php echo $res1['req']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Requested By</label>
                                    <input type="text" class="form-control" name="rby"  value="<?php echo $res1['rby']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Contact</label>
                                    <input type="text" class="form-control" name="rcontact"  value="<?php echo $res1['rcontact']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Number Of Equipments</label>
                                    <input type="text" class="form-control" name="rne"  value="<?php echo $res1['rne']; ?>">
                                 </div>
                              </div>

                             

                              <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Date Of Request</label>

                                        <input type="date" class="form-control" name="rd" value="<?php echo $res1['rd']; ?>">
                                    </div>
                              </div> 



                             

                            

                            

                              

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Academic Year</label>
                                    <input type="text" class="form-control" name="ray"  value="<?php echo $res1['ray']; ?>">
                                 </div>
                              </div>

                              

                                    
                              
                           </div>
                           <br>
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