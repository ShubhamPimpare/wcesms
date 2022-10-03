<?php include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

            $stmt = $conn->prepare("SELECT * from tournament WHERE id='".$_GET['id']."'");
            
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
    <!-- <title>jquery select2 ajax php example</title> -->
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

                         

 <h1 class="header-title">Update Tournament Details</h1><br><br>
<form method="POST" action="app/tournamentcrud.php">
        <div class="card">

                                   <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                   <div class="form-group">
                                        <label class="control-label">ID</label>

                                        <input type="text" class="form-control" name="id"  value="<?php echo $res1['id']; ?>" readonly>
                                    </div>
                                </div>    

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Tournament Name</label>

                                        <input type="text" class="form-control" name="tname"  pattern="^[a-zA-Z ]+$"  value="<?php echo $res1['tname']; ?>">
                                    </div>
                                </div>

                                
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label"> Tournament Type</label>

                                        <input type="text" class="form-control" name="ttype"     value="<?php echo $res1['ttype']; ?>">
                                    </div>
                                </div>

                                

                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Sport Name</label><br>
                                        <select class=" xyz form-control form-control-lg "name="sport" class="xyz">
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from sportdetails where delete_status='0'");
                                            $stmt->execute();
                                            $record=$stmt->fetchAll();
                                            ?>
                                         


                                          <!--      <option> </option>   -->
                                            <?php foreach($record as $rec){?>


                                            <option>  </option>
                                            <option value="<?php echo $rec['name'];?>" <?php if($res1['sport']==$rec['name']){echo 'selected';}?>>


                                                    <?php echo $rec['name'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Staff Advisor Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select class=" xyz form-control form-control-lg "name="sname" class="xyz">
                                      
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from facilitator where delete_status='0'");
                                            $stmt->execute();
                                            $record2=$stmt->fetchAll();
                                            ?>
                                            <?php foreach($record2 as $rec1){?>


                                            <option value="<?php echo $rec1['name'];?>" <?php if($res1['name']==$rec1['name']){echo 'selected';}?>>


                                                    <?php echo $rec1['name'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Physical Director Name</label><br>

                                        <!-- <label>Sports Name </label> -->
                                        <select class=" xyz form-control form-control-lg "name="pname" class="xyz">
                                      
                                            <?php

                                            $stmt=$conn->prepare("SELECT * from physicaldirector where delete_status='0'");
                                            $stmt->execute();
                                            $record2=$stmt->fetchAll();
                                            ?>
                                            <?php foreach($record2 as $rec1){?>


                                            <option value="<?php echo $rec1['name'];?>" <?php if($res1['name']==$rec1['name']){echo 'selected';}?>>


                                                    <?php echo $rec1['name'];?>  
                                            </option>
                                                <?php }?>
                                        </select>
                                       
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tournament Venue</label>

                                        <input type="text" class="form-control" name="venue" value="<?php echo $res1['venue']; ?>">
                                    </div>
                                </div>

                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tournament Date</label>

                                        <input type="date" class="form-control" name="date" value="<?php echo $res1['date']; ?>">
                                    </div>
                              </div> 

                               <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tournament Start Time</label>

                                        <input type="text" class="form-control" name="stime"  value="<?php echo $res1['stime']; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tournament End Time</label>

                                        <input type="text" class="form-control" name="etime" value="<?php echo $res1['etime']; ?>">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Tournament Status</label>

                                        <input type="text" class="form-control" name="status" value="<?php echo $res1['status']; ?>">
                                    </div>

                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Academic Year</label>

                                        <input type="text" class="form-control" name="ay" value="<?php echo $res1['ay']; ?>">
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
        
    </body>
    </html>



    



<script type="text/javascript">
        $('.xyz').select2({
               });
    </script>
<?php
    include("footer.php");
?>
