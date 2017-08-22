<html>
<head>
<style>
#frmregister { 
	padding: 20px 60px;
	background: #B6E0FF;
	color: #555;
	display: inline-block;
	border-radius: 4px; 
}
.field-group { 
	margin:15px 0px; 
}
.input-field {
	padding: 8px;width: 200px;
	border: #A3C3E7 1px solid;
	border-radius: 4px; 
}
.reset-button {
	background: #65C370;
	border: 0;
	padding: 8px 20px;
	border-radius: 4px;
	color: #FFF;
	text-transform: uppercase; 
}
.member-dashboard {
	padding: 40px;
	background: #D2EDD5;
	color: #555;
	border-radius: 4px;
	display: inline-block;
	text-align:center; 
}
.register-button {
	background: #65C370;
	border: 0;
	padding: 8px 20px;
	border-radius: 4px;
	color: #FFF;
	text-transform: uppercase; 
	
}
.error-message {
	text-align:center;
	color:#FF0000;
}
.demo-content label{
	width:auto;
}
</style>
</head>
<?php
$conn = mysqli_connect("localhost","id2646703_root","12345","id2646703_users");
if(isset($_POST["name"]))
	{
		$name=$_POST['name'];
		$query = "INSERT INTO users ( `name`, `user_name`, `password`, `address`, `phone`, `register_no`)
		VALUES(
		'".$_POST[ "name" ]              ."',
		'".$_POST[ "user_name" ]              ."',
		'".$_POST[ "password" ]              ."',
		'".$_POST[ "address" ]              ."',
		'".$_POST[ "phone" ]              ."',
		'".$_POST[ "register_no" ]        ."'
		)";
	
	$result = $conn->query($query);
		
	
		?><form method="post" action="index.php">	<tr>
					<div class="field-group">
					<td colspan="4" align="center">
						
		<div><input type="submit" name="login1" value="login" class="register-button"></div> </td>
							</div>
				</tr></form>

	<?php }
	?>


<center>
<form method="post">	
<table border="0">
<center><b>REGISTER</b></center>

<tr>
<td>Name</td>
    <td>
      <input type="TEXT" name="name" size="25">
    </td>
	</tr>
	<tr>
	<td>User name</td>
    <td><input type="TEXT" name="user_name" size="25"></td>
  </tr>
  <tr>
  <td>Password</td>
    <td><input type="TEXT" name="password" size="25"></td>
  </tr>
  <tr>
	<td>Address</td>
    <td><input type="TEXT" name="address" size="25"></td>
  </tr>
    <tr>
	<td>Phone</td>
    <td><input type="TEXT" name="phone" size="25"></td>
  </tr>
	
	 <tr>
	<td>Register Number</td>
    <td><input type="TEXT" name="register_no" size="25"></td>
  </tr>
	<tr>
					<div class="field-group">
					<td colspan="4" align="center">
						
		<div><input type="submit" name="register" value="Register" class="register-button"></div> </td>
							<td colspan="4" align="center">
						<div><input type="reset" name="reset1" value="Reset" class="reset-button" /></div>
						</td></div>
				</tr>
			

</table>
</form>
</center>
</html>