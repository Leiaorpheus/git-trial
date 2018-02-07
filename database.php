<?php
// sample database code
$servername = "yourserver";
$username = "yourname";
$password = "yourpassword";
$dbname = "databasename";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
	echo "Failed to connect to database: ".mysqli_connect_error();
	die();
}


?>
