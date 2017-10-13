<?php
include ('server.php');
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>

<div class="header">
	<h1>REGISTER</h1>
</div>
<div>
<form method="post" action="register.php">
	<?php include('errors.php'); ?>
	<div class="input-group">
		<strong>Username:</strong>
		<input type="text" name="username" value="<?php echo $username;?>">
	</div>
	<div class="input-group">
		<strong>Email:</strong>
		<input type="text" name="email" value="<?php echo $email;?>">
	</div>
	<div class="input-group" >
		<strong>Password:</strong>
		<input type="password" name="password_1">
    </div>
	<div class="input-group">
		<strong>Confirm Password:</strong>
		<input type="password" name="password_2">
	</div>
	<div class="input-group">
		<button type="submit" name="register" class="btn">Register</button>
	</div>
	<p>Already have account?<a href="login.php">Sign in</a></p>
</div>
</form>
</body>
</html>
