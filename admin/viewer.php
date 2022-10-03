<?php
   // session_start();
   
    include '../assets/constant/config.php';
    try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          
               
           }catch(PDOException $e)
           {
           echo "Connection failed: " . $e->getMessage(); exit;
           }
    ?>
<?php include("header.php");?>
<?php include("sidepanel.php");?>
<html>
   <body>
      <div class="page-container">
         <div class="main-content">
            <div class="container-fluid">
               <div class="card">
                  <div class="card-body">
                     <h1 class="header-title">Add Viewer Details</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/viewercrud.php" enctype="multipart/form-data">
                            
                                <?php
                                       $stmt = $conn->prepare("SELECT * from viewer WHERE id=(select max(id) from viewer)");
                                        $stmt->execute();
                                        $record = $stmt->fetchAll();
                                         $n =1;
                                        
                                        foreach($record as $rec)
                                        {
                                       
                                        
                                           $n=$rec['id']+1;
                                       
                                        }
                                        $l='VIEW-00';
                                        $faccode=$l."".$n;
                                       ?>
                                 <div class="row">
                                   

                                 
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Viewer Name </label>
                                          <input type="text" class="form-control" pattern="^[a-zA-Z ]+$" name="name" placeholder="Enter Viewer Name"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group" >
                                          <label class="control-label" >Gender</label>
                                          <br>
                                          <input type="radio" name="gender" value="Male" class="mr-2">Male<br>
                                          <input type="radio" name="gender" value="Female" class="mr-2">Female
                                          <br>
                                       </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Email</label>
                                          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  name="email" placeholder="Enter Email"  required>
                                       </div>
                                    </div>
                                     <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Password</label>
                                          <input type="text" class="form-control" name="password" placeholder="Enter Password"  required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact</label>
                                          <input type="contact" class="form-control" pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$"  name="contact" placeholder="Enter your contact"required>
                                       </div>
                                    </div>
                                     
                                    <br>
                                    <br>
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
   </body>
</html>
      <?php include("footer.php");?>
  