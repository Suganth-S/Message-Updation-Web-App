<?php

include 'config.php'; // include db connectivity

$name = $_POST["name"]; // data from previous page in new variable
$userid = $_POST["userid"];
$mobilenumber = $_POST["mobilenumber"];
$mailid = $_POST["mailid"];
$password = $_POST["password"];
$cpassword = $_POST["cpassword"];
$otp = $_POST["otp"];

// INSERT INTO table_name (column1, column2,...) VALUES ( $...)

if($mysqli->query("INSERT INTO user (name, userid, mobilenumber, mailid, password,cpassword,otp) VALUES('$name', '$userid', '$mobilenumber', '$mailid', '$password', '$cpassword','$otp')"));
{
	echo 'Data inserted';
	echo '<br/>';

}
header ("location:../for login/login.php");

?>

