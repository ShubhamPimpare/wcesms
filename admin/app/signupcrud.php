<?php 
 include '../../assets/constant/config.php';
 try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			if (isset($_POST['submit'])) 
			{
   //print_r($_POST);exit;


				$filepath = "../assets/images/avatars/" . $_FILES["photo"]["name"];

				$add=$_FILES["photo"]["name"];


if(move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) 
{
	$photo=$filepath;
//echo "<img src=".$filepath." height=200 width=300 />";
	//echo $image; exit;
} 
else 
{
echo "Error !!";
}



	
	$passw = hash('sha256', $_POST['pass']);
	$passw1 = hash('sha256', $_POST['cpass']);
	function createSalt()
	{
	    return '2123293dsj2hu2nikhiljdsd';
	}
	$salt = createSalt();
	$password1 = hash('sha256', $salt . $passw);
	$password2 = hash('sha256', $salt . $passw1);
	if($passw==$passw1)
	{
		// echo "INSERT INTO `signup`(`uname`, `email`, `mob`, `pass`, `cpass`,`photo`) VALUES('".$_POST['uname']."','".$_POST['email']."','".$_POST['mob']."','".$password1."','".$password2."','".$add."')";exit;

$stmt = $conn->prepare("INSERT INTO `signup`(`uname`, `email`, `mob`, `pass`, `cpass`,`photo`) VALUES('".$_POST['uname']."','".$_POST['email']."','".$_POST['mob']."','".$password1."','".$password2."','".$add."')");
			
				$stmt->execute();
				
				header("location:../loginpage.php");
		}
		else{
			echo " SignUp Error";
		}	}
		}catch(PDOException $e)
		{
		echo "Connection failed: " . $e->getMessage();
		}
?>

			
			
			