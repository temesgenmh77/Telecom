<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
include_once("connect.php");
$sql="SELECT * FROM account ORDER BY accountno DESC";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>
<html>
<head>    
    <title>Homepage</title>
<link rel="stylesheet" type="text/css" href="tableexport.min.css">
<script type="text/javascript" src="jquery.table2excel.min.js"></script>
<script type="text/javascript" src="jquery.table2excel.js"></script>

</head>
<body>
    <h1>List of account registered</h1> 
        
        <table  class="employe_table" id="employe_table" border="1">
        <tr>
            <th>Account Number</th>
            <th>Total Amount</th>
            <td>Unpaid months </td> 
            <th>Amount paid </th>
            <th>Installment period </th>
            <th>Recieved date</th>
            <th>Issued date</th>
            <th>UBS Reply date </th>            
            <th>Last Installment date</th>
            <th>Customer response</th>
            <th>Action taken </th>
            <th>Customer status</th>
            <th>Category</th>
            <th>Collection center</th>
            <th>Contact</th>
            <th>Handler</th>
            
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
            echo "<td>".$res['Handler']."</td>";
            

        }
        echo "</tr";
        ?>   
</table>
<a href="dataexportee.php">download Excel</a>

</body>
</html>