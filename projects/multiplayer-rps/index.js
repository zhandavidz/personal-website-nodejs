$(document).ready(function() {

var conn = new WebSocket('ws://davidzhan.com:8082');

var opponentPlayed = false;

// when button is clicked:
// 1) check if the player has chosen a play
// 2) do the hide and show for the game mechanics
// 3) call sendPlay()
$("button#play").click(function() {
	var play = $("input[name=rps]:checked").val();
	if (play != null) {

		$("div#input").hide();

		if (!opponentPlayed) {
			$("div#waiting").show();
		}

		var play = $("input[name=rps]:checked").val();
		
		sendPlay(play);
	}
});

function sendPlay(play) {
	console.log("you: " + play); // WAT WAT WAT WAT
	conn.send(play);
}

conn.onopen = function(e) {
	console.log("Connection established!");
	$("div#disconnected").hide();
	$("div#connected").show();
};

conn.onmessage = function(e) {
	var msg = e.data;
	// is this a system message?
	if (msg.substring(0,3).equals("sys")) {
		msg = msg.substring(4);
		if (msg.equals("gamestart")) {
			start(); // MAKE THIS FUNCTION
		}
		else if (msg.equals("rematch")) {
			rematch(); // MAKE THIS FUNCTION
		}
	}
	else if (msg.substring(0,4).equals("play")) {
		msg = msg.substring(5);
		// FILL THIS IN
	}
};


});