
<?php  
include("connect.php");
 
$id = $_GET['acc'];
mysql_query( "DELETE FROM account WHERE accountno=$id", $con ) or die ('Error:'.mysql_error());
header("Location:homme.php");
?>