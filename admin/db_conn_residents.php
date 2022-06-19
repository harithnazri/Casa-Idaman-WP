<?php

$server = "localhost";
$username = "root";
$password = "";
$dbname = "residents";

$conn = mysqli_connect($server, $username, $password, $dbname);

if (mysqli_connect_errno()){
	echo "Failed to connect";
	exit();
}
echo "Connection successful";

?>