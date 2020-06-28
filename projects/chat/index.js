$(document).ready(function() {

var conn = new WebSocket('ws://davidzhan.com:8080');


function scrollBottom() {
	$(document).scrollTop(document.body.clientHeight - window.innerHeight + 150);
}


function sendMessage() {
	$("#name").removeClass("red")
	$("#message").removeClass("red");
	
	var name = $("#name").val();
	var message = $("#message").val();
	if (name == "" || message == "") {
		if (name == "") {
			$("#name").addClass("red");
		}
		if (message == "") {
			$("#message").addClass("red");
		}
	}
	else {
		$("#message").val("");
		console.log("Message sent");
		$("#chatroom").append("<p class='your'>" + name + ": " + message + "</p>");
		scrollBottom();
		conn.send(name + ": " + message);
	}
}

$("button").on('click', sendMessage);

$(document).keypress(function(e) {
    if(e.which == 13) {
        sendMessage();
    }
});

conn.onopen = function(e) {
    console.log("Connection established!");
    $("#chatroom").append("<label class='compgen'><strong>System:</strong> You have joined the chat!</label>");
    conn.send("<label class='compgen'><strong>System:</strong> Someone has joined the chat!</label>");
};

conn.onmessage = function(e) {
    console.log(e.data);
    console.log(e);
    $("#chatroom").append("<p>" + e.data + "</p>");
    scrollBottom();
};



});