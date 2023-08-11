<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    } 
    if($_SESSION['role']=="Administrator"){    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body background="bgimage.png">
<?php
include_once("connect.php");
$sql="SELECT * FROM user_account";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>
    <table width='100%' border=1>
        <tr bgcolor='#CCCCCC'>
            <td>Employee Id</td>
            <td>Full name</td>
            <td>sex </td>
            <td>Departmet </td>
            <td>Position</td>
            <td>Email </td>
            <td>Phone</td>
            <td>User name</td>
            <td>Password</td>
            <td>Role </td>
            <td>Status</td>
            <td>Issued date</td>
            <td>update</td>

        </tr>
        <?php 

        while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {         
            echo "<tr>";
            echo "<td>".$res['EmployeID']."</td>";
            echo "<td>".$res['Full_name']."</td>";
            echo "<td>".$res['Sex']."</td>";
            echo "<td>".$res['Department']."</td>";
            echo "<td>".$res['Position']."</td>";
            echo "<td>".$res['Email']."</td>";
            echo "<td>".$res['Phone']."</td>";
            echo "<td>".$res['Username']."</td>";
            echo "<td>".$res['password']."</td>";
            echo "<td>".$res['role']."</td>";
            echo "<td>".$res['status']."</td>";
            echo "<td>".$res['date_posted']."</td>";
            
            echo "<td><a href=edit_user.php?id=".$res['EmployeID'].">Edit</a> | <a href = delete_user.php?id=".$res['EmployeID']. 
            ">Delete</a></td>"; //"onClick=return alert (confirm('Are you sure you want to delete?'))        
        }
        ?>
    </table>


  </article>
<footer>Copyright &copy; ethiotelecom.et</footer>
</div>
</body>
</html>

<?php
}
else
  header('location:homme.php');
  
?>