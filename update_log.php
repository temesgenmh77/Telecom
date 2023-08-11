<?php
  include("connect.php");
   $id = $_POST['id'];
   $subject = $_POST['subject'];
   $case = $_POST['case'];
   $acc = $_POST['acc'];
   $rrdate = $_POST['rrdate'];
   $closed = $_POST['closed'];
   $remark = $_POST['remark'];
   $name = $_POST['name'];  
   


        $sql="UPDATE daily_log SET Accountno='$acc',Email_subject='$subject',Sender_name='$name', Recieved_date='$rrdate',Closed_date='$closed' ,Case_status='$case', Remark='$remark' WHERE Log_code='$id'";
//,Recieved_date='$rrdate',Closed_date='$closed',    Remark='$remark',Case_status='$case'


        if (!mysql_query($sql,$con)) {    die('Error: ' . mysql_error() );   }

         echo "1 record added";
        
        //redirectig to the display page. In our case, it is index.php
        header("Location: manage_log.php");
      
    ?>