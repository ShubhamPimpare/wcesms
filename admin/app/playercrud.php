<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if(isset($_POST['submit']))
   		{
   		
   $stmt = $conn->prepare("INSERT INTO `player`( `playercode`, `fname`, `mname`, `lname`, `page`, `pcourse`, `pyear`, `padd`, `gender`, `contact`, `email`, `pa`, `sportname`, `school`) VALUE('".$_POST['playercode']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['page']."','".$_POST['pcourse']."','".$_POST['pyear']."','".$_POST['padd']."','".$_POST['gender']."','".$_POST['contact']."','".$_POST['email']."','".$_POST['pa']."','".$_POST['sportname']."','".$_POST['school']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Player Details Inserted"; 
   				
   				header("location:../playertable.php");
   		}
   		if (isset($_POST['update'])) {
   
   			
   			
   			$stmt = $conn->prepare("UPDATE `player` SET fname='".$_POST['fname']."',mname='".$_POST['mname']."',lname='".$_POST['lname']."',page='".$_POST['page']."',pcourse='".$_POST['pcourse']."',pyear='".$_POST['pyear']."',padd='".$_POST['padd']."',gender='".$_POST['gender']."',contact='".$_POST['contact']."',email='".$_POST['email']."',pa='".$_POST['pa']."',sportname='".$_POST['sportname']."',school='".$_POST['school']."' WHERE id='".$_POST['id']."'");
   	
   			
   			$stmt->execute();
   				$_SESSION['update']="Player Details Updated"; 
   			header("location:../playertable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `player` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			header("location:../playertable.php");
   			$_SESSION['error']="Player Details Deleted"; 
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>