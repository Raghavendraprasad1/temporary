 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<?php
 //if(isset($_POST['submit'])){
		$std=$_POST['std'];
		$rollno=$_POST['rollno'];
		include('dbcon.php');
		$qry=" SELECT * FROM student WHERE standard='$std' AND rollno='$rollno' ";
		$run=mysqli_query($con,$qry);
		if(mysqli_num_rows($run)>0){
			$data=mysqli_fetch_assoc($run);
			?>
			<table border="1" align="center" width="40%">
				<tr>
				<th colspan="3">Student Detail</th>
			</tr>
			<tr>
				<td rowspan="5"><img src="dataimg/<?php echo $data['image'];?>" style="max-width: 200px; max-height: 150px;"></td>
				<th>Roll no</th>
				<td><?php echo $data['rollno'];?></td>
			</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name']; ?></td>
				</tr>
				<tr>
				
				<th>city</th>
				<td><?php echo $data['city']; ?></td>
			</tr>
			<tr>
				
				<th>parents contact</th>
				<td><?php echo $data['pcontact']; ?></td>
			</tr>
			<tr>
				
				<th>Standard</th>
				<td><?php echo $data['standard']; ?></td>
			</tr>
			</table>

 

<?php
	}
	else{
		echo "<script>alert('no student found');
		window.open('index.php', '_self');</script>";
		

	}
	//header('location:index.php');

//}
?>
 
 </body>
 </html>