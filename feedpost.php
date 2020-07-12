<?php
	include("connection.php");
	if(isset($_POST['fbtn'])) {
		$name=$_POST['uname'];
		$feed=$_POST['ufeed'];
		$all = mysqli_query($c, "select * from feeds");
		$id = $all->num_rows;
		$id++;
		mysqli_query($c, "insert into feeds values('".$id."','".$name."','".$feed."')");
	}
	echo "<script> window.location.replace('feeds.php'); </script>";
?>