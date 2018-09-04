<html lang="en">
	<head>
		<title>Login Page</title>
			<link rel="stylesheet" href="../css/style.css">
	</head>
		<body style="background-color:#bdc3c7">
			<div id="main-wrapper">
				<center><h2>Admin Log-In</h2>
					<img src='../img/logo.png' class="avatar" />
				</center>
	<form class="myform" method="post"> 
	
		<b><label>User Name:</label></b><br>
			<input type="text" class="inputvalues" id="uname" placeholder="your_name" name="uname" required > <br />
				<b><label>Password:</label></b><br>
					<input type="password" class="inputvalues" id="password" placeholder="Password" name="password" required >
						<input type="submit" id="login_btn" name="login_btn" value="Login" >
							<input type="reset" id="cancel_btn" value="Reset" >
						</form>
					</div>
				</body>
				<?php
				error_reporting(E_ALL ^ E_NOTICE);
				
					$username=$_POST['uname'];
					$password=$_POST['password'];
					
					if(isset($_POST['login_btn']))
					{
						if($username=="ramjcad1"&&$password=="ganapathi")
							{
								header("location: adminpage.php");
							}
							else 
							{
							header("location: admin.php");
							}
					}
					
				?>
</html>