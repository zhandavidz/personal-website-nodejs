// tells computer to load everything after

$(document).ready(function() {


// stating variables

var userChoice
var gameRun = false;
var playerWin = false;
var playerTie = false;
var playerLose = false;


// computer chooses

var computerChoice = Math.floor(Math.random() * 3) + 1;

if(computerChoice == 1) {
	console.log(computerChoice = "Rock");
}

else if(computerChoice == 2) {
	console.log(computerChoice = "Paper");
}

else if(computerChoice == 3){
	console.log(computerChoice = "Scissors");
}


// starts the game (click words)

$('#gameStart').on('click', function() {
	$(this).hide(0);
	$('#playerChoice').show(0);
	gameRun = true;
});


// player chooses by clicking on pictures

// player chooses rock

$('#rock').on('click', function() {
	if(gameRun) {

	$('#paper, #scissors, h2').hide(0);

	if(computerChoice == "Rock") {
		playerTie = true;
	}
	else if(computerChoice == "Paper") {
		playerLose = true;
	}
	else if(computerChoice == "Scissors") {
		playerWin = true;
	}

	endMessage();

	}
});


// player chooses paper

$('#paper').on('click', function() {
	if(gameRun) {

	$('#rock, #scissors, h2').hide(0);


	if(computerChoice == "Rock") {
		playerWin = true;
	}
	else if(computerChoice == "Scissors") {
		playerLose = true;
	}
	else if(computerChoice == "Paper") {
		playerTie = true;
	}

	endMessage();

	}
});


// player chooses scissors

$('#scissors').on('click', function() {
	if(gameRun) {

	$('#rock, #paper, h2').hide(0);


	if(computerChoice == "Rock") {
		playerLose = true;
	}
	else if(computerChoice == "Scissors") {
		playerTie = true;
	}
	else if(computerChoice == "Paper") {
		playerWin = true;
	}

	endMessage();

	}
});


// shows end message (lose and computerChoice)

function endMessage() {

	$('#computerChoice' + computerChoice).show(0);
	if(playerWin) {
		$('#win').show(0);
	}
	if(playerTie) {
		$('#tie').show(0);
	}
	if(playerLose) {
		$('#lose').show(0);
	}
}

$('.endMessageScreen').on('click', function() {

	$('h2').hide(0);
	playerLose = false;
	playerWin = false;
	playerTie = false;
	gameRun = false;

	$('img').show(0);
	$('#gameStart').show(0);

});


// end document waiting

});