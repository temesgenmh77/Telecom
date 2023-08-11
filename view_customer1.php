<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
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
<article>



<form action="view_customer.php" method="post"> 
    <table><tr><td> Account number </td><td>
    <input type="text" name="acc"/></td><td><input type="submit" name="search" value="Search" /></td></tr></table>
</form>

<?php
include_once("connect.php");

//if(isset($_POST['search'])){
  //  $sql="SELECT * FROM customer_detail where accountno=$_POST['acc'] ORDER BY accountno DESC";
//}
//else { 
    $sql="SELECT * FROM customer_detail ORDER BY accountno DESC";
//}
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>
   
    <table width='100%' border=0>
        <tr bgcolor='#CCCCCC'>
            <td>Account Number</td>
            <td>Full name </td>
            <td>organizational detail</td>
            <td>Personal detail </td>
            <td>Phone</td>
            <td>Email </td>
            <td>Office Phone</td>
            <td>Fax</td>
            
            
        </tr>
        <?php 

        while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {         
            echo "<tr>";
            echo "<td>".$res['accountno']."</td>";
            echo "<td>".$res['Full_name']."</td>";
            echo "<td>".$res['organization_detail']."</td>";  
            echo "<td>".$res['Personal_address']."</td>";
            echo "<td>".$res['Phone']."</td>";
            echo "<td>".$res['email']."</td>"; 
            echo "<td>".$res['office_phone']."</td>";
            echo "<td>".$res['fax']."</td>";            
        }
        ?>
    </table>


  </article>
<footer>Copyright &copy; W3Schools.com</footer>
</div>
</body>
</html>