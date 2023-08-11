<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }

?>
<?php
if($_SESSION['role']=="Administrator"){  
if($_POST['password']==$_POST['confirm']){
 	 $empid = $_POST['empid'];
   $fullname = $_POST['fullname'];
   $sex = $_POST['gender'];
   $department = $_POST['department'];
   $postion = $_POST['position'];
   $email = $_POST['email'];
   $phone = $_POST['phone']; 
   $username = $_POST['username'];
   
   
   $password = $_POST['password'];
   $pass = md5($password);
   $role = $_POST['role'];
   $status = $_POST['status'];
   $issuedate = $_POST['issuedate'];

$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
}
if(!($empid==Null) && !($fullname==Null) && !($username == Null)){
mysql_select_db("project", $con);
$sql="INSERT into user_account values ('$empid','$fullname','$sex','$department','$postion','$email','$phone','$username','$pass','$role','$status','$issuedate')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:homme.php");
}

}
else
echo "Please password mismatch";
  
}
 else
 header("location:user_detail.php"); 
?>