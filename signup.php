<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open("Signup/login");  ?>
<table>
	<tr>
		<td>Email</td><td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td>Password</td><td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td><input type="submit" value="Login"></td>
	</tr>
</table>
<?php echo form_close();  ?>
</body>
</html>