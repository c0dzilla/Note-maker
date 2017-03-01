<html>
<head lang='en'>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1 maximum-scale=1 user-scalable=no">
	<style type="text/css">

		body{
			background-color: #4286f4;
		}

		div{
			font-size: 3em;
			margin-top: 200px;
			text-align: center;
		}

</style>
</head>
<body>

<div>

	<?php


$description=$_POST["description"];
$name=$_POST["name"];

$servername="localhost";
$username="root";
$password="sdslabsmysql";
$dbname="myDB";

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "UPDATE Users SET data='$description' WHERE username='$name'";

if (mysqli_query($conn, $sql)){
	echo "UPDATION SUCCESSFUL";
}
else echo "FAILURE";

?>

</div>
</body>
</html>

