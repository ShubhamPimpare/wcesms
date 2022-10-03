<?php include("header.php"); ?>
<?php include("sidepanel.php"); ?>

<div class="page-container dashboard ">
   
      <div class="container-fluid">
        
         
        
         <br><br><br>
         <!-- <div class="card"> -->
            <div class="page-header">
               <br>
               <br>
               <div class="media">
                  <div class="col-sm-3">
                     <div class="card">
                        <div class="box border bottom" style="background-color:#E91E63;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="factable.php">STAFF ADVISORS</a> </b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  facilitator where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                       ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                    <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br><br><br>
        
               <br>
               <br>
               <div class="container-fluid">

                  
                 
<div class="card">
   <div class="box border bottom" style="background-color:#b8b2d7;">
      <div class="card-body">
         <div class="media justify-content-between">
            <div>
               <h5>
                  <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="factable.php">CO-STAFF ADVISORS</a> </b></p>
               </h5>
               <?php
                  $stmt=$conn->prepare("SELECT count(*) as cnt_id from  csa where delete_status='0'");
                  $stmt->execute();
                  $record=$stmt->fetch(PDO::FETCH_ASSOC);
                  // echo $record['cnt_id'];
                  ?>
               <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                  ?></span> 
            </div>
            <div class="align-self-end">
               <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
               <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<br><br><br>

<br>
<br>

<div class="media">
                  
                  <div class="card">
                     <div class="box border bottom" style="background-color:#4f496f;">
                        <div class="card-body">
                           <div class="media justify-content-between">
                              <div>
                                 <h5>
                                    <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="gctable.php">GYMKHANA CO-ORDINATORS</a> </b></p>
                                 </h5>
                                 <?php
                                    $stmt=$conn->prepare("SELECT count(*) as cnt_id from  gc where delete_status='0'");
                                    $stmt->execute();
                                    $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                    // echo $record['cnt_id'];
                                    ?>
                                 <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                    ?></span> 
                              </div>
                              <div class="align-self-end">
                                 <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
                                 <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <br><br><br>
     
            <br>
            <br>

                  <div class="col-sm-3">
                     <div class="card">
                        <div class="box border bottom" style="background-color:#FF5722;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="playertable.php">PLAYERS</a></b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  player where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                        ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                    <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               
   
     
        
         
               <div class="media">
                  <div class="col-sm-3">
                     <div class="card">
                        <div class="box border bottom" style="background-color:#564747;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="tournamenttable.php">TOURNAMENTS</a> </b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  tournament where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                       ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                 <i class="fa fa-fw font-size-90 icon-gradient-white  text-white" aria-hidden="true" title="Copy to use trophy"></i>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br><br><br>
        
               <br>
               <br>
             
      <div class="container-fluid">

                  
                 
                     <div class="card">
                        <div class="box border bottom" style="background-color:#b8b2d7;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="sportdetailstable.php">SPORTS</a> </b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  sportdetails where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                       ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                    
                                    <span  style="color: white;"class="ti-game font-size-100"></span>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <br><br><br>
        
               <br>
               <br>

               

                  <div class="media">
                  
                     <div class="card">
                        <div class="box border bottom" style="background-color:#b4abab;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="requirementstable.php">RECRUITMENTS</a> </b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  requirements where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                       ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                    <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <br><br><br>
        
               <br>
               <br>

                  <div class="col-sm-3">
                     <div class="card">
                        <div class="box border bottom" style="background-color:#4CAF50 ;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="schtable.php">TEAMS</a></b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_sname from  school where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_school'];
                                        ?> 
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_sname'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                    <i class="fa fa-graduation-cap font-size-90 icon-gradient-white  text-white" ></i>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>


                  
            </div>
         </div>
      </div>



      
  
      <div class="container-fluid">
        
         
        
       
           
              
               <div class="media">
                  <div class="col-sm-3">
                     <div class="card">
                        <div class="box border bottom" style="background-color:#E91E63;">
                           <div class="card-body">
                              <div class="media justify-content-between">
                                 <div>
                                    <h5>
                                       <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="resulttable.php">RESULTS</a> </b></p>
                                    </h5>
                                    <?php
                                       $stmt=$conn->prepare("SELECT count(*) as cnt_id from  result where delete_status='0'");
                                       $stmt->execute();
                                       $record=$stmt->fetch(PDO::FETCH_ASSOC);
                                       // echo $record['cnt_id'];
                                       ?>
                                    <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                                       ?></span> 
                                 </div>
                                 <div class="align-self-end">
                                 <span class="ti-medall-alt font-size-100 icon-gradient-white  text-white"></span>
                                    <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            
               
          

                  
                 
<div class="card">
   <div class="box border bottom" style="background-color:#b8b2d7;">
      <div class="card-body">
         <div class="media justify-content-between">
            <div>
               <h5>
                  <p class="" style="color:yellow;"><b><a class="" style="color:yellow;" href="irtable.php">EQUIPMENT REQUIREMENTS</a> </b></p>
               </h5>
               <?php
                  $stmt=$conn->prepare("SELECT count(*) as cnt_id from  ir where delete_status='0'");
                  $stmt->execute();
                  $record=$stmt->fetch(PDO::FETCH_ASSOC);
                  // echo $record['cnt_id'];
                  ?>
               <span style="color:black;"class="text-semibold text-white font-size-40"><?php echo $record['cnt_id'];
                  ?></span> 
            </div>
            <div class="align-self-end">
               <i class="fa fa-users font-size-90 icon-gradient-white  text-white" ></i>
               <!--  <i class="ti-bar-chart font-size-90 icon-gradient-white  text-white"></i> -->
            </div>
         </div>
      </div>
   </div>
</div>
</div>

<br><br><br>

<br>
<br>



               

               
   

                  
                 

               


                


                  
            </div>
         </div>
      </div>
       <?php include("footer.php"); ?>
   </div>
  


