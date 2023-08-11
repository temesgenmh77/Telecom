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
<h1>Customer Acocunt managing Interface</h1><br>
<form id="form1" name="form1" method="post" action="add_account.php">
  <table align="center" width="483" height="546" border="0">
    <tr>
      <td width="229">Account number </td>
      <td width="238"><label>
      <input type="number" name="accountnumber" />
</label></td>
    </tr>
    <tr>
      <td>Total amount </td>
      <td><label>
        <input type="decimal" name="totalamount" required="required" />
      </label></td>
    </tr>

    <tr>      
      <td>Unpaid months </td>
      <td><label>
        <input type="text" name="monthpaid"  required="required" />
      </label></td>
    </tr>

    <tr>      
      <td>Amount paid </td>
      <td><label>
        <input type="decimal" name="ammountpaid"  required="required" />
      </label></td>
    </tr>
    <tr>
      <td>Installment period in month </td>
      <td><label>
        <input type="number" name="instperiod" min="1" max="10"  required="required" />
      </label></td>
    </tr>
    <tr>
      <td> Recieved date </td>
      <td><label><input type="date" name="rrdate"/></label></td>
    </tr>

    <tr>
      <td>Issued date </td>
      <td><label><input type="date" name="idate"/></label></td>
    </tr>
        <tr>
      <td>UBS Reply Date </td>
      <td><label><input type="date" name="rdate"/></label></td>
    </tr>
    
    <tr>
      <td>Last installment date</td>
      <td><label><input type="date" name="ldate"/></label></td>
    </tr>
  
  <tr>
      <td>Installement Status </td>
      <td><label>
    <select name="status"  required="response" >
    <option>Select installement status</option>
    <option>New</option>
    <option>In progress</option>
    <option>Closed </option>
    <option>Rejected</option>
    </select>
     </label></td>
    </tr>

    <tr>
      <td>Customer Response </td>
      <td><label>
    <select name="response"  required="response" >
    <option> Select customer response</option>
    <option> Agreed</option>
    <option> Disagreed</option>
    <option> No response</option>
    </select>
     </label></td> 
    </tr> 
    <tr>
      <td>Action Taken </td>
      <td><label>
    <select name="actionn">
    <option> Select action taken</option>
    <option> </option>
    <option>Bared </option>
    <option>Suspended </option>
    <option>Diactivated </option>
    </select>
    
     </label></td>
    </tr>

    <tr>
      <td>Customer Category</td>
      <td><label>
        <select name="category" required>
      <option> Select customer category </option>
          <option>Key</option>
          <option>SOHO</option>
          <option>Residential</option>
        </select>
      </label>      </td>
    </tr>
    
    <tr>
      <td>Collection Center</td>
      <td><label>
    <select name="center">
    <option> Select collection center</option>
    <option>NAAZ & TOP </option>
    <option>SAAZ & NR </option>
    <option>CAAZ</option>
    <option>SWAAZ </option>
    <option>WAAZ & NER</option>
    <option>EAAZ</option>
    <option>NWR & WR</option>
    <option>SER & SWR </option>
    <option>SR</option>
    </select>
     </label></td>

    </tr>
    <tr><td>Customer contact</td>
    <td><input type="phone" name="contact" required="required" /></td>
    </tr>
    <tr>     
      <td><button type="submit" name="Register" id="Register">Register User</button>  <input type="Reset" value="Clear"></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>


  </article>
<footer>Copyright &copy; etc</footer>
</div>
</body>
</html>