<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin Page</title>
		<link rel="stylesheet" href="../css/style.css">
</head>
	<body style="background-color:#bdc3c7">
<body>
	
							<div id="main-wrapper">
								<center> <h2 class="title">Welcome Admin</h2>
										<img src='../img/1.png' class="avatar" />
								</center>
							 <form class="myform" method="POST" action="send.php" >
								<div class="row form-group">
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Enter Your Message Here:</label></b><br>
                                                 <textarea id="msg" class="inputvalues" placeholder="Enter Your Message Here" name="sendmsg" onfocus="this.placeholder = ''" class="form-control" style="height:200px;font-size:14pt;">
                                                </textarea>
												</div>
                                            </div>
								<input type="submit" id="send_msg" value="Send Message">
							</form>