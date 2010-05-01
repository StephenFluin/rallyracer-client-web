<?php
session_start();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<title>Rally Racer Client</title>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>
server = "http://mortalpowers.com/rallyracer/game-server.php?";
cards = [];
function send() {
	if(cards.length == 0) {
		$.get(server + "action=connectToGame",connect);
	}
}
function connect(a, b, c) {
	$("#status").html( "a: " + a + "b: " + "c: " + c);
	tmp = a.split(",");
	$("#status").html("Player: " + tmp[0] + " Unit: " + tmp[1]);

}
</script>
</head>
<body>
<div id="status"></div>
<div id="cards"></div>
<button onclick="send()">Send</button>
</body>
</html>
