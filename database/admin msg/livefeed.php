<?php

$db_username = 'root';   
$db_password = '';
$db_name = 'livefeed'; 
$db_host = '127.0.0.1';
$con= mysqli_connect($db_host, $db_username, $db_password); // make connection with your db
mysqli_select_db($con,$db_name);
$selMsg="SELECT * FROM feed ORDER BY msg_date_time DESC";
$result=mysqli_query($con,$selMsg);
$numRows=mysqli_num_rows($result);

$unreadMsg="SELECT * FROM feed WHERE read_status=0";
$unreadRows=mysqli_query($con,$unreadMsg);
?>

<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />


<head>
	<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
    <meta name="author" content="">

<title>Live Feed</title>
	<link rel="stylesheet" href="../css/style.css">
		<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
			<script src="../jquery/jquery-1.11.1.min.js"></script>
				<script src="../js/bootstrap.min.js"></script>
</head>
	<body style="background-color:#bdc3c7">
	
<div id="main-wrapper">
			<center> <h2 class="title"><font face="Balloon XBd BT" size="12" color="saffron" >Welcome To Live Feed</font></h2>
			</center>
			<br />
	<div class="container">  
		<div class="col-sm-9 col-md-10">
			
						<?php
							$unreadResult=mysqli_num_rows($unreadRows);
								if($unreadResult>0)
									echo'<div class ="text-warning" style="color:#28a745; font-size:20px; text-align: center;"> You have '.$unreadResult.' Unread Feed(s)</div>';
						?>
		<!-- Tab panes -->
			<div class="tab-content">
				<div id="scroll">   													
					<?php		
						while($row=mysqli_fetch_assoc($result))
							{
								echo  '<div class="tab-pane fade in active" id="home">
									<div class="list-group">';
							
								if($row['read_status']==0) 
									$unread_indication="font-weight:600; color:#ff0000;";
								else
									$unread_indication="";
								echo '<a href="#" class="list-group-item">
										<span class="name" style="min-width: 130px;
											display: inline-block;'.$unread_indication.'">'.$row['live_feed'].'</span>
									 <span class="badge">'.$row['msg_date_time'].'</span> </a>'.'<br/>';
							}
							echo '</div></div>';
							if($numRows)
							{
								$update_status="UPDATE feed SET read_status = 1";
								mysqli_query($con,$update_status);
							}
					?>		
			
				</div>	
			</div>
		</div>
	</div>
</div>
	</body>
</html>