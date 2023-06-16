<?php 
include "connection.php";
$query = "SELECT * FROM user1";
$query2 = "SELECT * FROM user2";
$result = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $query2);


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User 2</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<center>
			<div class="message_area">
				<div class="received_message">
					<p>This is a received message</p>
					<p>This is a received message</p>
					<p>This is a received message</p>
				</div>
				<div class="sent_message">
					<p>This is a sent message</p>
					<p>This is a sent message</p>
					<p>This is a sent message</p>
				</div>
				<div class="received_message">
					<p>This is a received message</p>
					<p>This is a received message</p>
					<p>This is a received message</p>
				</div>
				<div class="sent_message">
					<p>This is a sent message</p>
					<p>This is a sent message</p>
					<p>This is a sent message</p>
				</div>
				<div class="received_message">
					<p>This is a received message</p>
					<p>This is a received message</p>
					<p>This is a received message</p>
				</div>
				<?php while($rows=mysqli_fetch_assoc($result)) 
					{ 
					?>  
					<p><?php echo '<div class="received_message">'.$rows['user1_message'].'</div>'; ?></p> 
					<?php 
			        } 
			    ?> 
				<?php while($rows=mysqli_fetch_assoc($result2)) 
					{ 
					?>  
					<p><?php echo '<div class="sent_message">'.$rows['user2_message'].'</div>'; ?></p> 
					<?php 
			        } 
			    ?> 
				<div class="text_section">
				<form action="script2.php" method="post">
					<textarea name="message_submit" rows="5" cols="40"></textarea>
					<button class="btn" type="submit" name="submit">Send</button>
				</form>
				</div>
			</div>
		</center>
	</div>
</body>
</html>