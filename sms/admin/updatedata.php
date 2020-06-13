
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

	
	$qry="UPDATE student SET id = '$id', rollno='$rollno' , name='$name', city='$city', pcontact='$pcon', standard='$std', image='$imagename' WHERE student.id = '$id' ";
	
	$run=mysqli_query($con,$qry);
	//$row=mysqli_num_rows($run);
	

	if($run){
		//echo "line affected".$row;
		?>
		<script type="text/javascript">
			alert('data Updated successfully');
			window.open('updateform.php?sid=<?php echo $id; ?>', '_self');
		</script>
		<?php
	}
}
?>