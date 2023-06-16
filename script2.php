<?php 
// including the connection file
include "connection.php";

// query to insert data to database
$sql = "INSERT INTO user2 (user2_message)
VALUES ('$_POST[message_submit]')";

# confirmation section and refresh section
if (mysqli_query($conn, $sql)) {
  echo "Message sent successfully";
  header("Refresh:0; url=user2.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


 ?>