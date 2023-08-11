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
    <a href="logout.php">Change</a>
    
  </div>
</div>

<div class="dropdown">
  <button class="dropbtn">Logout</button>
  <div class="dropdown-content">
    <a href="logout.php">Logout</a>
    
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

// including the database connection file
include_once("connect.php");

//if(!isset($_POST['Upadte'])){
$id = $_GET['acc'];
$sql = "SELECT * FROM account where accountno=".$id;

$result = mysql_query( $sql, $con );
if(! $result ) {
      die('Could not get data: ' . mysql_error()."what is the crazy!");
   }
while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {

       $accountnumber = $res['accountno'];
      $totalamount = $res['total_amount'];
      $mpaid = $res['months'];
      

      $ammountpaid = $res['amount_paid'];
      $actionn = $res['action_taken'];
      $ldate= $res['last_date'];
      $rdate = $res['reply_date'];
      $rrdate = $res['response_date'];
      $instperiod = $res['inst_period'];
      $category = $res['category'];
      $center = $res['center'];
      $status = $res['status'];
      $idate = $res['issue_date'];
      $response = $res['response'];
      $contact = $res['Contact'];
      $handler = $res['Handler'];

}
?>    
    <form name="form1" method="post" action="update_account.php">
        <table>
        <tr>
      <td width="229">Account number </td>
      <td width="238"><label>
      <input type="number" name="accountnumber" value="<?php echo $accountnumber;?>"/>
</label></td>
    </tr>
    <tr>
      <td>Total amount </td>
      <td><label>
        <input type="number" name="totalamount" value="<?php echo $totalamount;?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Unpaid months </td>
      <td><label>
        <input type="text" name="monthspaid" value="<?php echo $mpaid;?>"/>
      </label></td>
    </tr> 
    <tr>

      <td>Amount paid </td>
      <td><label>
        <input type="number" name="ammountpaid" value="<?php echo $ammountpaid;?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Installment period in month </td>
      <td><label>
        <input type="number" name="instperiod" min="1" max="10" value="<?php echo $instperiod;?>"/>
      </label></td>
    </tr>
    <tr>
      <td> Recieved date </td>
      <td><label><input type="date" name="rrdate" value="<?php echo $rrdate;?>"/></label></td>
    </tr>
    <tr>
      <td>Issued date </td>
      <td><label><input type="date" name="idate" value="<?php echo $idate;?>"/></label></td>
    </tr>
    <tr>
      <td>Reply Date </td>
      <td><label><input type="date" name="rdate" value="<?php echo $rdate;?>"/></label></td>
    </tr>
    
    <tr>
      <td>Last date</td>
      <td><label><input type="date" name="ldate" value="<?php echo $ldate;?>"/></label></td>
    </tr>
    
    <tr>
      <td>Installement Status </td>
      <td><label>
      <select name="status" >
      <option>Select installement status</option>
      <option <?php if ($status == "New") echo "selected='selected'";?> >New</option>
      <option <?php if ($status == "In progress") echo "selected='selected'";?> >In progress</option>
      <option <?php if ($status == "Closed") echo "selected='selected'";?> >Closed </option>
      <option <?php if ($status == "Rejected") echo "selected='selected'";?> >Rejected</option>
      </select>
       </label></td>
    </tr>

    
    <tr>
      <td>Action Taken </td>
      <td><label>
          <select name="actionn">
             <option> Select action taken</option>
             <option> </option>
             <option <?php if ($actionn == "Bared") echo "selected='selected'";?> >Bared </option>
             <option <?php if ($actionn == "Suspended") echo "selected='selected'";?> >Suspended </option>
             <option <?php if ($actionn == "Diactivated") echo "selected='selected'";?> >Diactivated </option>
          </select>
    
       </label></td>
    </tr>
    <tr>
      <td>Customer Response </td>
      <td><label>
      <select name="response" >
      <option> Select customer response</option>
      <option <?php if ($response == "Agreed") echo "selected='selected'";?> > Agreed</option>
      <option <?php if ($response == "Disagreed") echo "selected='selected'";?> > Disagreed</option>
      <option <?php if ($response == "No response") echo "selected='selected'";?> > No response</option>
      </select>
       </label></td> 
    </tr>
    <tr>
      <td>Customer Category</td>
      <td><label>
        <select name="category" required >
          <option> Select customer category </option>
          <option value="Key" <?php if ($category == "Key") echo "selected='selected'";?>>Key</option>
          <option value="SWOT" <?php if ($category == "SWOT") echo "selected='selected'";?>> SWOT</option>
         
        </select>
      </label>      </td>
    </tr>
    
    <tr>
      <td>Collection Center</td>
      <td><label>
      <select name="center" >
      <option> Select collection center</option>
      <option <?php if ($center == "NAAZ & TOP") echo "selected='selected'";?>>NAAZ & TOP </option>
      <option <?php if ($center == "SAAZ & NR") echo "selected='selected'";?> >SAAZ & NR </option>
      <option <?php if ($center == "CAAZ") echo "selected='selected'";?> >CAAZ</option>
      <option <?php if ($center == "SWAAZ") echo "selected='selected'";?> >SWAAZ </option>
      <option <?php if ($center == "WAAZ & NER") echo "selected='selected'";?> >WAAZ & NER</option>
      <option <?php if ($center == "EAAZ") echo "selected='selected'";?> >EAAZ</option>
      <option <?php if ($center == "NWR & WR") echo "selected='selected'";?>>NWR & WR</option>
      <option <?php if ($center == "SER & SWR") echo "selected='selected'";?> >SER & SWR </option>
      <option <?php if ($center == "SR") echo "selected='selected'";?> >SR</option>
      </select>
       </label></td>       
    </tr>
    <tr>
      <td>Customer contact</td>
      <td><label><input type="phone" name="contact" value="<?php echo($contact); ?>"></label></td>
    </tr>
    <tr>
      <td>Handler</td>
      <td><label><input type="text" name="handler" value="<?php echo($handler); ?>"></label></td>
      <input type="hidden" name="id1" value="<?php echo $id;?>">
    </tr>
    <tr>
      <td><input type="submit" name="update" value="Update"></td><td></td>
    </tr>
   </table>
 </form>
   </article>
</body>
</html>