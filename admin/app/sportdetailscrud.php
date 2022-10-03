<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if(isset($_POST['submit']))
   		{
   		
   $stmt = $conn->prepare("INSERT INTO `sportdetails`( `sportcode`, `name`, `sporttype`, `gametype`, `numofplayers`, `annualbudget`, `ay`, `sname`, `csaname`) VALUES('".$_POST['sportcode']."','".$_POST['name']."','".$_POST['sporttype']."','".$_POST['gametype']."','".$_POST['numofplayers']."','".$_POST['annualbudget']."','".$_POST['ay']."','".$_POST['sname']."','".$_POST['csaname']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Sport Details Inserted";  
   				
   				header("location:../sportdetailstable.php");
   		}
   		if (isset($_POST['update'])) {
   
   			//echo "UPDATE `sportdetails` SET sportcode='".$_POST['sportcode']."',name='".$_POST['name']."',sporttype='".$_POST['sporttype']."',gametype='".$_POST['gametype']."',numofplayers='".$_POST['numofplayers']."' WHERE id='".$_POST['id']."'";exit;
   			
   			$stmt = $conn->prepare("UPDATE `sportdetails` SET name='".$_POST['name']."',sporttype='".$_POST['sporttype']."',gametype='".$_POST['gametype']."',numofplayers='".$_POST['numofplayers']."',annualbudget='".$_POST['annualbudget']."',ay='".$_POST['ay']."',sname='".$_POST['sname']."',csaname='".$_POST['csaname']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   				$_SESSION['update']="Sport Details Updated"; 
   			header("location:../sportdetailstable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `sportdetails` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Sport Details Deleted"; 
   			header("location:../sportdetailstable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>