<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{
   		
              $stmt = $conn->prepare("INSERT INTO `csa`( `name`,`dname`, `gender`, `address`, `contact`, `email`, `ay`, `adate`) VALUES('".$_POST['name']."','".$_POST['dname']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['ay']."','".$_POST['adate']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Co-Staff Advisor Details Inserted"; 
   				
   				header("location:../csatable.php");
   		}
   		if (isset($_POST['update'])) {
   			
   			$stmt = $conn->prepare("UPDATE `csa` SET name='".$_POST['name']."',dname='".$_POST['dname']."',gender='".$_POST['gender']."',address='".$_POST['address']."',contact='".$_POST['contact']."',email='".$_POST['email']."',ay='".$_POST['ay']."',adate='".$_POST['adate']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Co-Staff Advisor Details Updated";
   
   
   			header("location:../csatable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `csa` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Co-Staff Advisor Details Deleted";
   
   			header("location:../csatable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>