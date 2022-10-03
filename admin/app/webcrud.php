<?php 
include '../../assets/constant/config.php';
   try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "saaf"; exit;

		if (isset($_POST['submit']))
		 {

				if($_FILES["favicon"]["tmp_name"]!='')
				{
					$filepath="../../assets/images/logo". $_FILES["favicon"]["name"];
					$addfavicon=$_FILES["favicon"]["name"];


					if(move_uploaded_file($_FILES["favicon"]["tmp_name"], $filepath)) 
					{
					@unlink("../../assets/images/logo".$_POST['old_favicon']);
					}
					}
					else
					{
						$add=$_POST['old_favicon'];
					}	

//echo "UPDATE web_management SET title='".$_POST['title']."',favicon='".$addfavicon."',footer='".$_POST['footer']."' ";exit;

					$stmt = $conn->prepare("UPDATE web_management SET title='".$_POST['title']."',favicon='".$addfavicon."',footer='".$_POST['footer']."',site_key='".$_POST['site_key']."',secret_key='".$_POST['secret_key']."' ");
//print_r($stmt);exit;
					$stmt->execute();
					
					//print_r($stmt);exit;
					header("location:../index_page.php");

		}

		
		}

		catch(PDOException $e)
		
		{
				echo "Connection failed: " . $e->getMessage();
		}
?>

			
			
			