<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{
   		
              $stmt = $conn->prepare("INSERT INTO `requirements`( `req`, `rpost`, `rcontact`, `rnpost`, `remail`, `rld`, `raf`, `ray`) VALUES('".$_POST['req']."','".$_POST['rpost']."','".$_POST['rcontact']."','".$_POST['rnpost']."','".$_POST['remail']."','".$_POST['rld']."','".$_POST['raf']."','".$_POST['ray']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Requirements Details Inserted"; 
   				
   				header("location:../requirementstable.php");
   		}
   		if (isset($_POST['update'])) {
   			
   			$stmt = $conn->prepare("UPDATE `requirements` SET req='".$_POST['req']."',rpost='".$_POST['rpost']."',rcontact='".$_POST['rcontact']."',rnpost='".$_POST['rnpost']."',remail='".$_POST['remail']."',rld='".$_POST['rld']."',raf='".$_POST['raf']."',ray='".$_POST['ray']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Requirements Details Updated";
   
   
   			header("location:../requirementstable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `requirements` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Requirements Details Deleted";
   
   			header("location:../requirementstable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>