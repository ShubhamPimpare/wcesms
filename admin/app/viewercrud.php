<?php 
   session_start();
    include '../../assets/constant/config.php';
    try {
   		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   		
   		if(isset($_POST['submit']))
   		{

         
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



  
  $passw = hash('sha256', $_POST['password']);
 
  function createSalt()
  {
      return '2123293dsj2hu2nikhiljdsd';
  }
  $salt = createSalt();
  $password = hash('sha256', $salt . $passw);

   		
              $stmt = $conn->prepare("INSERT INTO `viewer`( `viewercode`, `name`, `gender`, `email`, `password`, `mobile`) VALUES('".$_POST['faccode']."','".$_POST['name']."','".$_POST['gender']."','".$_POST['email']."','".$password."','".$_POST['contact']."')");
   			
   				$stmt->execute();
   				$_SESSION['success']="Viewer Details Inserted"; 
   				
   				header("location:../viewertable.php");
   		}
   		if (isset($_POST['update'])) {



      if($_FILES["photo"]["tmp_name"]!=''){
        $filepath="../assets/images/avatars/". $_FILES["photo"]["name"];
        $add=$_FILES["photo"]["name"];


        if(move_uploaded_file($_FILES["photo"]["tmp_name"], $filepath)) 
        {
          @unlink("../assets/images/avatars/".$_POST['old_file']);
        }
      }
      else
      {
        $add=$_POST['old_file'];
      } 
      
   			
   			$stmt = $conn->prepare("UPDATE `viewer` SET name='".$_POST['name']."',gender='".$_POST['gender']."',email='".$_POST['email']."',mobile='".$_POST['contact']."' WHERE id='".$_POST['id']."'");
   			
   	
   			
   			$stmt->execute();
   			$_SESSION['update']="Viewer Details Updated";
   
   
   			header("location:../viewertable.php");
   		}
   		if (isset($_GET['id'])) {
   			
   			$stmt = $conn->prepare("UPDATE `viewer` SET delete_status='1' WHERE id='".$_GET['id']."'");
   			
   			$stmt->execute();
   			$_SESSION['error']="Viewer Details Deleted";
   
   			header("location:../viewertable.php");
   		}
   		}catch(PDOException $e)
   		{
   		echo "Connection failed: " . $e->getMessage();
   		}
   ?>