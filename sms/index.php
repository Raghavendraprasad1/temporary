<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
</head>
<body>
	<h1 align="center">Welcome To Student Management System</h1>
	<h5 align="center"><a href="login.php">Admin Login</a></h5>

	<form method="post" action="function.php">
		<table align="center" style="width: 30%" border="1">
		<tr>
			<th colspan="2" align="center">Student Information</th>
		</tr>
		<tr>
			<td align="center">Choose Standard</td>
			<td>
				<input type="number" name="std" required>

			 </td>
		</tr>
		<tr>
			<td align="center">Enter Rollno</td>
			<td><input type="text" name="rollno" required></td>
		</tr>
		<tr>
			<td colspan="2" align="center"><input type="submit" name="submit" value="Show Detail"></td>
		</tr>

	</table>
	</form>

</body>
</html>
	



