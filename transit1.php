<html>
<head lang='en'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
	<style type="text/css">

		body{
			background-color: #4286f4;
		}

		span{
			font-size: 3em;
			text-align: center;
		}

		.form{
			margin-top: 80px;
			margin-left: 230px;
		}

		.button{
			margin-top: 30px;
		}

		.notes{
			margin-top: 30px;
			background-color: #ff0;
			padding: 8px;
		}

		.field{
			padding: 16px;
		}

		</style>
</head>
<body>

<?php

$email=$_POST["login_email"];
$pass=$_POST["login_password"];

$servername="localhost";
$username="root";
$password="sdslabsmysql";
$dbname="myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT username FROM Users WHERE email = '$email' and password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if ($count==1){
      	echo "You are logged in as ";
      	print $row['username'];
      }
      else{
      	echo "Invalid email or password";
      }

?>

<div class="notes">
	<span>My notes</span><br><br>
	<?php

	$sql = "SELECT data FROM Users WHERE email = '$email' and password = '$pass'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $count = mysqli_num_rows($result);

      if ($count==1){
      	echo $row['data'];
      }
      
?>

	</div>
<div class="form">
<form action="transit2.php" method="post">
<span>Edit notes</span> <br />
<div class="field">
				Name:<br> <input type="text" name="name"><br>
			</div>
<textarea rows="20" cols="100" name="description">
</textarea><br>
<div class="button">
<input type="submit" value="Save" /></div>
</form>
</div>
</body>
</html>

