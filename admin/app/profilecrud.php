<?php 
session_start();


 include '../../assets/constant/config.php';
 try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		if(isset($_POST['update']))
		{ //print_r($_FILES);exit;


			if($_FILES["photo"]["tmp_name"]!=''){
				$filepath="../../assets/images/avatars/". $_FILES["photo"]["name"];
				$add=$_FILES["photo"]["name"];


				if(move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) 
				{
					@unlink("../../assets/images/avatars/".$_POST['old_file']);
				}
			}
			else
			{
				$add=$_POST['old_file'];
			}	
			
		


		//echo "UPDATE `signup` SET uname='".$_POST['uname']."',email='".$_POST['email']."',mob='".$_POST['mob']."',photo='".$add."' WHERE id='".$_SESSION['id']."'";exit;

		$stmt = $conn->prepare("UPDATE `signup` SET uname='".$_POST['uname']."',email='".$_POST['email']."',mob='".$_POST['mob']."',photo='".$add."' WHERE id='".$_SESSION['id']."'");		
			$stmt->execute();
					//print_r($stmt); exit;
				header("location:../profile_page.php");
		
		}
		}catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
?>
