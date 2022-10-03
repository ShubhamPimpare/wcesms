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
         <h1 class="header-title">Manage Tournaments</h1>
         <br>
         <div class="card">
            <div class="card-body">
               <a href="tournament.php"><button class="btn btn-info m-b-0 m-r-5">ADD TOURNAMENT</button></a><br><br>
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
                                    <th >Academic Year</th>
                                    <th >Action   </th>
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
                                    <td><?php echo $res['ay'] ?></td>
                                    <td class="text-center font-size-18 d-flex border-1">
                                       <a href="tournamentedit.php?id=<?php echo $res['id'] ?>"class="text-gray mr-2"><i style="color:blue;"class="ti-pencil" data-toggle="tooltip" title="Edit"></i></a>
                                       <a type="button" data-toggle="modal" data-target="#exampleModal<?php echo $res['id'];?>"><i style="color:red;"class="ti-trash mr-2" data-toggle="tooltip"  title="Delete"></i></a>
                                       <a  href="viewtournament.php?id=<?php echo $res['id'] ?>"class="text-gray mr-2"><i style="color:green;"class="ti-eye" data-toggle="tooltip" title="View"></i></a>
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
                                                   <a href="app/tournamentcrud.php?id=<?php echo $res['id'];?>" class="btn btn-primary">Yes, I confirm</a>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    </td>
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
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",200);</script>"; ?>
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
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",200);</script>"; ?>
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
      Deleted Successfully
      </h1>
      <p> <?php echo $_SESSION['error'];?> </p>
      <p>
      <p>
         <!-- <a href="../index.php"><button class="button button--error" data-for="js_error-popup">Close</button></a> -->
         <?php echo "<script>setTimeout(\"location.href = 'tournamenttable.php';\",200);</script>"; ?>
      </p>
   </div>
</div>
<?php $_SESSION['error']=''; }?>
<?php include("footer.php"); ?>