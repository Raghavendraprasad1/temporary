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
    ?>
    <div class="admintitle" align="center">
    	<h4><a href="logout.php" style="float: right; color: #fff; font-size: 20px;" >Logout</a></h4>
        <h4><a href="../index.php" style="float: left; color: #fff; font-size: 20px;" >Back to Home</a></h4>
    	<h1>Welcome to admin Dashboard</h1>
    </div>
    <div class="dashboard">
    	<table style="width: 50%" border="1" align="center">
    		<tr>
    			<td>1.</td><td><a href="addstudent.php">Insert Student detail</a></td>
    		</tr>
    		<tr>
    			<td>2.</td><td><a href="updatestudent.php">Update Student detail</a></td>
    		</tr>
    		<tr>
    			<td>3.</td><td><a href="deletestudent.php">Delete Student detail</a></td>
    		</tr>
    	</table>
    </div>
    
    </body>
    </html>
