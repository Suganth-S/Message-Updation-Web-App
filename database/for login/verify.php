<?php

include 'config.php';   // here database connectivity file is linked

$userid = $_POST["userid"]; // previous page data 
$password = $_POST["password"];
$flag = 'true';




$result = $mysqli->query('SELECT * from user ');  // fetch all elements from database

if($result)
{  
  while($obj = $result->fetch_object()) //  place one by one element from db in the variable obj 
  {  
	 
    if($obj->userid === $userid && $obj->password === $password)  // $obj->batchno  here, obj is variable and batchno is my column in database
	{  
	echo "login success";
    header("location:homepage.php"); // redirect to next page
    }
	else 
	{
        if($flag === 'true')
		{
          redirect(); // calling function
		  
          $flag = 'false';
        }
    }
  }
}

function redirect() // function definition
{
  echo '<h1>Invalid Login! Redirecting...</h1>';
  
  header("Refresh: 3; url=login.php");
  
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
        <title>Blank App</title>
    </head>
    <body>
        <script type="text/javascript" src="cordova.js"></script>
		 </body>
</html>
