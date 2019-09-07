<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
	$name=$_POST['name'];
	$id_work=$_POST['id_work'];
	$id_salary=$_POST['id_salary'];
	
	mysqli_query($conn,"UPDATE Name SET name='$name', id_work='$id_work', id_salary='$id_salary' where id='$id'");
	header('location:index.php');

?>