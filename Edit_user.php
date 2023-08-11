<?php session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location: index.php');
    }    

    if($_SESSION['role']=="Administrator"){  
?>
<?php
include_once("connect.php");
$id=$_GET['id'];
$sql="SELECT * FROM user_account  where EmployeID=$id";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }


 while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {  
    $empid=$res['EmployeID'];
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
<form id="form1" name="form1" method="post" action="update_user.php">
  <b><p align ="Center">Add New User</p></b>
  <table width="31%" align="center">

    <tr>
      <td width="30%">Employe Id </td>
      <td width="70%"><label>
        <input type="text" name="empid" value="<?php echo $res['EmployeID']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Full Name </td>
      <td><label>
        <input type="text" name="fullname" value="<?php echo $res['Full_name']; ?>"/>
      </label></td>
    </tr>
	    <tr>
      <td>Sex</td>
      <td><table width="200">
        
        <tr>
          <td><label>
            <input type="radio" name="gender" value="Male" <?php if($res['Sex']=="Male") echo "checked";?> />
            Male</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="gender"  value="Male" <?php if($res['Sex']=="Female") echo "checked";?>/>
            Female</label></td>
        </tr>
      </table>      </td>
    </tr>
    <tr>
      <td>Department</td>
      <td><label>
        <input type="text" name="department" value="<?php echo $res['Department']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Position</td>
      <td><label>
        <input type="text" name="position" value="<?php echo $res['Position']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><label>
        <input type="email" name="email" value="<?php echo $res['Email']; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Phone</td>
      <td><input type="tel" name="phone" value="<?php echo $res['Phone']; ?>"/></td>
    </tr>

    <tr>
      <td>Username</td>
      <td><input type="text" name="username" value="<?php echo $res['Username']; ?>"/></td>
    </tr>
    <tr>
      <td>Password</td>
      <td><input type="password" name="password" value="<?php echo $res['password']; ?>"/></td>
    </tr>
	  <tr>
      <td>Confirm password</td>
      <td><input type="password" name="confirm" value="<?php echo $res['password']; ?>"/></td>
    </tr>
		  <tr>
      <td>User Role</td>
      <td><Select name="role" id="role"/>
    <option <?php if ($res['role'] == "Select User Type") echo "selected='selected'";?> >Select User Type</option>
	  <option <?php if ($res['role'] == "Administrator") echo "selected='selected'";?> >Administrator</option>
	  <option <?php if ($res['role'] == "User") echo "selected='selected'";?> >User</option>
	  </select>
	  </td>
    </tr>

    <td>Status</td>
      <td><table width="200">
        <tr>
          <td><label>
            <input type="radio" name="status" value="Enable" <?php if($res['status']=="Enable") echo "checked";?>  />
            Enable</label></td>
        </tr>
        <tr>
          <td><label>
            <input type="radio" name="status" value="Disable" <?php if($res['status']=="Disable") echo "checked";?>  />
            Disable</label></td>
        </tr>
      </table> </td>
    </tr>

    <tr>
      <td>Issued date </td>
      <td><input type="date" name="issuedate" value="<?php echo $res['date_posted']; }?>"/></td>
    </tr>
    <tr>
      <td><input type="hidden" name="id1" value="<?php echo $empid;?>"></td>
      <td><input type="submit" value="Update" /><input type="Reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</article>
</body>
</html>
<?php
}
else
  header('location:homme.php');
  
?>