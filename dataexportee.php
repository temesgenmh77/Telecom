<?php
    include_once("connect.php");
    header( "Content-Type: application/vnd.ms-excel" );
    header( "Content-disposition: attachment; filename=account_detail".date('ymd').".xls" );



  $sql="SELECT * FROM account ORDER BY accountno DESC";
  $result = mysql_query( $sql, $con );
  if(! $result ) { die('Could not get data: ' . mysql_error());  }
        echo 'Account Number'. "\t" .'Total amount'. "\t" .'Months paid'. "\t" .'Amount paid'. "\t" .'Installment period'. "\t" .'Recieved date'. "\t" .'Issued date'. "\t" .'USB reply date'. "\t" .'Last date'. "\t" .'Customer response'. "\t" .'Action taken'. "\t" .'Customer status'. "\t" .'Category'. "\t" .'Collection center'. "\t" .'Contact'. "\t" .'Handler'."\n";

    while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {
            

            echo $res['accountno']. "\t" .$res['total_amount']. "\t" .$res['months']. "\t".$res['amount_paid']. "\t" .$res['inst_period']. "\t" .$res['response_date']. "\t" .$res['issue_date']. "\t" .$res['reply_date']. "\t" .$res['last_date']. "\t" .$res['response']. "\t" .$res['action_taken']. "\t" .$res['status']. "\t" .$res['category']. "\t" .$res['center']. "\t" .$res['Contact']. "\t" .$res['Handler']."\n";


}


   // echo 'First Name' . "\t" . 'Last Name' . "\t" . 'Phone' . "\n";
    //for($i=0;$i<10;$i++)
    //echo 'John' . "\t" . 'Doe' . "\t" . '555-5555' . "\n";
?> 