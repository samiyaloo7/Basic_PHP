<?php
	include("connection.php");
	if(isset($_POST['reg-btn'])) {
		$name=$_POST['rname'];
		$mail=$_POST['rmail'];
		$pass=md5($_POST['rpass']);
		$all=mysqli_query($c, "select * from users");
		$data=mysqli_query($c, "select * from users where uname='".$name."'");
		if($data->num_rows == 0){
			$i = $all->num_rows + 1;
			$q=mysqli_query($c, "insert into users values('".$i."','".$name."','".$mail."','".$pass."')");
			if($q) {
				header("location:login.php");
			}else {
				header("location:reg.php");
			}
		}
		else {
			echo "<script> alert('User already exists'); ";
			echo " window.location.replace('reg.php'); </script>";
		}
	}else {
		header("location:reg.php");
	}
	
?>