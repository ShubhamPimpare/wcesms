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
         <h1 class="header-title">List Of Results</h1><br>
           
             <br>
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
                        
                       

                        <th >Sr.No</th>  
                        <th >Tournament Name </th>
                        <th >Team</th>
                        <th >Rank</th> 
                        <th></th>
                       </tr>
            </thead>
                       
 <tbody>             
 <?php
     $stmt = $conn->prepare("SELECT * from result   WHERE delete_status='0' ");
   
         
    $stmt->execute();
    $record = $stmt->fetchAll();
    $m=1;
    foreach ($record  as $res) 
{ ?>          

      <tr>
         
          <td><?php echo $m ?></td>
          <td><?php echo $res['tname'] ?></td>
          <td><?php echo $res['result_school'] ?></td>
          <td><?php echo $res['rank'] ?></td>
          
         
         
         <td class="text-center font-size-18 d-flex border-1">
<!-- <?php echo $res['id'];?> -->
            
            

           


           
         </td>





      </tr>

      


   <?php $m++; } ?>
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
     
     <?php echo "<script>setTimeout(\"location.href = 'resulttable.php';\",4000);</script>"; ?>
       
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
     
     <?php echo "<script>setTimeout(\"location.href = 'resulttable.php';\",4000);</script>"; ?>
       
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
         <?php echo "<script>setTimeout(\"location.href = 'resulttable.php';\",4000);</script>"; ?>
       </p>
     </div>
   </div> 
   <?php $_SESSION['error']=''; }?>


<?php include("footer.php"); ?>






   
