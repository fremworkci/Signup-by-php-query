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
<table align="center" border="1">
		<tr>
			<td>Name</td><td><?php echo $row->name; ?></td>
		</tr>
		<tr>
			<td>Email</td><td><?php echo $row->email; ?></td>
		</tr>
		<tr>
			<td><?php echo anchor("Admin/edit/".$row->id,'Edit'); ?></td>
		</tr>
</table>
</body>
</html>
<?php
}
?>