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
<form id="form1" name="form1" method="post" action="add_user.php">
  <b><p align ="Center">Add New User</p></b>
  <table width="31%" align="center">

    <tr>
      <td width="30%">Employe Id </td>
      <td width="70%"><label>
        <input type="text" name="empid" required />
      </label></td>
    </tr>
    <tr>
      <td>Full Name </td>
      <td><label>
        <input type="text" name="fullname" required="required" />
      </label></td>
    </tr>
	    <tr>
      <td>Sex</td>
      <td><table width="200">
        <tr>
          <td><label>
            <input type="radio" name="gender" value="Male" required="required" />
            Male</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="gender" value="Female" required="required" />
            Female</label></td>
        </tr>
      </table> </td>
    </tr>

    <tr>
      <td>Department</td>
      <td><label>
        <input type="text" name="department" required="required"/>
      </label></td>
    </tr>
    <tr>
      <td>Position</td>
      <td><label>
        <input type="text" name="position" required="required"/>
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input type="email" name="email" required="required"/>
      </label></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><input type="tel" name="phone" required="required"/></td>
    </tr>

    <tr>
      <td>Username</td>
      <td><input type="text" name="username" required="required"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" required="required"/></td>
    </tr>
	  <tr>
      <td>Confirm password</td>
      <td><input type="password" name="confirm" required="required"/></td>
    </tr>
    
		  <tr>
      <td>User Role</td>
      <td><Select name="role" id="role"/>
	  <option>Select User Type</option>
	  <option>Administrator</option>
	  <option>User</option>
	  </select>
	  </td>
    </tr>
    <tr>
      
      <td>Status</td>
      <td><table width="200">
        <tr>
          <td><label>
            <input type="radio" name="status" value="Enable" required="required" />
            Enable</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="status" value="Disable" required="required" />
            Disable</label></td>
        </tr>
      </table> </td>
    </tr>
    <tr>
      <td>Issued date </td>
      <td><input type="date" name="issuedate" value="<?php echo date('Y-m-d'); ?>"/></td>
    </tr>
    <tr>
      <td> </td>
      <td><input type="submit" value="Add user" /><input type="Reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</article>
</body>
</html>
<?php 
} 
else
  header("location: homme.php");
?>