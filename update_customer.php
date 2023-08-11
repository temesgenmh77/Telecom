<?php
//if (isset($_POST['Send'])) {
include("connect.php");
    $id = $_POST['id1'];
 	   $acc = $_POST['accountno'];
     $fn = $_POST['full_name'];
     $company = $_POST['company'];
     $personal = $_POST['personal'];
     $phone = $_POST['phone'];
     $email = $_POST['email'];
     $office = $_POST['office'];
     $fax = $_POST['fax'];
     
$sql="UPDATE customer_detail set accountno ='$acc', Full_name='$fn',organization_detail='$company',personal_address='$personal', Phone='$phone',
email='$email', office_phone='$office',fax='$fax' where accountno='$id'; ";
if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
header("Location: view_customer.php?id='1 Record is added successfully!'");
//}
?>

