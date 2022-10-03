

<!DOCTYPE html>

<?php 
//session_start();
include("checklogin.php");


 include '../assets/constant/config.php';
 try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e)
        {
        echo "Connection failed: " . $e->getMessage();
        }
        $stmt=$conn->prepare(" SELECT * from viewer WHERE id='".$_SESSION['uid']."'");
        $stmt->execute();
                $record=$stmt->fetchAll();
                foreach($record as $key) { ?>



    

<head>
     <?php
            $stmt=$conn->prepare("SELECT * from `web_management`");
            $stmt->execute();
            $record1=$stmt->fetchAll();
      ?>
    <?php foreach($record1 as $rec){?>

    <link href="../assets/css/select2.css" rel="stylesheet" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=1200, initial-scale=0, user-scalable=yes">
    <title> WCE Sports Management System</title>
                                             
    
     
                                             
                                             
   


    <!-- Favicon -->
    <link rel="apple-touch-icon" href="../assets/images/logo/apple-touch-icon.png">
    <link rel="shortcut icon" href="../assets/images/logo/<?php echo $rec['favicon'];?>">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/dist/css/bootstrap.css" />
   <!--  <link rel="stylesheet" href="../assets/vendor/PACE/themes/blue/pace-theme-minimal.css" /> -->
    <link rel="stylesheet" href="../assets/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- page css -->

    <!-- core css -->
  <!--   <link href="../assets/css/font-awesome.min.css" rel="stylesheet"> -->
    <link href="../assets/css/themify-icons.css" rel="stylesheet">
    <link href="../assets/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="../assets/css/animate.min.css" rel="stylesheet">
    <link href="../assets/css/app.css" rel="stylesheet">
    <link href="../assets/css/popup_style.css" rel="stylesheet">
    <!-- css -->
    
<link href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css" rel="stylesheet">
<?php } ?>

</head>

<body>



    <div class="app header-success-gradient">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar dashboard "  id="page">
                <div class="header-container">
                  
                    
                    
                <h1 style="color: black; padding-right:0;padding-left:530px;;padding-top:10px;"><b>WCE SPORTS MANAGEMENT SYSTEM</b></h1>
                            
                       
                  
                </div>
            </div>
        </div>
    </div>
</body>
 <?php } ?>