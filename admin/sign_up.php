<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up Page </title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="assets/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png">

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
        <div class="layout bg-white full-height">
            <div class="row no-gutters">
                <div class="col-md-8 d-none d-md-block align-self-end" style="background-image: url('../assets/images/others/img-32.jpg')">
                    <div class="row full-height">
                        <div class="col-md-10 align-self-center">
                            <div class="m-b-50 m-l-70">
                                <img class="img-fluid" src="../assets/images/logo/logo-white.png" alt="">
                                <div class="m-t-15 m-l-20">
                                    <h1 class="font-weight-light font-size-35 text-white">Exploring The World</h1>
                                    <p class="text-white width-60 text-opacity m-t-25 font-size-16">Climb leg rub face on everything give attitude nap all day for under the bed. Chase mice attack feet but rub face on everything hopped up.</p>s
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 align-self-center">
                    <div class="row">
                        <div class="col-10 offset-1 col-sm-8 offset-sm-2">
                            <div class="p-v-25">
                                <form action="app/signupcrud.php" method="POST" enctype="multipart/form-data">
                                <h1 class="m-b-30">Create Your account</h1>
                           
                                    <div class="form-group">
                                        <label class="control-label">User Name</label>
                                        <input type="text" class="form-control" name="uname" placeholder="Required *">
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="control-label">Email Address</label>
                                        <input type="email" class="form-control"  name="email" placeholder="Enter a valid email">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Mobile Number</label>
                                        <input type="text" class="form-control" placeholder="Enter Mobile Number"  pattern="^[0][1-9]\d{9}$|^[1-9]\d{9}$" aria-required="true" name="mob">
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label">Password</label>
                                        <input type="text" class="form-control"   name="pass" placeholder="Enter your password">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Confirm Password</label>
                                        <input type="password" class="form-control" name="cpass"placeholder=" Confirm Password">
                                    </div>

                                  <!--  <input type="file" name="photo" accept=".jpg,.jpeg"><br/> -->
<!-- <input type="submit" value="Upload" name="Submit1"> <br/> -->

                                    <div class="form-group">
                                        <label class="control-label">Image</label>
                                        <input type="file" class="form-control" name="photo" >

                                       
                                    </div>


                                    <div class="checkbox font-size-13">
                                        <input id="agreement" name="agreement" type="checkbox" checked="">
                                        <label for="agreement">Remember Me</label>
                                    </div>

                                    <div class="form-group m-t-20">
                                        <button type="submit" name="submit" class="btn btn-success btn-lg">Create New Account</button>
                                    </div>
                                </form>


                                <p>Already have an account? <a href="loginpage.php">Sign In</a></p>
                                <hr>
                                <small>By signing up you agree to out <a href="">Terms &amp; Policy</a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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