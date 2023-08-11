
<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
	include_once("connect.php");
 	 
     $title = $_POST['title'];
     $content = $_POST['content'];
     $postdate = $_POST['postdate'];

$postby = $_SESSION['handler'];
   

$sql="INSERT into message values ('','$title','$content','$postdate','$postby')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

header("location:homme.php");

?>