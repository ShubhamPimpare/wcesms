<?php 
session_start();


 include '../../assets/constant/config.php';
 try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		if(isset($_POST['save']))
		{




			$pass1 = hash('sha256', $_POST['opass']);
			$pass2 = hash('sha256', $_POST['npass']);
			$pass3 = hash('sha256', $_POST['cpass']);
	
	function createSalt()
	{
	    return '2123293dsj2hu2nikhiljdsd';
	}
	$salt = createSalt();
	$password1 = hash('sha256', $salt . $pass1);
	$password2 = hash('sha256', $salt . $pass2);
	$password3 = hash('sha256', $salt . $pass3);
    if($pass2==$pass3)
    {	




		//echo "UPDATE `signup` SET `pass`='".$password3."' where id='".$_SESSION['id']."'";exit;

$stmt = $conn->prepare("UPDATE `signup` SET `pass`='".$password3."' where id='".$_SESSION['id']."'");
			
				$stmt->execute();
				
				header("location:../loginpage.php");
		}
	}
		}catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
?>
