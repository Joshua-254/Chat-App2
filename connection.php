<?php 
// server variables
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "chat_messages";

// connecting to the database
$conn = mysqli_connect($servername, $username, $password, $db_name);

// checking the connection
if (!$conn) {
	die("Please check Your Connection !! :" . mysqli_connect_error());

}
?>