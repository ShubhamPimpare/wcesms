<?php include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

            $stmt = $conn->prepare("SELECT * from  `web_management` ");
            
            $stmt->execute();
            $record1 = $stmt->fetchAll();
            
           
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage(); exit;
        }
 ?>

<?php include("header.php");?>
<?php include("sidepanel.php");?>
<?php foreach($record1 as $res1){ ?>
<html>
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="card">
                  <div class="card-body">
                     <h1 class="header-title">Web Management</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/webcrud.php" enctype="multipart/form-data">

                               <div class="row"> 
                                  <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Title</label>
                                          <input type="text" class="form-control"  name="title" placeholder="Enter Title" value="<?php echo $res1['title']; ?>">
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Favicon</label>
                                          <input type="file" class="form-control"  name="favicon"  value="<?php echo $res1['favicon']; ?>">
                                           <img src="../assets/images/logo/<?php echo $res1['favicon'];?>" >
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Footer</label>
                                          <input type="text" class="form-control"  name="footer" value="<?php echo $res1['footer']; ?>">
                                       </div>
                                    </div>

                                     <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Site Key</label>
                                          <input type="text" class="form-control"  name="site_key" value="<?php echo $res1['site_key']; ?>">
                                       </div>
                                    </div>

                                     <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Secret Key</label>
                                          <input type="text" class="form-control"  name="secret_key" value="<?php echo $res1['secret_key']; ?>">
                                       </div>
                                    </div>

                                    
                                  </div>
                                   <button name="submit" class="btn btn-success btn-lg">Submit</button>
                               </form>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
  
    </body>
 <?php } ?>

<?php include("footer.php"); ?>
