<?php include('server.php'); 
	if (empty($_SESSION['username'])) {
		header('location : login.php');
	}
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
<div class="header">
	<h1>Home Page</h1>
</div>
<div class="content">
	<?php if(isset($_SESSION['success'])): ?>
		<div class="error success">
			<h3>
				<?php
				  	 echo $_SESSION['success'];
				  	 unset($_SESSION['success']);
				?>
			</h3>
		</div>
	<?php endif ?>

	<?php if(isset($_SESSION["username"])): ?>
		<p>WELCOME <?php echo $_SESSION['$username']; ?></p>
		<p><a href="index.php?logout='1'" style="color: red;">Logout</a></p>
	<?php endif ?>
	</div>
</body>
</html>
