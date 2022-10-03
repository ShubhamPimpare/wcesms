<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{
   		
              $stmt = $conn->prepare("INSERT INTO `ir`( `req`, `rby`, `rcontact`, `rne`, `rd`, `ray`) VALUES('".$_POST['req']."','".$_POST['rby']."','".$_POST['rcontact']."','".$_POST['rne']."','".$_POST['rd']."','".$_POST['ray']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Requirements Details Inserted"; 
   				
   				header("location:../irtable.php");
   		}
   		if (isset($_POST['update'])) {
   			
   			$stmt = $conn->prepare("UPDATE `ir` SET req='".$_POST['req']."',rby='".$_POST['rby']."',rcontact='".$_POST['rcontact']."',rne='".$_POST['rne']."',rd='".$_POST['rd']."',ray='".$_POST['ray']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Requirements Details Updated";
   
   
   			header("location:../irtable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `ir` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Requirements Details Deleted";
   
   			header("location:../irtable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>