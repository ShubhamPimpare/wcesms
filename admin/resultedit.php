<?php include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

            $stmt = $conn->prepare("SELECT * from result WHERE id='".$_GET['id']."'");
            
            $stmt->execute();
            $record1 = $stmt->fetchAll();
            foreach($record1 as $res1){}
            //echo print_r($record1);exit;
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage(); exit;
        }
 ?>

 <?php include("header.php");?>
 <?php include("sidepanel.php");?>

 <!DOCTYPE html>
<html>
    <head>
        <html>
<head>
 <!--    <title>jquery select2 ajax php example</title> -->
    <script src="../assets/js/sample.js"></script>
    <link href="../assets/css/select2.css" rel="stylesheet" />
    <script src="../assets/js/select2.js"></script>
</head>
 
    </head>
<!-- <head>
    <title>Sport details CRUD Operations</title>
</head> -->
<body>
    <div class="page-container">
                    
                           <div class="main-content">
                            <div class="container-fluid">
                            <div class="page-header">

                         
 <h1 class="header-title">Update Result Details</h1><br><br>

<form method="POST" action="app/resultcrud.php">
        <div class="card">

                                <div class="card-body">
                                 <div class="form-group">
                                        <label class="control-label">ID</label>

                                        <input type="text" class="form-control" name="id"  value="<?php echo $res1['id']; ?>" readonly>
                                    </div>

                    <div class="row">
                              <div class="col-md-6">     
                                <div class="form-group">
                                        <label class="control-label">Tournaments Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select name="tname" class="xyz">
                                  
                                            <?php
                                 $stmt=$conn->prepare("SELECT * from tournament where delete_status='0' ");
                                       $stmt->execute();
                                       $record=$stmt->fetchAll();           

                                           
                                            ?>
                                            <?php foreach($record as $rec){?>


                                            <option>  </option>
                                            <option value="<?php echo $rec['tname'];?>" <?php if($res1['tname']==$rec['tname']){echo 'selected';}?>>


                                                    <?php echo $rec['tname'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                </div>
                               </div>
                               


                              <div class="col-md-6">        
                                 <div class="form-group">
                                        <label class="control-label">Team </label><br>


                                        <!-- <label>Sports Name </label> -->
                                        <select name="result_school" class="xyz" >
                                  
                                            <?php
                                 $stmt=$conn->prepare("SELECT * from school where delete_status='0' ");
                                       $stmt->execute();
                                       $record1=$stmt->fetchAll();           

                                           
                                            ?>
                                            <?php foreach($record1 as $res6){?>

                                          
                                            <option> </option>
                                           <option value="<?php echo $res6['sname'];?>"<?php if($res1['result_school']==$res6['sname']){echo 'selected';}?>>


                                                    <?php echo $res6['sname'];?> 
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                </div>
                               </div>

                                <div class="col-md-6">
                                 <div class="form-group">
                                    <label class="control-label">Status</label>
                                    <br>
                                    <select class="xyz form-control form-control-lg" name="rank" value="<?php echo $record1['status']; ?>">
                                      <option>---Update Status---</option>
                                       <option <?php if($res1['rank']=="Winner") { echo "selected" ; }  ?>>Winner</option>
                                       <option <?php if($res1['rank']=="First Price") { echo "selected" ; }  ?>>First Price</option>
                                       <option <?php if($res1['rank']=="Second  Price") { echo "selected" ; }  ?>>Second  Price</option>
                                       <option <?php if($res1['rank']=="Third Price") { echo "selected" ; }  ?>>Third Price</option>
                                         <option <?php if($res1['rank']=="Looser") { echo "selected" ; }  ?>>Looser</option>
                                    </select>
                                 </div>
                              </div>
                               

                          

                      </div>
                      <br>
                      <br>
                      <br>

       

   <button name="update" class="btn btn-success btn-lg">UPDATE</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>




<?php
    include("footer.php");
?>

</body>
</html>

