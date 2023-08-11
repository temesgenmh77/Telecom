<?php
  include("connect.php");
      $id = $_POST['id1'];
      $accountnumber = $_POST['accountnumber'];
      $totalamount = $_POST['totalamount'];
      $mpaid = $_POST['monthspaid'];      
      $ammountpaid = $_POST['ammountpaid'];
      $actionn = $_POST['actionn'];
      $ldate= $_POST['ldate'];
      $rdate = $_POST['rdate'];
      $rrdate = $_POST['rrdate'];
      $instperiod = $_POST['instperiod'];
      $category = $_POST['category'];
      $center = $_POST['center'];
      $status = $_POST['status'];
      $idate = $_POST['idate'];
      $response = $_POST['response'];
      $contact = $_POST['contact'];
      
      $handler = $_POST['handler'];    ///////////////////////////////////////////////////////////////////////////////////////
    // checking empty fields
    if(empty($accountnumber) || empty($totalamount) || empty($instperiod)) {            
        if(empty($accountnumber)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
        
        if(empty($totalamount)) {
            echo "<font color='red'>Age field is empty.</font><br/>";
        }
        
        if(empty($instperiod)) {
            echo "<font color='red'>Email field is empty.</font><br/>";
        }        
    } else {    
        ///////////////////////////////////////////////////////////////////////////////////
        //updating the table
        //$result = mysqli_query($mysqli, "UPDATE users SET name='$name',age='$age',email='$email' WHERE id=$id");

        $sql="UPDATE account SET accountno='$accountnumber',total_amount='$totalamount',months='$mpaid',amount_paid='$ammountpaid',inst_period='$instperiod',issue_date='$idate',reply_date='$rdate',response_date='$rrdate',last_date='$ldate',action_taken='$actionn',response='$response',category='$category',status='$status',center='$center',Contact='$contact' WHERE accountno='$id'";

        if (!mysql_query($sql,$con)) {    die('Error: ' . mysql_error(). "Wow");   }

         echo "1 record added";
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: display_account.php");
      }
    ?>