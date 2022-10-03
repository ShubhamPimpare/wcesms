<?php include '../assets/constant/config.php';
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * from player WHERE delete_status='0'");
    
            
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
         <h1 class="header-title">List Of Players</h1>
         <br>
         <div class="card">
            <div class="card-body">
               
               <div class="table-overflow">
                  <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-bordered">
                              <thead>
                                 <tr>
                                    <th>Sr.No</th>
                                    
                                    <th >First Name </th>
                                    <th >Middle Name </th>
                                    <th >Last Name </th>
                                    <th  >Player Course</th>
                                    <th >Player Year </th>
                                    <th>Player Age </th>
                                    
                                    <th>Player Address</th>
                                    <th >Gender</th>
                                    <th>Team Name</th>
                                    <th>Sport Name</th>
                                    <th >Contact</th>
                                    <th >Player Achievements</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from player    WHERE delete_status='0'");
                                    
                                    
                                    $stmt->execute();
                                    $record = $stmt->fetchAll();
                                    $b=1;
                                    foreach ($record  as $res) 
                                    { ?>          
                                 <tr>
                                    <td><?php echo $b ?></td>
                                    
                                    <td><?php echo $res['fname'] ?></td>
                                    <td><?php echo $res['mname'] ?></td>
                                    <td><?php echo $res['lname'] ?></td>
                                    <td><?php echo $res['pcourse'] ?></td>
                                    <td><?php echo $res['pyear'] ?></td>
                                    <td><?php echo $res['page'] ?></td>
                                    
                                    <td><?php echo $res['padd'] ?></td>
                                    <td><?php echo $res['gender'] ?></td>
                                    <td><?php echo $res['school'] ?></td>
                                    <td><?php echo $res['sportname'] ?></td>
                                    <td><?php echo $res['contact'] ?></td>
                                    <td><?php echo $res['pa'] ?></td>
                                   
                                 </tr>
                                 <?php $b++; } ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'playertable.php';\",4000);</script>"; ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'playertable.php';\",4000);</script>"; ?>
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
      Error
      </h1>
      <p> <?php echo $_SESSION['error'];?> </p>
      <p>
      <p>
         <!-- <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a> -->
         <?php echo "<script>setTimeout(\"location.href = 'playertable.php';\",4000);</script>"; ?>
      </p>
   </div>
</div>
<?php $_SESSION['error']=''; }?>
<?php include("footer.php"); ?>