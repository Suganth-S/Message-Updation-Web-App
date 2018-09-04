<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact Form</title>
		<link rel="stylesheet" href="../css/style.css">
</head>
	<body style="background-color:#bdc3c7">
<body>
	<div id="main-wrapper">
			<img src="../img/logo.png" style="margin:auto; width:400px;display:block" />
			<center><font size="5px" >
				<form name="contactform" method="post" action="send_form_email.php">
					<table width="450px" cellpadding="10px">
					<tr>
					<td valign="top">
						<label for="first_name">First Name *</label>
					</td>
					<td valign="top">
						<input  type="text" name="first_name" maxlength="50" size="30">
					</td>
					</tr>
					
					<tr>
						 <td valign="top"">
						  <label for="last_name">Last Name *</label>
						 </td>
						 <td valign="top">
						  <input  type="text" name="last_name" maxlength="50" size="30">
						 </td>
						</tr>
						<tr>
						 <td valign="top">
						  <label for="email">Email Address *</label>
						 </td>
						 <td valign="top">
						  <input  type="text" name="email" maxlength="80" size="30">
						 </td>
						</tr>
						<tr>
						 <td valign="top">
						  <label for="telephone">Telephone Number</label>
						 </td>
						 <td valign="top">
						  <input  type="text" name="telephone" maxlength="30" size="30">
						 </td>
						</tr>
						<tr>
						 <td valign="top">
						  <label for="comments">Comments *</label>
						 </td>
						 <td valign="top">
						  <textarea  name="comments" maxlength="1000" cols="28" rows="7"></textarea>
						 </td>
						</tr>
						<tr>
						 <td colspan="2" style="text-align:center">
						  <input type="submit" value="Submit" id="send_msg">
						 </td>
						</tr>
						</table>
						</form>
						</font>
						</center>

</body>
</html>