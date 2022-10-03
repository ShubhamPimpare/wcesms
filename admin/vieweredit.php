<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
        $stmt = $conn->prepare("SELECT * from viewer WHERE id='".$_GET['id']."'");
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
                  <h1 class="header-title">Update Viewer Details</h1>
                  <br><br>
                  <form method="POST" action="app/viewercrud.php" enctype="multipart/form-data">
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
                                    <label class="control-label"> Viewer Name</label>
                                    <input type="text" class="form-control"  pattern="^[a-zA-Z ]+$" name="name"  value="<?php echo $res1['name']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Gender</label>
                                    <br>
                                    <input type="radio"  class="mr-2" name="gender" value="Male" <?php if($res1['gender']=="Male") { echo "checked" ; }?>>Male
                                    <br>
                                
                                    <input type="radio"  class="mr-2"  name="gender" value="Female" <?php if($res1['gender']=="Female") { echo "checked" ; }?>>Female
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
                                    <label class="control-label"> Contact</label>
                                    <input type="text" class="form-control" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$" name="contact"  value="<?php echo $res1['mobile']; ?>">
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