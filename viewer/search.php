<?php include '../assets/constant/config.php';
   // session_start();
   try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("SELECT * from facilitator WHERE delete_status='0'");
    //echo  "SELECT * from facilitator";exit;
            
            $stmt->execute();
            $record = $stmt->fetch(PDO::FETCH_ASSOC);
        
            
            
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
    ?>
<head>
   <!-- <title>jquery select2 ajax php example</title> -->
   <script src="../assets/js/sample.js"></script>
   <link href="../assets/css/select2.css" rel="stylesheet" />
   <script src="../assets/js/select2.js"></script>
</head>
<?php include("header.php"); ?>
<?php include("sidepanel.php");?>
<div class="page-container">
   <div class="main-content">
      <div class="container-fluid">
         <h1 class="header-title"> Search Tournament Details Using Tournament Name</h1>
         <br>
         <div class="card">
            <div class="card-body">
               <form action="searchtournament.php" method="POST">
                  
                  <div class="form-group">
                     <label class="control-label">Tournament Name</label><br>
                  <select class="xyz form-control form-control-lg "name="tname" class="xyz form-group">
                      <option>---Select Tournament Name---</option>
                        <?php
                           $stmt=$conn->prepare("SELECT * from tournament where delete_status='0' ");
                                 $stmt->execute();
                                 $record=$stmt->fetchAll();           
                           
                                     
                                      ?>
                        <?php foreach($record as $rec){?>
                           <option>  </option>
                       
                        <option value="<?php echo $rec['tname'];?>">
                           <?php echo $rec['tname'];?> 
                        </option>
                        <?php }?>
                     </select>
                  </div>
                  <br><br><br>
                 <button name="submit" class="btn btn-success btn-lg">Search</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   $('.xyz').select2({
          });
</script>
<?php include("footer.php");?>