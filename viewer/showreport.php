<?php include("header.php");?>
<?php include("sidepanel.php");?>
<div class="page-container">
   <div class="main-content">
      <div class="container-fluid">
         <div class="page-header"></div>
        <!--  <div class="card"> -->
 <div class="card">
            <div class="table-responsive">
               <div class="form-group">
                  <br>
                  <br>
                  <center>
                     <h1 class="header-title">Report Details</h1>
                  </center>
               </div>
               <div class="table-overflow">
                  <div id="dt-opt_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">
                     <div class="row">
                        <div class="col-sm-12">
                           <table id="example1" class="table table-bordered">
                              <thead>
                     <tr>
                        
                        <th scope="col">Sr.No </th>  
                        <th scope="col">Tournament Name </th> 
                       <!--  <th scope="col">Tournament Type  </th>   -->
                        <th scope="col">Sport Name  </th>
                        <th scope="col">Staff Advisor Name  </th>
                         <th scope="col">Physical Director Name  </th>
                        <th scope="col">Tournament Venue </th> 
                        <th scope="col">Tournament Date  </th>  
                       <!--  <th scope="col">Start Time  </th> 
                        <th scope="col">End Time  </th> 
                        <th scope="col">Tournament Status </th>  -->
                        <th scope="col">Competing Team </th> 
                        <th scope="col">Rank </th> 
                        <!-- <th scope="col">Second Price  </th> 
                        <th scope="col">Third Price </th> 
                        <th scope="col">Looser </th>  -->

                        </tr>
                </thead>
<tbody>
<?php
 if(isset($_POST['show']))
 {
            


            $stmt = $conn->prepare("SELECT * from `tournament`  WHERE `date`>='".$_POST['start_date']."' AND `date`<='".$_POST['to_date']."'  AND delete_status='0' ");

                        $stmt->execute();
                       $record = $stmt->fetchAll();

                       $b=1;
                            foreach ($record  as $res) 
                            {  $stmt = $conn->prepare("SELECT * from `result`  WHERE tname= '".$res['tname']."' AND delete_status='0' ");

                        $stmt->execute();
                       $record1 = $stmt->fetchAll();
                       
$rec = count($record1);
//echo $rec;exit;?>



                                
             <tr>
            <th rowspan="<?php echo $rec;?>"><?php echo $b ?></th>
            <td rowspan="<?php echo $rec;?>"><?php echo $res['tname'] ?></td>
            <!-- <td rowspan="<?php echo $rec;?>"><?php echo $res['ttype'] ?></td> -->
            <td rowspan="<?php echo $rec;?>"><?php echo $res['sport'] ?></td>
            <td rowspan="<?php echo $rec;?>"><?php echo $res['name'] ?></td>
            <td rowspan="<?php echo $rec;?>"><?php echo $res['pname'] ?></td>
            <td rowspan="<?php echo $rec;?>"><?php echo $res['venue'] ?></td>
            <td rowspan="<?php echo $rec;?>"><?php echo $res['date'] ?></td>
         
            

  

<?php
 

                            foreach ($record1  as $res1){ ?> 

            <td><?php echo $res1['result_school'] ?></td>

            <td>
               <span  class="badge badge-success"><?php if($res1['rank']=="Winner"){echo $res1['rank'];} ?></span>

               <span class="badge badge-primary"><?php if($res1['rank']=="First Price"){echo $res1['rank'];} ?></span>

                 <span  class="badge badge-warning"><?php if($res1['rank']=="Second Price"){echo $res1['rank'];} ?></span>

                 <span class="badge badge-danger"><?php if($res1['rank']=="Third Price"){echo $res1['rank'];} ?></span>
                 <span class="badge badge-dark"><?php if($res1['rank']=="Looser"){echo $res1['rank'];} ?></span>


            </td>

   </tr>
<?php $b++;} } } ?>

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

<?php include("footer.php");?>