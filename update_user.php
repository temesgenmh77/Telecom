<?php
   //$id = $_GET['id1'];

if($_SESSION['role']=="Administrator"){  
   if($_POST['password']==$_POST['confirm']){
    $id = $_POST['id1'];
   $empid = $_POST['empid'];
   $fullname = $_POST['fullname'];
   $sex = $_POST['gender'];
   $department = $_POST['department'];
   $postion = $_POST['position'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];  
   $username = $_POST['username'];
   $password = md5($_POST['password']);
   $role = $_POST['role'];
   $status = $_POST['status'];
   $issuedate = $_POST['issuedate'];
   include_once('connect.php');

$sql="UPDATE user_account set Full_name='$fullname',Sex='$sex',Department='$department',Position='$postion',Email='$email',Phone='$phone',Username='$username',password='$password',role='$role',status='$status',date_posted='$issuedate' where EmployeID='$id'";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
  
header("location:display_users.php");
}
else
echo "Your password mismatch!!!!";
?>
<?php
}
else
  header('location:homme.php');
  
?>