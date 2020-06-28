$(document).ready(function() {

// connection

	var conn = new WebSocket('ws://24.7.76.101:9090');


// defaults

	conn.onopen = function(e) {
	    console.log("Connection established!");
	    // $("#chatroom").append("<label class='compgen'><strong>System:</strong> You have joined the chat!</label>")
	    conn.send("join");
	};

	conn.onmessage = function(e) {
	    console.log(e.data);
	    console.log(e);
	    processMessage(e.data); // figure out what to do
	};

	conn.onclose = function(e) {
		conn.send("ID" + ID + " leave");
	};


// vars

	var cardLoadID = 0;
	var cards = new Array("delete this");
	var ID = 0;

// functions

	function processMessage(data) {


		
		
		// card generator of the set of cards, sends all players card order
		if (data.substr(0,3) == "gen") {
			cards[cardLoadID] = data.substr(4);
			console.log(cards);
		}


		// system message
		else if (data.substr(0,2) == "ID") {
			if (ID == 0) {
				ID = parseInt(data.substr(2));
			}
		}

		
		else if (data.substr(0,4) == "deny") {
			if (ID == 0) {
				if (data.substr(5) == "gamerun") {
					alert("Sorry, but the game has already started. Please reload until the game ends again so you can join.");
				}
				else if (data.substr(5) == "full") {
					alert("Sorry, but the game is full. Please reload until the game ends again so you can join.");
				}
			}
		}

		
	}








});