<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if(isset($_POST['submit']))
   		{
   	//echo ("INSERT INTO `school`(`scode`, `sname`, `saddress`, `school_state`, `sgrade`) VALUES('".$_POST['scode']."','".$_POST['sname']."','".$_POST['saddress']."','".$_POST['school_state']."','".$_POST['sgrade']."')");exit;
   
   
   
         $stmt = $conn->prepare("INSERT INTO `school`(`scode`, `sname`, `saddress`, `school_state`, `sgrade`, `email`, `ay`, `sportname`) VALUES('".$_POST['scode']."','".$_POST['sname']."','".$_POST['saddress']."','".$_POST['school_state']."','".$_POST['sgrade']."','".$_POST['email']."','".$_POST['ay']."','".$_POST['sportname']."')");
   
          // $stmt1 = $conn->prepare("INSERT INTO `state`(`school_state`) VALUES('".$_POST['school_state']."')");
   			
   				$stmt->execute();
        
   				$_SESSION['success']="Team Details Inserted"; 
   				
   				header("location:../schtable.php");
   		}
   		if (isset($_POST['btnupdate']))
   		 {
   			
   			$stmt = $conn->prepare("UPDATE `school` SET scode='".$_POST['scode']."',sname='".$_POST['sname']."',saddress='".$_POST['saddress']."',school_state='".$_POST['school_state']."',sgrade='".$_POST['sgrade']."',email='".$_POST['email']."',ay='".$_POST['ay']."',sportname='".$_POST['sportname']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Team Details Updated"; 
   			header("location:../schtable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `school` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Team Details Deleted"; 
   			header("location:../schtable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>