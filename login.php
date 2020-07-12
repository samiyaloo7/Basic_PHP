<!DOCTYPE html>
<html>
	<head>
		<title> Registration </title>
		<link rel="stylesheet" href="css/main.css" >
		<script src="js/main.js" ></script>	
	</head>
	<body>
		<?php include("top_row.html"); ?>
		<section class="reg-box">
			<form class="reg-form" action="letlogin.php" method="post">
				<div class="frm-ttl-box">
					<span> <a href="reg.php">Sign In</a> </span>
					<h3 class="frm-ttl" > Dive In </h3> 
				</div>
				<div class="frm-block">
					<input class="frm-field" type="text" name="lname" placeholder="Enter Name" required />
				</div>
				<div class="frm-block">
					<input class="frm-field" type="password" name="lpass" placeholder="Enter password" required />
				</div>
				<div class="frm-block">
					<input type="submit"class="frm-btns" name="log-btn" value="GO"/> 
					<input type="reset"class="frm-btns" value="Cancel" />
				<div>
			</form>
		</section>
		<?php include("footer.html"); ?>
	</body>
</html>