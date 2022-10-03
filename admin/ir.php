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
                     <h1 class="header-title">Add Sport Equipment Requirement</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/ircrud.php">
                            
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
                                          <label class="control-label">Requirement For</label>
                                          <input type="text" class="form-control" name="req" placeholder="Enter Equipment Name"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Requested By</label>
                                          <input type="text" class="form-control" name="rby" placeholder="Enter Your Name"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact Number Of Requester</label>
                                          <input type="text" class="form-control"  name="rcontact" placeholder="Enter Your contact"required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Number Of Equipments</label>
                                          <input type="text" class="form-control"  name="rne" placeholder="Enter Number Of Equipments"required>
                                       </div>
                                    </div>

                                  


                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Date Of Request</label>
                                          <input type="date" class="form-control" name="rd" placeholder="Enter Requested Date" required>
                                       </div>
                                    </div>

                                    
                                    
                                    

                                    
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Academic Year*</label>
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
  