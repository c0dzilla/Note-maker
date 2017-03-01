<!DOCTYPE html>
<html>
<head lang='en'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
	<style type="text/css">

		body{
			background-color: #4286f4;
		}

		.signup {
			font-size: 3em;
			width: 100%;
			text-align: center;
		}

		.login{
			font-size: 3em;
			width: 100%;
			text-align: center;
		}

		.form{
			margin: auto;
			width: 50%;
			color: #fff;
		}
		input{
			padding: 8px 2px;
			background-color: #e5e2cc;
		}

		.field{
			padding: 16px;
		}

	</style>
</head>
<body>

		<div class="signup">Signup</div>

		<form class="form" action="transit.php" method="post">
			<div class="field">
				Name:<br> <input type="text" name="name"><br>
			</div>

			<div class="field">
				E-mail:<br> <input type="text" name="email"><br>
			</div>

			<div class="field">
				Password: <br><input type="text" name="password"><br>
			</div>

			<br>
			<div class="submit">
				<input type="submit" value="Register">
			</div>
</form>
		

		<div class="login">or Login</div>

		<form class="form" action="transit1.php" method="post">

			<div class="field">
				E-mail:<br> <input type="text" name="login_email"><br>
			</div>

			<div class="field">
				Password: <br><input type="text" name="login_password"><br>
			</div>

			<br>
			<div class="submit">
				<input type="submit" value="Login">
			</div>
</form>

</body>
</html>