<?php
session_start();
 		if(isset($_SESSION['uid'])){
 			//echo $_SESSION['uid'];
 		}
 		else{
 			header('location: ../login.php');
 		}
  ?>
  <?php
  include('header.php');
  include('titlehead.php');

    ?>
    <form method="post" action="addstudent.php" enctype="multipart/form-data">
    	<table align="center" border="1"  style=" margin-top:5%;" >
            <tr>
                <th>Enter id</th>
                <td><input type="text" name="id" placeholder="Enter id" required></td>
            </tr>
    		<tr>
    			<th>Roll No.</th>
    			<td><input type="text" name="rollno" placeholder="Enter Roll no" required></td>
    		</tr>
    		<tr>
    			<th>full Name</th>
    			<td><input type="text" name="name" placeholder="Enter Full name" required></td>
    		</tr>
    		<tr>
    			<th>City</th>
    			<td><input type="text" name="city" placeholder="Enter City" required></td>
    		</tr>
    		<tr>
    			<th>Parents contact</th>
    			<td><input type="text" name="pcon" placeholder="Enter parents contact" required></td>
    		</tr>
    		<tr>
    			<th>Standard</th>
    			<td><input type="number" name="std" placeholder="Enter standard" required></td>
    		</tr>
    		<tr>
    			<th>Image</th>
    			<td> <input type="file" name="img"  ></td>
    		</tr>
    		<tr >
    			
    			<td colspan="2" align="center" ><input type="submit" name="submit" value="Submit"></td>
    		</tr>
    	</table>
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	include('../dbcon.php');
    $id=$_POST['id'];
	$rollno=$_POST['rollno'];
	$name=$_POST['name'];
	$city=$_POST['city'];
	$pcon=$_POST['pcon'];
	$std=$_POST['std'];
	$imagename=$_FILES['img']['name'];
	$tempname=$_FILES['img']['tmp_name'];

	move_uploaded_file($tempname,"../dataimg/$imagename");

	
	$qry="INSERT INTO student(id,rollno, name, city, pcontact,standard,image) VALUES ('$id','$rollno','$name','$city','$pcon','$std','$imagename')";
	
	$run=mysqli_query($con,$qry);
	

	if($run){
		
		?>
		<script type="text/javascript">
			alert('data inserted successfully');
		</script>
		<?php
	}
}

  ?>