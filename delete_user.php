

<?php  
include("connect.php");
 
$id = $_GET['id'];
mysql_query( "DELETE FROM user_account WHERE EmployeID='$id'", $con ) or die ('Error:'.mysql_error());
header("Location:homme.php");
?>