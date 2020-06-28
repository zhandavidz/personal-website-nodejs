$(document).ready(function() {

// connection

	var conn = new WebSocket('ws://24.7.76.101:9090');


// defaults

	conn.onopen = function(e) {
	    console.log("Connection established!");
	    // $("#chatroom").append("<label class='compgen'><strong>System:</strong> You have joined the chat!</label>")
	    conn.send("con - A player has joined!");
	};

	conn.onmessage = function(e) {
	    console.log(e.data);
	    console.log(e);
	    processMessage(e.data); // figure out what to do
	};


// vars

	var gameRun = false;

	var playerCount = 0;

	var cards = new Array("will be deleted");

	var players = [false, false, false, false];



// functions

	$("#start").on("click", function() {

		document.getElementById("status").innerHTML = "<p>Running</p>";

		gameRun = true;

		var send = "start";

		for (var i = 0; i < 4; i++) {
			if (players[i]) {
				send = send + " " + i;
			}
		}

		conn.send("start");

		// generator
		for (var j = 0; j < 52; j++) {
			
			var typeNum = Math.floor((Math.random() * 4) + 1);
			var value = Math.floor((Math.random() * 13) + 1);
			var typeStr;

			if (typeNum == 1) {
				typeStr = "s";
			}
			else if (typeNum == 2) {
				typeStr = "h";
			}
			else if (typeNum == 3) {
				typeStr = "c";
			}
			else if (typeNum == 4) {
				typeStr = "d";
			}
			cards[j] = typeStr + value;
		}


		for (var l = 0; l < 52; l++) {
			conn.send("gen " + cards[l]);
		}
	});


	function processMessage(data) {
		// a request to the system
		if (data.substr(0,8) == "join") {
			if (!gameRun || playerCount < 4) {
				var empty = false;
				var position = 1;
				while (!empty && position < 5) {
					if (!players[position]) {
						conn.send("ID" + position);
					}
					position++;
				}
			}
			else if (!gameRun) {
				conn.send("deny gamerun");
			}
			else if (playerCount < 4) {
				conn.send("deny full");
			}
		}


		if (data.substr(0,2) == "ID") {
			var ID = parseInt(data.substr(2,1));
			if (data.substr(4) == "leave") {
				players[ID] = false;
			}
		}
	}




});