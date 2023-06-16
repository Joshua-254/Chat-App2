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
	<title>User 1</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="refresh.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			
			<div class="column" id="chat_input">
				<div class="text_section">
				<form action="script.php" method="post" name="user1">
					<textarea name="message_submit" rows="5" cols="40"></textarea> <br>
					<button class="btn" type="submit" name="submit">Send</button>
				</form>
				</div>
			</div>


			<div class="column" id="messages">
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
				<?php while($rows=mysqli_fetch_assoc($result2)) 
					{ 
					?>  
					<p><?php echo '<div class="received_message">'.$rows['user2_message'].'</div>'; ?></p> 
					<?php 
			        } 
			    ?> 
				<?php while($rows=mysqli_fetch_assoc($result)) 
					{ 
					?>  
					<p><?php echo '<div class="sent_message">'.$rows['user1_message'].'</div>'; ?></p> 
					<?php 
			        } 
			    ?> 
			</div>
		</center>
				


			</div>
			

		</div>
		
	</div>
</body>
</html>