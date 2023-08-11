

<?php  
include("connect.php");
 
$id = $_GET['acc'];
mysql_query( "DELETE FROM daily_log WHERE Log_code=$id", $con ) or die ('Error:'.mysql_error());
header("Location:manage_log.php");
?>