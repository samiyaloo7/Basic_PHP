<!DOCTYPE html>
<?php 
	include("connection.php");
	session_start();
	if(isset($_SESSION['uname'])){
?>
<html>
	<head>
		<title> home </title>
		<link rel="stylesheet" href="css/main.css" >
		<link rel="stylesheet" href="css/feedstyle.css" >
	</head>
	<body>
	
		<?php include("top_row.html"); ?>
		
		<section class="feed-box">
			<h1>Feeds</h1>
			<div class="feedin-box" >
				<h1> Post your Feedback </h1>
				<form action="feedpost.php" method="post">
					User : <input type="text" name="uname" value="<?php echo $_SESSION['uname']; ?>" />
					<textarea name="ufeed" class="feed-area" required ></textarea>
					<input type="submit" name="fbtn" value="POST">
				</form>
			</div>
			<div class="feeddisp-box" >
				<h1> All Feedback's </h1>
				<?php 
					$feeds = mysqli_query($c, "select * from feeds");
					while ($feed = mysqli_fetch_array($feeds)) {
				?>
				<div class="feeds">
					<h3 > <?php echo $feed['fname'] ?> </h3> <hr />
					<p> <?php echo $feed['feed'] ?> </p>
				</div>
				<?php 
					}
				?>
			</div>
		</section>
		
		<?php include("footer.html"); ?>
		
	</body>
</html>
<?php 
	}else {
		header("location:login.php");
	}
?>