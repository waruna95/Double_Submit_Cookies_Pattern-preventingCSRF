<!--
IT15060822
W.M.W.G.Wijesundara
-->
<?php
// If user already logged in, index page redirected to home page
ob_start();
session_start();
if(isset($_SESSION['USERNAME'])){
	header("location: ./views/home.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Double Submit Cookie Pattern</title>
		<link rel="stylesheet" href="./css/style.css">
	</head>
	<body>
		<!-- form action send to validateClass.php via POST Request -->
		<form action="./classes/validateClass.php" method="post">
			<!-- here shows the errors if any unathurised accesses -->
			<div class="">
				<?php
					if(isset($_GET['er'])){
						echo '<h1 style="text-align:center;color:red;">'.$_GET['er'].'</h1><br />';
					}
				?>
			</div>
			<div class="container">
				<!-- username -->
				<label for="uname"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="uname" required>
				<!-- Password -->
				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="psw" required>
				<!-- Submit Button -->
				<button type="submit">Login</button>
			</div>
		</form>
	</body>
</html>