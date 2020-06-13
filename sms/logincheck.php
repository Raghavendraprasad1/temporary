<!DOCTYPE html>
<html>
<head>
	<title>insert into admin table</title>
</head>
<body>
	<h3 align="center">Insert Admin Data</h3>
	<form action="logincheck.php" method="post">

		<table align="center">
			<tr>
				<th>enter username :</th>
		<td><input type="text" name="uname"></td>
			</tr>
		<tr>
			<th>enter password :</th>
		<td><input type="password" name="pwd"></td>
		</tr>
		<tr><td colspan="2" align="center"><input type="submit" name="submit" value="Save"></td></tr>
		</table>
		
	</form>
	<?php
	if(isset($_POST['submit'])){
		$con=mysqli_connect("localhost","root","","phpprojectsms");
		if(!$con){
			echo "connection not established";
		}

		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
		$qry="INSERT INTO admin(username,password) VALUES('$uname','$pwd')";
		$run=mysqli_query($con,$qry);

		//$row=mysqli_num_rows($run);
		//echo "number of rows". $row;
		if($run){
			echo "good";
		}
		else{
			echo "bad";
		}
	} 
	 ?>

</body>
</html>