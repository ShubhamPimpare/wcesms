<?php include '../assets/constant/config.php';
   try {
          $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
          $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
              
          }catch(PDOException $e)
          {
          echo "Connection failed: " . $e->getMessage(); exit;
          }
   ?>
     <head>
            <!--    <title>jquery select2 ajax php example</title> -->
            <script src="../assets/js/sample.js"></script>
            <link href="../assets/css/select2.css" rel="stylesheet" />
            <script src="../assets/js/select2.js"></script>
      </head>
<?php include("header.php");?>
<?php include("sidepanel.php");?>
<div class="page-container">
   <div class="main-content">
      <div class="container-fluid">
         <div class="page-header"></div>
         <div class="card">
            <div class="card-body">
               <div class="row m-v-30">
                  <div class="col-10 offset -1  col-sm-8 offset--sm-2">
                     <h1 class="header-title">Reports</h1>
                     <br>
                     <br>
                     <form method="POST" action="showreport.php">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">From Date</label>
                                 <input type="date" class="form-control" name="start_date" value="<?php if(isset($_POST['show'])){echo $_POST['start_date'];}?>">
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="control-label">To Date</label>
                                 <input type="date" class="form-control"name="to_date" value="<?php if(isset($_POST['show'])){echo $_POST['to_date'];}?>" >
                              </div>
                           </div>

                           

                        </div>
                        <br>
                        <br>
                        <br>
                        <br>
                       <button name="show" class="btn btn-success btn-lg" >VIEW REPORT</button>
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