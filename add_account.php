<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
//if (isset($_POST['Send'])) {
 	  $accountnumber = $_POST['accountnumber'];
      $totalamount = $_POST['totalamount'];
      $mpaid = $_POST['monthpaid'];
      $ammountpaid = $_POST['ammountpaid'];
      $actionn = $_POST['actionn'];
      $ldate= $_POST['ldate'];
      $rdate = $_POST['rdate'];
      $rrdate = $_POST['rrdate'];
      $instperiod = $_POST['instperiod'];
      $category = $_POST['category'];
      $center = $_POST['center'];
      $status = $_POST['status'];
      $idate = $_POST['idate'];
      $response = $_POST['response'];
      $contact = $_POST['contact'];
      $handler = $_SESSION['handler'];    
include_once("connect.php");
$sql="INSERT into account values ('$accountnumber','$totalamount','$mpaid','$ammountpaid','$instperiod','$idate','$rdate','$rrdate','$ldate','$actionn','$response','$category','$status','$center','$contact','$handler')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("location:homme.php")
//}
?>