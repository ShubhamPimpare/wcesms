<?php include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        

            $stmt = $conn->prepare("SELECT * from `web_management` ");
            
            $stmt->execute();
            $record1 = $stmt->fetchAll();
            
           
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage(); exit;
        }
 ?>
<?php foreach($record1 as $res1){ ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login Page</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../assets/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.css" />
    <link rel="stylesheet" href="../assets/vendor/PACE/themes/blue/pace-theme-minimal.css" />
    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />

    <!-- page css -->

    <!-- core css -->
    <link href="../assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
   
</head>

<body>
    <div class="app">
        <div class="layout bg-gradient-info">
            <div class="container">
                <div class="row full-height align-items-center">
                    <div class="col-md-7 d-none d-md-block">
                        <!--  <img class="img-fluid" src="../assets/images/logo/favicon.png" width="200px" >  -->
                        <div class="m-t-15 m-l-20">
                            <h1 class="font-weight-light font-size-35 text-white">WCE Sports Management System</h1>
                            <p class="text-white width-70 text-opacity m-t-25 font-size-16">Sports Management System is developed for sports scheduling and results monitoring. </p>
                           
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="card card-shadow">
                            <div class="card-body">
                                <div class="p-h-70 p-v-80">
                                    <img class="img-fluid" src="../assets/images/logo/sportlogo.png" alt="">
                                    <br>
                                    <br>
                                    <h2><b>Viewer Login</b></h2>
                                    <p class="m-b-15 font-size-13">Please enter your user name and password to login</p>


                                    <form action="app/logincrud.php" method="POST" >
                                        
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="User name" name="uname">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password" name="pass">
                                        </div>

                                         <div class="g-recaptcha" data-sitekey=
                                         "<?php echo $res1['site_key'];?>">
                                        </div>
                                        <br>
                                        <button name="submit"class="btn btn-success btn-lg"> Login</button>


                                        <!-- <div class="text-center m-t-30">
                                            <a href="" class="text-gray text-link text-opacity">Forget Password?</a>
                                        </div> -->
                                    </form>
                                    <a href="../admin/loginpage.php"><button class="btn btn-primary btn-lg text-blue">Click here for Admin Login</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
    <!-- build:js assets/js/vendor.js -->
    <!-- core dependcies js -->
    <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/vendor/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../assets/vendor/PACE/pace.min.js"></script>
    <script src="../assets/vendor/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>     
    <script src="../assets/vendor/d3/d3.min.js"></script>
    <!-- endbuild -->

    <!-- build:js assets/js/app.min.js -->
    <!-- core js -->
    <script src="../assets/js/app.js"></script>
    <!-- configurator js -->
    <script src="../assets/js/configurator.js"></script>
    <!-- endbuild -->

    <!-- page js -->

    
</body>

</html>