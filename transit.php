<!DOCTYPE html>
<html>
<head lang='en'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
	<style type="text/css">

		body{
			background-color: #4286f4;
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


<?php
$name=$_POST["name"];
$email=$_POST["email"];
$pass=$_POST["password"];
echo 'Welcome! Your username is ';
echo $name;
echo '<br> Your registered email is ';
echo $email;

$servername="localhost";
$username="root";
$password="sdslabsmysql";
$dbname="myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Users (username, email, password)
VALUES ('$name', '$email' , '$pass')";

if ($conn->query($sql) === TRUE) {
    echo "<br>Congrats! You have been registered.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>

</form>

		<div class="login">Login</div>

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