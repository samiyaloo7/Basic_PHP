<!DOCTYPE html>
<?php 
	session_start();
	if(isset($_SESSION['uname'])){
		// setcookie("name", "", time() - 1, "/"); // ------- to delete the cookie using name. (3600 one hour)
		// setcookie("name",$_SESSION['uname'],time()+(86400*30),"/","localhost",false,true); // ------- to set with all parameters for one month. 
		// if(count($_COOKIE) > 0) {
			// echo "Cookies are enabled.";
		// } else {
			// echo "Cookies are disabled.";
		// }
?>
<html>
	<head>
		<title> home </title>
		<link rel="stylesheet" href="css/main.css" >
	</head>
	<body>
		<?php include("top_row.html"); ?>
		<header class="header-banner">
			<div class="banner-opts">
				<p id="username"> User : <span> <?php echo $_SESSION['uname']?></span> <a href="logout.php"> Logout </a> </p>
				
			</div>
			<h1> <span>S</span>amiyalization </h1>
			<p> This is Samiyalization. </p>
		</header>
		<?php include("footer.html"); ?>
	</body>
</html>
<?php 
	}else {
		header("location:login.php");
	}
?>