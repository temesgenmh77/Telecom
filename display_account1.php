<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header("Location: index.php");
    }    
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<title>Account management System</title>
</head>
<body background="bgimage.png">
<div class="container">
<header>
  <img src="logo.png" height="100" width="100%">
</header>
 <menu>

<div class="dropdown">
  <button class="dropbtn">Home</button>
  <div class="dropdown-content">
    <a href="homme.php">home</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Account</button>
  <div class="dropdown-content">
    <a href="account.php">Add new account</a>
    <a href="display_account.php">Manage account</a>
    <a href="view_account.php">View Account</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Daily log</button>
  <div class="dropdown-content">
    <a href="daily_log.php">Add log</a>
    <a href="manage_log.php">Manage log</a>
    <a href="search_log.php">Search customer</a>
    <a href="view_log.php">View log summary</a>
    
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Reports</button>
  <div class="dropdown-content">
    <a href="report.php">Generate report</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">User</button>
  <div class="dropdown-content">
    <a href="user_detail.php">Add new user</a>
    <a href="display_users.php">Manage user</a>
    <a href="display_users1.php">View users</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Message</button>
  <div class="dropdown-content">
    <a href="message_content.php">Post message</a>
    <a href="display_posts.php">Manage message</a>
    <a href="homme.php">View messages</a>
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Change password</button>
  <div class="dropdown-content">
    <a href="change_pass.php">Change</a>
    
  </div>
</div>
<div class="dropdown">
  <button class="dropbtn">Logout</button>
  <div class="dropdown-content">
    <a href="logout.php">logout</a>
    
  </div>
</div>
 </menu> 
<nav>
  <ul>
    <b>Addtional links </b>
    <li><a href="#">Link 1</a></li>
    <li><a href="#">Link 2</a></li>
    <li><a href="#">Link 3</a></li>
  </ul>
</nav>
 </menu> 

<article>
       <?php
include_once("connect.php");
$sql="SELECT * FROM account ORDER BY accountno DESC";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>

   
    <table>
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
            
            echo "<td><a href=edit_account.php?acc=".$res['accountno'].">Edit</a> | <a href = delete_account.php?acc=".$res['accountno']. 
            ">Delete</a></td>"; //"onClick=return alert (confirm('Are you sure you want to delete?'))        
        }
        ?>
    </table>


  </article>
<footer>Copyright &copy; ethiotelecom.et</footer>
</div>
</body>
</html>