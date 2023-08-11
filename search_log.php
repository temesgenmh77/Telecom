 
<?php
include_once("session.php");
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
  <legend><h2>Search specific account</h2></legend>
<form action="get_logs.php?id=a" method="post">
<table  border="0">
  <tr>
    <td >Account Number </td>
    <td ><p>
      <input name="acc" type="text" id="acc" />
    </p>      </td>
    </tr>
  <tr>
    <td><input type="hidden" name="a" id="a"></td>
    <td><input type="submit" name="Submit" value="Search" /></td>
  </tr>
</table>
</form>

<legend><h2>Search Log by specific Recieved date</h2></legend>
<form action="get_logs.php?id=b" method="post">
<table  border="0">
  <tr>
    <td >Specific Date </td>
    <td ><p>
      <input name="fromdate" type="date" id="fromdate" />
    </p>      </td>
    </tr>
  <tr>
    
    <td><input type="submit" name="submit" value="Search" /></td>
  </tr>
</table>
</form>
<legend><h2>Search Log by Recieved date </h2></legend>
<form action="get_logs.php?id=c" method="post">
  <table  border="0">
    <tr>
      <td >Date from </td>
      <td><input type="date" name="fromdate" /></td>
    </tr>
    <tr>
      <td>Date to </td>
      <td><input type="date" name="todate" /></td>
    </tr>
    <tr>
      <td><input name="search2" type="submit" id="search2" value="Search" /> </td>
      <td><input name="reset2" type="reset" id="reset2" value="Reset" /></td>
    </tr>
  </table>
</form>
<br>
<legend><h2>Search log by case status</h2></legend>
<form action="get_logs.php?id=d" method="post">
<table  border="0">
  <tr>
    <td >Case _Status </td>
    <td ><select name="status" id="status">
    <option>Select Case status</option>
    <option>On progress</option>
    <option>Complete</option>
    </select></td>
  </tr>
  <tr>
    <td>From date : </td>
    <td><input name="fromdate" type="date" id="fromdate" /></td>
  </tr>
  <tr>
    <td>To date : </td>
    <td><input name="todate" type="date" id="todate" /></td>
  </tr>
  <tr>
    
    <td><input name="search" type="submit" id="search" value="Submit" /></td>
    <td><input name="reset" type="reset" id="reset" value="Reset" /></td>
  </tr>
</table>

</form>
</article>
</body>
</html>
