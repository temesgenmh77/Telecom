<?php
//if (isset($_POST['Send'])) {
  
 	 $acc = $_POST['accountno'];
     $fn = $_POST['full_name'];
     $company = $_POST['company'];
     $personal = $_POST['personal'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $office = $_POST['office'];
     $fax = $_POST['fax'];
    
$con = mysql_connect("localhost","root","");

if (!$con)

  {
  die('Could not connect: ' . mysql_error());
}
 
mysql_select_db("project", $con);

if($acc == Null)

$sql="INSERT into customer_detail values ('$acc','$fn','$company','$personal','$phone','$email','$office','$fax')";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("Location: view_customer.php?id='1 Record is added successfully!'");
//}
?>