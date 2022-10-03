<?php include '../assets/constant/config.php';
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * from tournament WHERE delete_status='0'");
    
            
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
         <h1 class="header-title">List Of Tournaments</h1>
         <br>
         <div class="card">
            <div class="card-body">
              
               <div class="table-overflow">
                  <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-border">
                              <thead>
                                 <tr >
                                    <th >Sr.No</th>
                                    <th >Tournament Name</th>
                                    <th >Tournament Type </th>
                                    <th >Sport Name</th>
                                    <th >Staff Advisor Name</th>
                                    <th >Physical Director Name</th>
                                    <th >Tournament Venue</th>
                                    <th >Tournament Date </th>
                                    <th >Start Time </th>
                                    <th >End Time </th>
                                    <th >Tournament Status</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from tournament   WHERE delete_status='0' ");
                                    
                                    
                                    $stmt->execute();
                                    $record = $stmt->fetchAll();
                                    $n=1;
                                    foreach ($record  as $res) 
                                    { ?>
                                 <tr>
                                    <th><?php echo $n; ?></th>
                                    <td><?php echo $res['tname'] ?></td>
                                    <td><?php echo $res['ttype'] ?></td>
                                    <td><?php echo $res['sport'] ?></td>
                                    <td><?php echo $res['name'] ?></td>
                                    <td><?php echo $res['pname'] ?></td>
                                    <td><?php echo $res['venue'] ?></td>
                                    <td><?php echo $res['date'] ?></td>
                                    <td><?php echo $res['stime'] ?></td>
                                    <td><?php echo $res['etime'] ?></td>
                                    <td><?php echo $res['status'] ?></td>
                                    
                                 </tr>
                                 <?php $n++;} ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",4000);</script>"; ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",4000);</script>"; ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",4000);</script>"; ?>
      </p>
   </div>
</div>
<?php $_SESSION['error']=''; }?>
<?php include("footer.php"); ?>