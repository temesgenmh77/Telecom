<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
include_once('connect.php');
 	 $subject = $_POST['subject'];
   $case = $_POST['case'];
   $acc = $_POST['acc'];
   
   $rrdate = $_POST['rrdate'];
   $closed = $_POST['closed'];
   $remark = $_POST['remark'];
   $name = $_POST['name'];  
   $handler = $_SESSION['handler'];
   

mysql_select_db("project", $con);
$sql="INSERT into daily_log values ('', '$subject','$name','$acc','$rrdate','$case','$closed','$remark','$handler')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:daily_log.php");

echo "Please insert your data correctly";
//}
?>