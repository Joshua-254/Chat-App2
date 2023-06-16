// code to auto refresh the message area div content
$(document).ready(function(){
	$('.received_message').load('load.php');
	refresh();
});

function refresh(){
	setTimeout(function () {
		$('.received_message').fadeOut('slow').load('load.php').fadeIn('slow');
		refresh();
	},200)
}