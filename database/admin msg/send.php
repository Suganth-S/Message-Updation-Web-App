<?php

include 'config.php'; // include db connectivity

$sendmsg = $_POST["sendmsg"]; // data from previous page in new variable
// INSERT INTO table_name (column1, column2,...) VALUES ( $...)

$date_time = date('Y-m-d h:i:s', time());
if($mysqli->query("INSERT INTO msg (sendmsg,msg_date_time,read_status) VALUES('$sendmsg','$date_time',0)"))
{
	echo 'Data inserted<br>';
	header ("location:success.php"); 
}
else
	echo 'Data not inserted<br>';

?>
