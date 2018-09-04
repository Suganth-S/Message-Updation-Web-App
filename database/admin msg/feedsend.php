<?php

include 'feedconfig.php'; // include db connectivity

$live_feed = $_POST["live_feed"]; // data from previous page in new variable
// INSERT INTO table_name (column1, column2,...) VALUES ( $...)

$date_time = date('Y-m-d h:i:s', time());
if($mysqli->query("INSERT INTO feed (live_feed,msg_date_time,read_status) VALUES('$live_feed','$date_time',0)"))
{
	echo 'Data inserted<br>';
	header ("location:feedsuccess.php"); 
}
else
	echo 'Data not inserted<br>';

?>
