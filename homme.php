<?php
    session_start();
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

<?php 
include_once("connect.php");


$sql="SELECT * FROM account where status!='Closed'  AND  total_amount>amount_paid" ;
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }
?>

   
         <?php  
        $newdate = date("Y-m-d");
        $newdate1 = date("Y-m-d");
        
        while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {   
            $newdate = date("Y-m-d");
            $num = $res['inst_period'];
            $ndate = $res['last_date'];

            if($res['total_amount'] > $res['amount_paid']){      
                  for ($i =1; $i<=$num; $i++) {                      
                    if($ndate==$newdate){ 

                      echo "<p color='red'><h3> <b>Notice :</b>Today is the Payment deadline for Account No:".$res['accountno']. 
                      "The handler for this account is: ".$res['Handler'] ." and the contact no: ". $res['Contact']."</h3></p>";

                    }
                      $newdate = date("Y-m-d", strtotime(-$i ."months"));  
            }    

              }
        }
   ?>


<?php
$sql= "SELECT * FROM message ORDER BY 'posted_date' DESC limit 20";
  $result = mysql_query( $sql, $con );
   if(! $result ) { die('Could not get data: ' . mysql_error());  }

echo "<article>";
   echo "<body><table border='1'>";
            echo "<tr>";
                echo "<th>Title</th>";
                echo "<th>Content</th>";
                echo "<th>Posted date</th>";
                echo "<th>Posted_by</th>";
            echo "</tr>";
   while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
    echo "<tr>";
                
                echo "<td>" . $row['Title'] . "</td>";
                echo "<td>" . $row['Content'] . "</td>";
                echo "<td>" . $row['posted_date'] . "</td>";
                echo "<td>" . $row['Posted_by'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";

?>  
  </article>

<footer>Copyright &copy; ethiotelecom.et</footer>
</div>
</body>
</html>