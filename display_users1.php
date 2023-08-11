
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
<?php
include_once("connect.php");
$sql="SELECT * FROM user_account";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>

   
    <table width='100%' border=0>
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
            
                  
        }
        ?>
    </table>

<a href="homme.php">Home</a>
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