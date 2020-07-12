<!DOCTYPE html>
<html>
	<head>
		<title> Registration </title>
		<link rel="stylesheet" href="css/main.css" >
		<script src="main.js" ></script>
	</head>
	<body>
		<?php include("top_row.html"); ?>
		<section class="reg-box">
			<form class="reg-form" action="register.php" method="post">
				<div class="frm-ttl-box">
					<span> <a href="login.php">Log In</a> </span>
					<h3 class="frm-ttl" > Join Us </h3> 
				</div>
				<div class="frm-block">
					<input class="frm-field" type="text" id="rname" name="rname" placeholder="Enter Name" required />
				</div>
				<div class="frm-block">
					<input class="frm-field" type="email" id="rmail" name="rmail" placeholder="Enter E-mail" required />
				</div>
				<div class="frm-block">
					<input class="frm-field" type="password" id="rpass" name="rpass" placeholder="Enter password" required />
				</div>
				<div class="frm-block">
					<input class="frm-field" type="password" id="rrpass" name="rrpass" placeholder="Re-enter password" required />
				</div>
				<div class="frm-block">
					<input type="submit" id="reg-btn" class="frm-btns" name="reg-btn" value="Register" hidden /> 
					<input type="button" class="frm-btns" name="reg-btn" value="Register" onclick="validateReg()" /> 
					<input type="reset" id="cnl-btn" class="frm-btns" value="Cancel" />
				<div>
			</form>
		</section>
		<?php include("footer.html"); ?>
	</body>
</html>