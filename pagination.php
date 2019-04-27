<?php
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
