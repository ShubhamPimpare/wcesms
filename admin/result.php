<?php 
 include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // $stmt=$conn->prepare("SELECT * from player where delete_status='0'");
        // $stmt->execute();
        // $record=$stmt->fetchAll();
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage(); exit;
        }
?>        
<head>
    <!-- <title>jquery select2 ajax php example</title> -->
    <script src="../assets/js/sample.js"></script>
    <link href="../assets/css/select2.css" rel="stylesheet" />
    <script src="../assets/js/select2.js"></script>
</head>
<?php include("header.php");?>

<?php include("sidepanel.php");?>
<html>
<body>
    
<div class="page-container">
   <div class="main-content">
        <div class="container-fluid">
           <div class="card">
               <div class="card-body">
                                    <h1 class="header-title"> Declare Tournament Result</h1><br>
                                <br>
                                         <div class="row m-v-30">

                                  

                         <div class="col-10 offset-1 col-sm-8 offset-sm-2"> 
                           <!--  <div class="p-v-25">  -->
                              
                                <br>
                                <form method="POST" action="app/resultcrud.php">

                        <div class="row">
                <div class="col-md-6">    
                        <div class="form-group">
                                        <label class="control-label">Tournaments Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select name="tname"  class="xyz">
                                              <option>---Select Tournament Name---</option> 
                                  
                                            <?php
                                 $stmt=$conn->prepare("SELECT * from tournament where delete_status='0' ");
                                       $stmt->execute();
                                       $record=$stmt->fetchAll();           

                                           
                                            ?>
                                            <?php foreach($record as $rec){?>


                                          
                                            <option value="<?php echo $rec['tname'];?>">


                                                    <?php echo $rec['tname'];?> 
                                            </option>
                                                <?php }?>
                                               
                                        </select>
                        </div>
                    </div>
                    

                    <div class="col-md-6"> 
                        <div class="form-group">

                                        <label class="control-label" >Team Name</label><br>


                                        <select name="result_school"  class="xyz"  >
                                              <option  >---Select Team---</option>

                                  
                                            <?php
                                 $stmt=$conn->prepare("SELECT * from school where delete_status='0' AND  r_status='0' ");
                                       $stmt->execute();
                                       $record1=$stmt->fetchAll();           

                                           
                                            ?>
                                            <?php foreach($record1 as $rec){?>


                                          
                                            <option value="<?php echo $rec['sname'];?>">


                                                    <?php echo $rec['sname'];?> 
                                            </option>
                                                <?php }?>
                                        </select>
                        </div>
                    </div>
                    



                           <div class="col-md-6">
                                       <div class="form-group">
                                          <label class="control-label">Rank</label><br>
                                          <select name="rank" class=xyz>
                                             <option >---Select Rank---</option>
                                             <option>       </option>
                                             <option>Winner </option>
                                             <option>First Price</option>
                                             <option>Second  Price </option>
                                             <option>Third Price</option>
                                             <option>Looser</option>
                                          </select>
                                     </div>
                            </div>

                   

 



                                 
                                 </div> 
                                 <br>
                                 <br>
                                 <br>
                                 <br>
                                <button name="submit" class="btn btn-success btn-lg">Submit</button>
                             </form>
                         </div>
                     </div>
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

</body>
</html>

    
 