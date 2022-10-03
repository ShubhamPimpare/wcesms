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
                     <h1 class="header-title">Add Physical Director</h1>
                     <div class="row m-v-30">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                           <div class="p-v-25">
                              <form method="POST" action="app/fdcrude.php">
                            
                                <?php
                                       $stmt = $conn->prepare("SELECT * from physicaldirector WHERE id=(select max(id) from physicaldirector)");
                                        $stmt->execute();
                                        $record = $stmt->fetchAll();
                                       
                                        
                                        $n =1;
                                        
                                        foreach($record as $rec)
                                        {
                                       
                                        
                                           $n=$rec['id']+1;
                                       
                                        }
                                        $l='PHYS-00';
                                        $faccode=$l."".$n;

                                     
                                       ?>
                                 <div class="row">
                                   

                                 
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Physical Director Name</label>
                                          <input type="text" class="form-control" pattern="^[a-zA-Z ]+$" name="name" placeholder="Enter Physical Director Name" required>
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
                                          <label class="control-label">Address</label>
                                          <input type="text" class="form-control"   name="address" placeholder="Enter Address"  required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Contact</label>
                                          <input type="number" class="form-control" pattern="[0-9]{10}$"  name="contact" placeholder="Enter your contact" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Email</label>
                                          <input type="text" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$"  name="email" placeholder="Enter Email" required>
                                       </div>
                                    </div>
                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Academic Year</label>
                                          <input type="text" class="form-control"   name="ay" placeholder="Enter Academic Year" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Set Starting Time Of Working Hours</label>
                                          <input type="time" class="form-control" name="stime" placeholder="Enter Tournament Start Time" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Set Ending Time Of Working Hours</label>
                                          <input type="time" class="form-control"   name="etime" placeholder="Enter Tournament End Time" required>
                                       </div>
                                    </div>

                                    <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Appointment Date</label>
                                          <input type="date" class="form-control" name="adate" placeholder="Appointment Date" required>
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
  