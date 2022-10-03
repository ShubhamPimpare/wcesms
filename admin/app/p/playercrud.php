<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if(isset($_POST['submit']))
   		{


   		
   $stmt = $conn->prepare("INSERT INTO `player`( `fname`, `mname`, `lname`, `page`, `pcourse`, `pyear`, `padd`, `gender`, `school`, `sportname`, `contact`, `pa`, `image`) VALUE('".$_POST['playercode']."','".$_POST['fname']."','".$_POST['mname']."','".$_POST['lname']."','".$_POST['page']."','".$_POST['pcourse']."','".$_POST['pyear']."','".$_POST['padd']."','".$_POST['gender']."','".$_POST['school']."','".$_POST['sportname']."','".$_POST['contact']."','".$_POST['pa']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Player Details Inserted"; 
   				
   				header("location:../playertable.php");
   		}
   		if (isset($_POST['update'])) {


			
   
   			
   			
   			$stmt = $conn->prepare("UPDATE `player` SET fname='".$_POST['fname']."',mname='".$_POST['mname']."',lname='".$_POST['lname']."',page='".$_POST['page']."',pcourse='".$_POST['pcourse']."',pyear='".$_POST['pyear']."',padd='".$_POST['padd']."',gender='".$_POST['gender']."',school='".$_POST['school']."',sportname='".$_POST['sportname']."',contact='".$_POST['contact']."',pa='".$_POST['pa']."' WHERE id='".$_POST['id']."')");
   	
   			
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