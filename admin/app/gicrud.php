<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{
   		
              $stmt = $conn->prepare("INSERT INTO `gi`( `name`,`dname`, `gender`, `address`, `contact`, `email`, `ay`, `adate`) VALUES('".$_POST['name']."','".$_POST['dname']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['ay']."','".$_POST['adate']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Gymkhana Incharge Details Inserted"; 
   				
   				header("location:../gitable.php");
   		}
   		if (isset($_POST['update'])) {
   			
   			$stmt = $conn->prepare("UPDATE `gi` SET name='".$_POST['name']."',dname='".$_POST['dname']."',gender='".$_POST['gender']."',address='".$_POST['address']."',contact='".$_POST['contact']."',email='".$_POST['email']."',ay='".$_POST['ay']."',adate='".$_POST['adate']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Gymkhana Incharge Details Updated";
   
   
   			header("location:../gitable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `gi` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Gymkhana Incharge Details Deleted";
   
   			header("location:../gitable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>