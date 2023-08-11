<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
include_once("connect.php");

   
   $opass = $_POST['opass'];
   $npass = $_POST['npass'];
   $cpass = $_POST['cpass'];  

   $oldpass = md5($opass);

   $password = md5($_POST['npass']);
  $handler = $_SESSION['login_user'];

if( $npass==$cpass ){
   
   $sql = "SELECT * FROM user_account where Username='$handler'";

   $result = mysql_query( $sql, $con );

   if(! $result ) { die('Could not get data: ' . mysql_error());  }

   while($res = mysql_fetch_array($result, MYSQL_ASSOC)) { 
     $data = $res['password'];
     $empid = $res['EmployeID'];
  }
  $sql = "UPDATE user_account set password='$password' where EmployeID='$empid'";
  if($data==$oldpass){
    if (!mysql_query($sql,$con)) {  die('Error: ' . mysql_error());   }
      header("location:display_users.php");
  }
  else
  echo "Such password not found in database! ";
} 
 else
  echo "Your  password mismatch!!!! ";

?> 