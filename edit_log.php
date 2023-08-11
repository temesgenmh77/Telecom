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

<?php
include_once("connect.php");

$id = $_GET['acc'];
$sql = "SELECT * FROM daily_log where Log_code=".$id;

$result = mysql_query( $sql, $con );
if(! $result ) {
      die('Could not get data: ' . mysql_error()."what is the crazy!");
   }
while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {

      $log_code =$res['Log_code'];
      $acc = $res['Accountno'];
      $subject = $res['Email_subject'];
      $name = $res['Sender_name'];
      $rrdate = $res['Recieved_date'];
      $case= $res['Case_status'];
      $closed = $res['Closed_date'];
      $remark = $res['Remark'];
      $Handler = $res['Handler'];
      
}
?>



<article>
<form id="form1" name="form1" method="post" action="update_log.php">
  <b><p align ="Center">Add New User</p></b>
  <table width="31%" align="center">



    <tr>
      <td width="30%">Log Code </td>
      <td width="70%"><label>
        <input type="text" name="log_code" required value="<?php echo $log_code;?>"/>
      </label></td>
    </tr>

    <tr>
      <td width="30%">Account Number </td>
      <td width="70%"><label>
        <input type="text" name="acc" required value="<?php echo $acc;?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Email Subject </td>
      <td><label>
        <input type="text" name="subject" required value="<?php echo $subject;?>"/>
      </label></td>
    </tr>
	  <tr>
      <td>Sender name </td>
      <td><label>
        <input type="text" name="name" required value="<?php echo $name;?>"/>
      </label></td>
    </tr>
      
    <tr>
      <td>Recieved date</td>
      <td><label>
        <input type="date" name="rrdate" required value="<?php echo $rrdate;?>"/>
      </label></td>
    </tr>

  <tr>
      <td>Case status</td>
      <td><Select name="case" id="case" />

    <option <?php if ($case == "On progress") echo "selected='On progress'";?> >On progress</option>
    <option <?php if ($case == "Complete") echo "selected='Complete'";?> >Complete</option>
    </select>
    </td>
    </tr>
    

    <tr>
      <td>Closed date</td>
      <td><label>
        <input type="date" name="closed" required="required" value="<?php echo $closed;?>" />
      </label></td>
    </tr>
    <tr>
      <td>Remark</td>
      <td><label>
        <input type="text" name="remark"/ value="<?php echo $remark;?>">
      </label></td>
    </tr>
    <tr>
    <tr>
      <td> <input type="hidden" name="id" id ="id" value = "<?php echo $log_code;?>"></td>
      <td><input type="submit" value="Add Log" /><input type="Reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</article>
</body>
</html>
