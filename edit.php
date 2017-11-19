<?php
foreach($email as $row)
{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php echo form_open("Admin/update");  ?>
<table align="center" border="1">
		<tr>
		<input type="hidden" name="getid" value="<?php echo $row->id; ?>">
			<td>Name</td><td><input type="text" name="name" value="<?php echo $row->name; ?>"></td>
		</tr>
		<tr>
			<td>Email</td><td><input type="text" name="email" value="<?php echo $row->email; ?>"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Update"></td>
		</tr>
</table>
<?php echo form_close(); ?>
</body>
</html>
<?php
}
?>