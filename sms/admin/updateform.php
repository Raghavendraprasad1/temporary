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
  include('../dbcon.php');
  $sid=$_GET['sid'];
  $qry="SELECT * FROM student WHERE id='$sid' ";
  $run=mysqli_query($con,$qry);
  $data=mysqli_fetch_assoc($run);

    ?>
     <form method="post" action="updatedata.php" enctype="multipart/form-data">
    	<table align="center" border="1"  style=" margin-top: 5%;" >
            <tr>
                <th>Enter id</th>
                <td><input type="text" name="id" value="<?php echo $data['id']; ?>" required></td>
            </tr>
    		<tr>
    			<th>Roll No.</th>
    			<td><input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required></td>
    		</tr>
    		<tr>
    			<th>full Name</th>
    			<td><input type="text" name="name" value="<?php echo $data['name']; ?>" required></td>
    		</tr>
    		<tr>
    			<th>City</th>
    			<td><input type="text" name="city" value="<?php echo $data['city']; ?>" required></td>
    		</tr>
    		<tr>
    			<th>Parents contact</th>
    			<td><input type="text" name="pcon" value="<?php echo $data['pcontact']; ?>" required></td>
    		</tr>
    		<tr>
    			<th>Standard</th>
    			<td><input type="number" name="std" value="<?php echo $data['standard']; ?>" required></td>
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