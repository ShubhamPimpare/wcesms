<?php
   session_start(); 
    include '../assets/constant/config.php';
   try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       
           $stmt = $conn->prepare("SELECT * from signup WHERE id='".$_SESSION['id']."' ");
     
               
               $stmt->execute();
               $record = $stmt->fetchAll();
           
               
               
           }catch(PDOException $e)
           {
           echo "Connection failed: " . $e->getMessage();
           }
    ?>
<?php include("header.php");?>
<?php include("sidepanel.php");?>
<html>
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="page-header">
                  <div class="card">
                     <div class="card-body">
                        <h1 class="header-title"> Update Profile Detail</h1>
                        <br>
                        <br>
                        <br>
                        <div class="row m-v-30">
                           <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                              <div class="p-v-25">
                                 <form method="POST" action="app/profilecrud.php" enctype="multipart/form-data">
                                    <?php
                                       foreach($record as $rec)
                                          {
                                       
                                          }?>
                                    <div class="form-group">
                                       <label class="control-label"> USER NAME</label>
                                       <input type="text" class="form-control" name="uname" value="<?php echo $rec['uname'];?>">
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label">EMAIL</label>
                                       <input type="text" class="form-control" name="email"  value="<?php echo $rec['email'];?>">
                                    </div>

                                    <div class="form-group">
                                       <label class="control-label">MOBILE NUMBER</label>
                                       <input type="text" class="form-control" name="mob"  value="<?php echo $rec['mob'];?>">
                                    </div>

                                   

                                    <br>
                                    <br>
                                    <button name="update" class="btn btn-success btn-lg">UPDATE</button> 
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>
<?php include("footer.php");?>