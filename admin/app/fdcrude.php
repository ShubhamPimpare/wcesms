<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{
   		
              $stmt = $conn->prepare("INSERT INTO `physicaldirector`( `fdcode`,`name`, `gender`, `address`, `contact`, `email`, `ay`, `stime`, `etime`, `adate`) VALUES('".$_POST['fdcode']."','".$_POST['name']."','".$_POST['gender']."','".$_POST['address']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['ay']."','".$_POST['stime']."','".$_POST['etime']."','".$_POST['adate']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Physical Director Details Inserted"; 
   				
   				header("location:../physicaldirectortable.php");
   		}
   		if (isset($_POST['update'])) {
   			
   			$stmt = $conn->prepare("UPDATE `physicaldirector` SET name='".$_POST['name']."',gender='".$_POST['gender']."',address='".$_POST['address']."',contact='".$_POST['contact']."',email='".$_POST['email']."',ay='".$_POST['ay']."',stime='".$_POST['stime']."',etime='".$_POST['etime']."',adate='".$_POST['adate']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Physical Director Details Updated";
   
   
   			header("location:../physicaldirectortable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `physicaldirector` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Physical Director Details Deleted";
   
   			header("location:../physicaldirectortable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>