<?php
include('db.php'); //Database included.
session_start();
?>
<?php
	$name ="";
	$roll ="";
	$email ="";
	$gender ="";
	$phone ="";
	$photos ="";
	$id =0;
	$edit_state =false;

//Insert Data.
	if(isset($_POST['submit'])){
		$name =$_POST['name'];
		$roll =$_POST['roll'];
		$email =$_POST['email'];
		$gender =$_POST['gender'];
		$phone =$_POST['phone'];

		$filename = $_FILES['photos'] ['name'];
		$tmpname = $_FILES['photos']['tmp_name'];
		move_uploaded_file($tmpname, "image/".$filename);

		$sql= "INSERT INTO `table`(`name`, `roll`, `email`, `gender`, `phone`, `photos`) VALUES ('$name','$roll','$email','$gender','$phone', '$filename')";
		mysqli_query($dbcon,$sql);
		$_SESSION['message'] = "<h2>Data Inserted Successfully!</h2>"; 
		header('location: index.php');
	}

//Disply Data.
	$sql= "SELECT * FROM `table`";
	$query =mysqli_query($dbcon, $sql);

//Update data.
	if(isset($_POST['update'])){
		$name =mysqli_real_escape_string($dbcon, $_POST['name']);
		$roll =mysqli_real_escape_string($dbcon, $_POST['roll']);
		$email =mysqli_real_escape_string($dbcon, $_POST['email']);
		$gender =mysqli_real_escape_string($dbcon, $_POST['gender']);
		$phone =mysqli_real_escape_string($dbcon, $_POST['phone']);
		$id =mysqli_real_escape_string($dbcon, $_POST['id']);

		$filename = $_FILES['photos'] ['name'];
		$tmpname = $_FILES['photos']['tmp_name'];
		move_uploaded_file($tmpname, "image/".$filename);


		$sql= "UPDATE `table` SET `name`='$name',`roll`='$roll',`email`='$email',`gender`='$gender',`phone`='$phone',`photos`='$filename' WHERE id = $id";
		mysqli_query($dbcon,$sql);
		$_SESSION['message'] = "<h2>Data Updated Sucessfully!</h2>";
		header('location:index.php');
	}

//Delete Data
	if (isset($_GET['del'])) {	
		$id =$_GET['del'];
		$sql =" DELETE FROM `table` WHERE id = $id";
		mysqli_query($dbcon,$sql);
		$_SESSION['message'] = "<h2>Data deleted!</h2>";
		header('location:index.php');
	}
	
//Pagination.

	$start=0;
	$limit=5;
	$re = mysqli_query($dbcon, "SELECT * FROM `table` ");
	$total=mysqli_num_rows($re);

		if(isset($_GET['id']))
			{
  			$id =$_GET['id'];
  			$start=($id-1)*$limit;
			}
		else
			{
  			$id =1;
			}
	$page=ceil($total/$limit);
	$query = mysqli_query($dbcon,"SELECT * FROM `table`  limit $start, $limit");

?>





