<?php 
session_start();

 include '../../assets/constant/config.php';
 try {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
			if (isset($_POST['submit'])) 
			{
				$pass = hash('sha256', $_POST['pass']);
	
				function createSalt()
				{
	   					 return '2123293dsj2hu2nikhiljdsd';
				}
						$salt = createSalt();
						$password = hash('sha256', $salt . $pass);
	
			
//echo "SELECT * from `signup` WHERE email='".$_POST['uname']."'AND pass='".$password."'";exit;
			$stmt = $conn->prepare("SELECT * from `viewer` WHERE email='".$_POST['uname']."'AND password='".$password."'");
			
				$stmt->execute();
				$result=$stmt->fetchAll();

				$rec = count($result);

if ($rec > 0) 
{
foreach($result as $row)
 {

	

}


	
		# verifying password
	if ($password== $row['password'])
	{
		$_SESSION['uid']=$row['id'];
		
		{
			//echo print_r($_POST);exit;
			 $stmt1=$conn->prepare("SELECT * from `web_management` ");
             $stmt1->execute();
             $record1=$stmt1->fetchAll();
       
           foreach($record1 as $rec)
          {
			
                        $secretekey=$rec['secret_key'];
           }
		$ip=$_SERVER['REMOTE_ADDR'];
		//echo $ip;exit;
		$response=$_POST['g-recaptcha-response'];
		//echo $response;exit;
		//https:www.google.com/recaptcha/api/siteverify METHOD: POST
		$url="https://www.google.com/recaptcha/api/siteverify?secret=$secretekey&response=$response&remoteip=$ip";
    //echo $url;exit;
     $fire=file_get_contents($url);
     //echo $fire;exit;
     // data convert to object 
     $data=json_decode($fire);
     //echo print_r($data);exit;
     if($data->success==false)
     {

     	header("location:../../viewer/index_page.php");
     //admin_login();
     	
     	
     }
     else{ echo "Please Fill The Captcha";}
	}
}
else if(!empty($result))
				{
					foreach($result as $res)
					{
						//$_SESSION['id']=$res['id'];
						// $_SESSION['opass']=$res['opass'];
						$_SESSION['uname']=$res['name'];
						;
						$_SESSION['pass']=$res['password'];
						$_SESSION['uid']=$res['id'];
						$_SESSION['image']=$res['image'];
					
			        }
				
				        header("location:../../viewer/index_page.php");
			        }
		        }
		    else{
			            echo "Login Error";
                 }
		 }
		}
		  catch(PDOException $e)
		  {
		       echo "Connection failed: " . $e->getMessage();
		  }
?>

			
			
			