
<?php  
include("connect.php");
 
$id = $_GET['id'];
mysql_query( "DELETE FROM message WHERE MessageID=$id", $con ) or die ('Error:'.mysql_error());
header("Location:display_posts.php");
?>