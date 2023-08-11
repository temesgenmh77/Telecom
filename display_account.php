<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header("Location: index.php");
    }    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bgimage.png">
	       <?php
include_once("connect.php");
$sql="SELECT * FROM account ORDER BY accountno DESC";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>

   
    <table width="100%">
        <tr bgcolor='#CCCCCC'>
            <td>Account Number</td>
            <td>Total Amount</td>
            <td>Unpaid months </td>
            <td>Amount paid </td>
            <td>Installment period </td>
            <td>Recieved date</td>
            <td>Issued date</td>
            <td>Reply date </td>
            <td>Last Installment date</td>
            <td>Customer response</td>
            <td>Action taken </td>
            <td>Customer status</td>
            <td>Category</td>
            <td>Collection center</td>
            <td>Contact</td>
            <td>Update</td>
        </tr>
        <?php 

        while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {         
            echo "<tr>";
            echo "<td>".$res['accountno']."</td>";
            echo "<td>".$res['total_amount']."</td>";
            echo "<td>".$res['months']."</td>";

            echo "<td>".$res['amount_paid']."</td>";  
            echo "<td>".$res['inst_period']."</td>";
            echo "<td>".$res['response_date']."</td>";
            echo "<td>".$res['issue_date']."</td>";
            echo "<td>".$res['reply_date']."</td>";             
            echo "<td>".$res['last_date']."</td>";
            echo "<td>".$res['response']."</td>";
            echo "<td>".$res['action_taken']."</td>"; 
            echo "<td>".$res['status']."</td>";
            echo "<td>".$res['category']."</td>";            
            echo "<td>".$res['center']."</td>";
            echo "<td>".$res['Contact']."</td>";
            
            echo "<td><a href=edit_account.php?acc=".$res['accountno']." target=_blank >Edit</a> | <a href = delete_account.php?acc=".$res['accountno']. 
            ">Delete</a></td>"; //"onClick=return alert (confirm('Are you sure you want to delete?'))        
        }
        ?>
    </table>


  </article>
<footer>Copyright &copy; ethiotelecom.et</footer>
</div>
</body>
</html>