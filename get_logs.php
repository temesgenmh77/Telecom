 <?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    
?>
<?php
include_once("connect.php");
$id=$_GET['id'];
if($id == "a"){
    $acc = $_POST['acc'];
    $sql="SELECT * FROM daily_log WHERE  Accountno=".$acc;
}

if($id == "b"){
    $fromdate="'".$_POST['fromdate']."'";
    $sql="SELECT * FROM daily_log WHERE Recieved_date=$fromdate";
}

if($id == "c"){
        $fromdate="'".$_POST['fromdate']."'";
        $todate="'".$_POST['todate']."'";
        $sql="SELECT * FROM daily_log WHERE Recieved_date BETWEEN $fromdate AND $todate";    

}
if($id == "d"){
        $fromdate="'".$_POST['fromdate']."'";
        $todate="'".$_POST['todate']."'";
        $case = $_POST['status'];
        $sql="SELECT * FROM daily_log WHERE Case_status='$case' and Recieved_date BETWEEN $fromdate AND $todate";    

}


  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>
<html>
<head>    
    <title>Homepage</title>
<body>
    <table width='100%' border=0>
        <tr>
          <td>Log code</td>>
            <td>Account Number</td>
            <td>Email Subject</td>
            <td>Sender name </td>
            <td>Recieved date</td>
            <td>Case status</td>
            <td>Close date </td>
            <td>Remark</td>
            <td>Handler</td>
        </tr>
        <?php 

        while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {         
            echo "<tr>";
            echo "<td>".$res['Log_code']."</td>";
            echo "<td>".$res['Accountno']."</td>";
            echo "<td>".$res['Email_subject']."</td>";
            echo "<td>".$res['Sender_name']."</td>";  
            echo "<td>".$res['Recieved_date']."</td>";
            echo "<td>".$res['Case_status']."</td>";
            echo "<td>".$res['Closed_date']."</td>";
            echo "<td>".$res['Remark']."</td>";             
            echo "<td>".$res['Handler']."</td>";            
                   
        }
        ?>
    </table>
<a href="log_excel.php"> <h3>Download Excel</h3></a>   
</body>
</html>

