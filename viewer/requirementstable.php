<?php include '../assets/constant/config.php';
   //session_start();
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * from requirements WHERE delete_status='0'");
    //echo  "SELECT * from facilitator";exit;
            
            $stmt->execute();
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
            
            
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    ?>
<?php include("header.php"); ?>
<?php include("sidepanel.php");?>
<div class="page-container">
   <div class="main-content">
      <div class="container-fluid">
         <h1 class="header-title">List Of Recruitments</h1>
         <br>
         <div class="card">
            <div class="card-body">
               
               <div class="table-overflow">
                  <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-border">
                              <thead>
                                 <tr role="row">
                                    <th>Sr.No </th>
                                   
                                    <th>Recruitments Name </th>
                                    <th>For The Post Of</th>
                                    <th>Contact Of Recruiter</th>
                                    <th>Number Of Posts</th>
                                    <th>Email Of Recruiter</th>
                                    <th>Last Date Of Recruitment</th>
                                    <th>Allowed For</th>
                                    <th >Academic Year  </th>
                                   
                                    
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from requirements   WHERE delete_status='0'");
                                    //echo  "SELECT * from facilitator";exit;
                                    
                                    $stmt->execute();
                                    $record = $stmt->fetchAll();
                                    $d=1;
                                    foreach ($record  as $res) 
                                        { ?>          
                                 <tr>
                                    <td><?php echo $d ?></td>
                                    
                                    <td><?php echo $res['req'] ?></td>
                                    <td><?php echo $res['rpost'] ?></td>
                                    <td><?php echo $res['rcontact'] ?></td>
                                    <td><?php echo $res['rnpost'] ?></td>
                                    <td><?php echo $res['remail'] ?></td>
                                    <td><?php echo $res['rld'] ?></td>
                                    <td><?php echo $res['raf'] ?></td>
                                    <td><?php echo $res['ray'] ?></td>
                                    
                                      
                                       <div class="modal" data-backdrop="false" id="exampleModal<?php echo $res['id']?>" style="z-index: 1000" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                          <div class="modal-dialog"  role="dialog">
                                             <div class="modal-content">
                                                <div class="modal-header">
                                                   <h5 class="modal-title" id="exampleModalLabel">confirm</h5>
                                                   <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">×</span>
                                                   </a>
                                                </div>
                                                <div class="modal-body">
                                                   <p>Do you really want to delete this Entry?</p>
                                                </div>
                                                <div class="modal-footer">
                                                   <a href="#" class="btn btn-secondary" data-dismiss="modal">No</a>
                                                   <a href="app/fdcrude.php?id=<?php echo $res['id'];?>" class="btn btn-primary">Yes, I confirm</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
                                 </tr>
                                 <?php $d++;} ?>
                              </tbody>
                           </table>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php if (!empty($_SESSION['success'])){
   ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
   <div class="popup__background"></div>
   <div class="popup__content">
      <h3 class="popup__content__title">
      Success 
      </h1>
      <p> <?php echo $_SESSION['success'];?> </p>
      <p>
         <?php echo "<script>setTimeout(\"location.href = 'requirementstable.php';\",50);</script>"; ?>
      </p>
   </div>
</div>
<?php $_SESSION['success']=''; }?> 
<?php if (!empty($_SESSION['update'])){
   ?>
<div class="popup popup--icon -success js_success-popup popup--visible">
   <div class="popup__background"></div>
   <div class="popup__content">
      <h3 class="popup__content__title">
      Success 
      </h1>
      <p> <?php echo $_SESSION['update'];?> </p>
      <p>
         <?php echo "<script>setTimeout(\"location.href = 'requirementstable.php';\",50);</script>"; ?>
      </p>
   </div>
</div>
<?php $_SESSION['update']=''; }?> 
<?php if (!empty($_SESSION['error'])){
   ?>
<div class="popup popup--icon -error js_error-popup popup--visible">
<div class="popup__background"></div>
<div class="popup__content">
   <h3 class="popup__content__title">
   Deleted Successully
   </h1>
   <p> <?php echo $_SESSION['error'];?> </p>
   <p>
   <p>
      <!-- <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a> -->
      <?php echo "<script>setTimeout(\"location.href = 'requirementstable.php';\",50);</script>"; ?>
   </p>
</div>
<?php $_SESSION['error']=''; }?>
<?php include("footer.php");?>