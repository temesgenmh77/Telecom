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

<form action="customer_detail.php" method="POST">
  <table width="43%" height="500" align="center" border="0">
<tr>

    <tr>
      <td width="27%">Account number </td>
      <td width="73%"><label>
        <input type="text" name="accountno" />
      </label></td>
    </tr>
    <tr>
      <td>Full name </td>
      <td><label>
        <input type="text" name="full_name"/>
      </label></td>
    </tr>
    <tr>
      <td>Company detail </td>
      <td><label>
        <textarea name="company"  rows="5" cols="50"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Personal address detail </td>
      <td><label>
        <textarea name="personal" rows="5" cols="50"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><label>
      <input type="text" name="phone" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input type="text" name="email" />
      </label></td>
    </tr>
    <tr>
      <td>Office Phone </td>
      <td><label>
        <input type="text" name="office" />
      </label></td>
    </tr>
    <tr>
      <td>Fax</td>
      <td><label>
        <input type="text" name="fax" /></label></td>
    </tr>
        <tr>
      <td></td>
      <td><input type="submit" value="Send">   <input type="Reset" value="Reset"></td>
    </tr>
  </table>
</form>


  </article>
<footer>Copyright &copy; W3Schools.com</footer>
</div>
</body>
</html>