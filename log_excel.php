<?php
    include_once("connect.php");
    header( "Content-Type: application/vnd.ms-excel" );
    header( "Content-disposition: attachment; filename=log_detail".date('ymd').".xls" );

  $sql="SELECT * FROM daily_log ORDER BY Log_code DESC";
  $result = mysql_query( $sql, $con );
  if(! $result ) { die('Could not get data: ' . mysql_error());  }

        echo 'Log code'. "\t" .'Account number'. "\t" .'Email Subject'. "\t" .'Sender name'. "\t" .'Recieved date'. "\t" .'Case status'. "\t" .'Closed date'. "\t" .'Remark'. "\t" .'Handler'. "\n";

    while($res = mysql_fetch_array($result, MYSQL_ASSOC)) {

            echo $res['Log_code']. "\t" .$res['Accountno']. "\t" .$res['Email_subject']. "\t" .$res['Sender_name']. "\t" .$res['Recieved_date']. "\t" .$res['Case_status']. "\t" .$res['Closed_date']. "\t" .$res['Remark']. "\t" .$res['Handler'] . "\n";
}
?> 