<?php include '../assets/constant/config.php';
   try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
   
        $stmt = $conn->prepare("SELECT * from requirements WHERE id='".$_GET['id']."'");
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
                  <form method="POST" action="app/reqcrud.php">
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
                                    <label class="control-label"> Requirement Name</label>
                                    <input type="text" class="form-control" name="req"  value="<?php echo $res1['req']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> For The Post Of</label>
                                    <input type="text" class="form-control" name="rpost"  value="<?php echo $res1['rpost']; ?>">
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
                                    <label class="control-label"> Number Of Posts</label>
                                    <input type="text" class="form-control" name="rnpost"  value="<?php echo $res1['rnpost']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Recruiters Email</label>
                                    <input type="text" class="form-control" name="remail"  value="<?php echo $res1['remail']; ?>">
                                 </div>
                              </div>

                              <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Last Date To Contact Recruiter</label>

                                        <input type="date" class="form-control" name="rld" value="<?php echo $res1['rld']; ?>">
                                    </div>
                              </div> 



                              <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label"> Allowed For</label>
                                    <br>
                                    <input type="radio"  class="mr-2" name="raf" value="Boys Only" <?php if($res1['raf']=="Boys Only") { echo "checked" ; }?>>Boys Only
                                    <br>
                                
                                    <input type="radio"  class="mr-2"  name="raf" value="Girls Only" <?php if($res1['raf']=="Girls Only") { echo "checked" ; }?>>Girls Only
                                    <br>

                                    <input type="radio"  class="mr-2"  name="raf" value="Both Boys And Girls" <?php if($res1['raf']=="Both Boys And Girls") { echo "checked" ; }?>>Both Boys And Girls

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