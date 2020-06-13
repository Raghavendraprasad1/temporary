
<?php

include('../dbcon.php');
$id=$_GET['sid'];
    

	//move_uploaded_file($tempname,"../dataimg/$imagename");

	
	$qry="DELETE FROM student WHERE id='$id' ";
	
	$run=mysqli_query($con,$qry);
	//$row=mysqli_num_rows($run);
	

	if($run){
		//echo "line affected".$row;
		?>
		<script type="text/javascript">
			alert('data Deleted successfully');
			window.open('deletestudent.php', '_self');
		</script>
		<?php
	}

?>