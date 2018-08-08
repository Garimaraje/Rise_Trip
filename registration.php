<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>

</head>
<body>
<div class="header">
	<h2>Register</h2>
</div>
<link rel="stylesheet" href="style1.css">

<style type="text/css">
	body
	{
		background-image:url(images/2.jpg);
				
    }
</style>

<form method="post" action="register.php">
	<!-- <input type="hidden" name="id" value="<?php echo $loggedUser['Id']; ?>" /> -->
	<div class="input-group">
		<label>Name</label>
		<input type="text" name="name" required />
	</div>
	<div class="input-group">
		<label>Email</label>
		<input type="email" name="email" required />
	</div>
	<div class="input-group">
		<label>Password</label>
		<input type="password" name="password" required />
	</div>
	<div class="input-group">
		<label>Mobile no.</label>
		<input type="text" name="mobile" required />
	</div>
	<div class="input-group">
		<button type="submit" class="btn" name="register_btn">Register</button>
	</div>
	<!--<p>
		Already a member? <a href="login.php">Sign in</a>
	</p>-->
</form>
</body>
</html>