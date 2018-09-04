

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration Page</title>
		<link rel="stylesheet" href="../css/style.css">
				<script type="text/javascript" src="../js/script.js"></script>
</head>
	<body style="background-color:#bdc3c7">
<body>
						<div class="container">
							<div id="main-wrapper">
								<center> <h2 class="title">Become A Member</h2>
										<img src='../img/1.png' class="avatar" />
									</center>
                                      <form class="myform" method="POST" action="insert1.php" >
									  
                                        <div class="row form-group">
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Name :</label></b><br>
                                                <div class="input-group"><input type="text" class="inputvalues" placeholder="Name" name="name" onfocus="this.placeholder = ''" class="form-control" onKeyPress="return onlyAlphabets(this.event);" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
												<b><label>User Name:</label></b><br>
                                                <div class="input-group"><input type="text" class="inputvalues" placeholder="User_id"  name="userid" onfocus="this.placeholder = ''" class="form-control" onKeyPress="return isAlphaNumeric(this.event);" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Mobile Number:</label></b><br>
                                                <div class="input-group"><input type="text" class="inputvalues" placeholder="Mobilenumber" name="mobilenumber" onfocus="this.placeholder = ''" class="form-control" onKeyPress="return isNumberKey(this.event)" onBlur="isMobileNo(this.value); required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Mail ID :</label></b><br>
                                                <div class="input-group"><input type="text" class="inputvalues" placeholder="Mail id"  name="mailid" onfocus="this.placeholder = ''" class="form-control" onBlur="checkMail(this.value);"  required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Password :</label></b><br>
                                                <div class="input-group "><input type="password" class="inputvalues" placeholder="Password" name="password"  id="pwd" class="form-control" onBlur="pwdMatch();" required>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-xs-6">
												<b><label>Confirm Password :</label></b><br>
                                                <div class="input-group"><input type="password" class="inputvalues" placeholder="Confirm Password" name="cpassword" id="cpwd" class="form-control" onBlur="pwdMatch()"; required>
                                                    
                                                </div>
                                            </div>
											<div class="col-sm-6 col-xs-6">
												<b><label>OTP :</label></b><br>
													<input name="otp"type="password" class="inputvalues" placeholder="Confirm OTP" /><input type="submit" id="otp_btn" value="Get OTP"/ required><br>
											</div>
											<input type="submit" id="signup_btn" value="Register">
                                              <input type="reset" id="back_btn" value="Reset" >
							
										</form>
				</div>
    </body>
</html>

		
		



    