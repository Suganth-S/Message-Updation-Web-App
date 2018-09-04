<html lang="en">
	<head>
	<meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
		<title>Login Page</title>
			<link rel="stylesheet" href="../css/style.css">
	</head>
		<body style="background-color:#bdc3c7">
			<script type="text/javascript" src="cordova.js"></script>
			<div id="main-wrapper">
				<center><h2>Member Log-In</h2>
					<img src='../img/logo.png' class="avatar" />
				</center>
			
	<form class="myform" method="POST" action="verify.php"> 
	
		<b><label>User Name:</label></b><br>
			<input type="text" class="inputvalues" placeholder="user_name" name="userid" required > <br />
				<b><label>Password:</label></b><br>
					<input type="password" class="inputvalues" placeholder="Password" name="password" onfocus="this.placeholder = ''" required >
						<input type="submit" id="login_btn" value="Login" >
							<input type="reset" id="cancel_btn" value="Reset" >
			</div>
	</form>
			</body>
</html>