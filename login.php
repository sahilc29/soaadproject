<? include('server.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
<div class="header">
	<h1>Login Page</h1>
</div>
<form method="post" action="login.php">
	<?php include ('errors.php'); ?>
	<div class="input-group">
		<strong>Username:</strong>
		<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
	<div class="input-group">
		<strong>Password:</strong>
		<input type="password" name="password">
	    </div>
	<div class="input-group">
		<button type="submit" name="login" class="btn">Login</button>
	</div>
	<p>Don't have account?<a href="register.php">Sign up</a></p>
	
</form>
</body>
</html>
