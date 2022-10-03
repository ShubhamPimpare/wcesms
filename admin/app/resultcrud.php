<?php 
session_start();
 include '../../assets/constant/config.php';
 try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      if(isset($_POST['submit']))
      {
        /* $sql="SELECT * from result WHERE delete_status='0' and r_name='".$_POST['r_name']."' and rank='".$_POST['rank']."' ";
      */
        $stmt = $conn->prepare("SELECT * from result WHERE delete_status='0' and tname='".$_POST['tname']."' and rank='".$_POST['rank']."' ");
   
         
         $stmt->execute();
         $record = $stmt->fetchAll();
                      $rec = count($record);
                     //echo$rec;
                                      if($rec>0)
                                      {
                                       //echo"hi";
                                       $_SESSION['error']="Record already exist";
                                     header("location:../resulttable.php");
  
    
}
else
{

         

        // echo print_r($_POST);exit;
      
 $stmt = $conn->prepare("INSERT INTO `result`( `tname`,`result_school`, `rank`) VALUES ('".$_POST['tname']."','".$_POST['result_school']."','".$_POST['rank']."' ) ");
         
            $stmt->execute();

          //  $stmt1=$conn->prepare("UPDATE `school` SET r_status= '1' where sname='".$_POST['result_school']."' " );
            //  $stmt1->execute();
           
//print_r($stmt1); exit;
               $_SESSION['success']="Result Details Inserted"; 
            
            header("location:../resulttable.php");}
      
   }
      if (isset($_POST['update'])) {


      
         

          $stmt = $conn->prepare("UPDATE `result` SET tname='".$_POST['tname']."', result_school='".$_POST['result_school']."',rank='".$_POST['rank']."'  WHERE id='".$_POST['id']."'");
         
   
         
         $stmt->execute();
            $_SESSION['update']="Result Details Updated"; 
         header("location:../resulttable.php");
      }

      if (isset($_GET['id'])) {
         
         $stmt = $conn->prepare("UPDATE `result`  SET delete_status='1'  WHERE id='".$_GET['id']."'");
         
         $stmt->execute();
         header("location:../resulttable.php");
            $_SESSION['error']="Result Details Deleted"; 
      }
      }catch(PDOException $e)
      {
      echo "Connection failed: " . $e->getMessage();
      }
?>

         
         
         