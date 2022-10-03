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
                     <h1 class="header-title">Add Recruitment</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/reqcrud.php">
                            
                                <?php
                                       $stmt = $conn->prepare("SELECT * from requirements WHERE id=(select max(id) from requirements)");
                                        $stmt->execute();
                                        $record = $stmt->fetchAll();
                                       
                                        
                                        $n =1;
                                        
                                        foreach($record as $rec)
                                        {
                                       
                                        
                                           $n=$rec['id']+1;
                                       
                                        }
                        

                                     
                                       ?>
                                 <div class="row">
                                   

                                 
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Recruitment Name</label>
                                          <input type="text" class="form-control" name="req" placeholder="Enter Requirements Name"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">For The Post Of</label>
                                          <input type="text" class="form-control" name="rpost" placeholder="Enter The Post"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact Number Of Recruiter</label>
                                          <input type="number" class="form-control"  name="rcontact" placeholder="Enter contact"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Number Of Posts</label>
                                          <input type="text" class="form-control"  name="rnpost" placeholder="Enter Number Of Posts"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Email Of Recruiter</label>
                                          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$" name="remail" placeholder="Enter Email Of Recruiter"required>
                                       </div>
                                    </div>


                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact The Recruiter Before The Follwing Date</label>
                                          <input type="date" class="form-control" name="rld" placeholder="Enter Last Date To Contact Recruiter" required>
                                       </div>
                                    </div>

                                    


                                    <div class="col-md-6">
                                       <div class="form-group" >
                                          <label class="control-label" >Allowed For</label>
                                          <br>
                                          <input type="radio" name="raf" value="Boys Only" class="mr-2">Boys Only<br>
                                          <input type="radio" name="raf" value="Girls Only" class="mr-2">Girls Only<br>
                                          <input type="radio" name="raf" value="Both Boys And Girls" class="mr-2">Both Boys And Girls<br>
                                       </div>
                                    </div>
                                    
                                    
                                    

                                    
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Academic Year</label>
                                          <input type="text" class="form-control"   name="ray" placeholder="Enter Academic Year"required>
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
  