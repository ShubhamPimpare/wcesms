<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		if(isset($_POST['submit']))
   		{
   		
   $stmt = $conn->prepare("INSERT INTO `tournament`( `tname`,`ttype`, `sport`, `name`,`pname`, `venue`, `date`, `stime`, `etime`, `status`, `ay`) VALUES('".$_POST['tname']."','".$_POST['ttype']."','".$_POST['sport']."','".$_POST['name']."','".$_POST['pname']."','".$_POST['venue']."','".$_POST['date']."','".$_POST['stime']."','".$_POST['etime']."','".$_POST['status']."','".$_POST['ay']."')");
   			
   				$stmt->execute();
   					$_SESSION['success']="Tournament Details Inserted";  
   				header("location:../tournamenttable.php");
   		}
   		if (isset($_POST['update'])) {
   
   			
   			
   			 $stmt = $conn->prepare("UPDATE `tournament` SET  tname='".$_POST['tname']."',ttype='".$_POST['ttype']."',sport='".$_POST['sport']."',name='".$_POST['name']."',pname='".$_POST['pname']."',venue='".$_POST['venue']."',date='".$_POST['date']."',stime='".$_POST['stime']."',etime='".$_POST['etime']."',status='".$_POST['status']."',ay='".$_POST['ay']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Tournament Details Updated";
   			header("location:../tournamenttable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `tournament`  SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Tournament Details Deleted";
   			header("location:../tournamenttable.php");
   
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>