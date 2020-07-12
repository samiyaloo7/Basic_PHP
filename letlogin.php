<?php
	include("connection.php");
	if(isset($_POST['log-btn'])) {
		$name=$_POST['lname'];
		$pass=$_POST['lpass'];
		$flag=false;
		$data=mysqli_query($c, "select * from users where uname='".$name."'");
		if($data->num_rows == 0){
			echo "<script> alert('No such user found'); ";
			echo " window.location.replace('login.php'); </script>";
		}
		else {
			while($i=mysqli_fetch_array($data)){
				if($i['upass'] == md5($pass)) {
					$flag=true;
				}
			}
			if($flag==true){
				session_start();
				$_SESSION['uname'] = $name;
				header("location:index.php");
			}else {
				echo "<script> alert('Password not match'); ";
				echo " window.location.replace('login.php'); </script>";
			}
		}
	}else {
		header("location:login.php");
	}
	
?>