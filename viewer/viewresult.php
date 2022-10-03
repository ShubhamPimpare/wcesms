<?php include '../assets/constant/config.php';
   try {
           $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
           $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
           $stmt = $conn->prepare("SELECT * from result WHERE delete_status='0'");
       
               
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
         <h1 class="header-title">Single Result Detail</h1>
         <br>
         <div class="card">
            <div class="card-body">
               <div class="table-overflow">
                  <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="dt-opt" class="table table-hover table-xl dataTable no-footer" role="grid" aria-describedby="dt-opt_info">
                              <thead>
                                 <tr >
                                    <th>Sr.No</th>
                                    <th >Tournament Name </th>
                                    <th >Team </th>
                                    <th >Rank</th>
                                   
                                 </tr>
                              </thead>
                              <tbody>
                                 <?php
                                    $stmt = $conn->prepare("SELECT * from result WHERE delete_status='0' AND id='".$_GET['id']."' ");
                                    $stmt->execute();
                                    $record = $stmt->fetchAll();
                                    $m=11;
                                    foreach ($record  as $res) 
                                    { ?>  
                                 <tr>
                                    <th><?php echo $m;?></th>
                                    <td><?php echo $res['tname'] ?></td>
                                    <td><?php echo $res['result_school'] ?></td>
                                    <td><?php echo $res['rank'] ?></td>
                                    </tr>
                                 <?php $m++;} ?>
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
<?php include("footer.php"); ?>