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
         <h1 class="header-title">Searched Tournament Detail</h1>
         <br>
         <div class="card">
            <div class="table-overflow">
               <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                  <div class="row">
                     <div class="col-sm-12">
                        <table id="dt-opt" class="table table-hover table-xl dataTable no-footer" role="grid" aria-describedby="dt-opt_info">
                           <thead>
                              <tr>
                                 <th >Sr.No</th>
                                 <th >Tournament Name</th>
                                 <th >Tournament Type </th>
                                 <th >Sport Name</th>
                                 <th >Staff Advisor Name</th>
                                  <th >Physical Director Name</th>
                                 <th>Tournament Venue </th>
                                 <th >Tournament Date</th>
                                 <th >Start Time</th>
                                 
                                 <th>Academic Year</th>
                                 <th class="sorting" tabindex="0" aria-controls="dt-opt" rowspan="1" colspan="1" aria-label="Tournament Status: activate to sort column ascending" style="width: 188.312px;">Tournament Status
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php
                                 $stmt = $conn->prepare("SELECT * from tournament   WHERE tname='".$_POST['tname']."'  AND delete_status='0' ");
                                 
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
                                 
                                 
                                 <td><?php echo $res['ay'] ?></td>
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
   <?php include("footer.php"); ?>
