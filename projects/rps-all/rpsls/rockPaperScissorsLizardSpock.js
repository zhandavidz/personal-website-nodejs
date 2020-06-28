// tells computer to load everything after

$(document).ready(function() {



// stating variables

var userChoice;
var gameRun = false;
var playerWin = false;
var playerTie = false;
var playerLose = false;
var computerChoice;

// computer chooses



// starts the game (click words)

$('#start').on('click', function() {

		computerChoice = Math.floor(Math.random() * 5) + 1;

			if(computerChoice == 1) {
				console.log(computerChoice = "Rock");
			}

			else if(computerChoice == 2) {
				console.log(computerChoice = "Paper");
			}

			else if(computerChoice == 3) {
				console.log(computerChoice = "Scissors");
			}

			else if(computerChoice == 4) {
				console.log(computerChoice = "Lizard");
			}

			else if(computerChoice == 5) {
				console.log(computerChoice = "Spock");
			}

	$('.gameStartRules, .gameStart').hide(0);
	$('#playerChoice').show(0);
	gameRun = true;
});


// clicks words to see rules

$('#rulesText').on('click', function() {
	$('#rulesImg').show(0);
});


// player chooses by clicking on pictures

// player chooses rock

$('#rock').on('click', function() {
	if(gameRun) {

	userChoiceRock();

	endMessage();

	}
});


// player chooses paper

$('#paper').on('click', function() {
	if(gameRun) {

	userChoicePaper();

	endMessage();

	}
});


// player chooses scissors

$('#scissors').on('click', function() {
	if(gameRun) {

	userChoiceScissors();

	endMessage();

	}
});


// player chooses lizard

$('#lizard').on('click', function() {
	if(gameRun) {

	userChoiceLizard();
	
	endMessage();

	}
});


// player chooses spock

$('#spock').on('click', function() {
	if(gameRun) {

	userChoiceSpock();

	endMessage();
	
	}
});


// shows end message (lose and computerChoice)


$('.endMessageScreen').on('click', function() {

	$('h2').hide(0);
	playerLose = false;
	playerWin = false;
	playerTie = false;
	gameRun = false;

	$('.endPics').hide(0);
	$('.gamePics').show(0);
	$('.gameStart').show(0);
	// $('#directions').hide(0);
});



// functions for userchoice

function userChoiceRock() {
	$('#paper, #scissors, #lizard, #spock, h2').hide(0);

	$('#vs').show(0);

	if((computerChoice == 'Lizard') || (computerChoice == 'Scissors')) {
		playerWin = true;
	}
	else if(computerChoice == 'Rock') {
		playerTie = true;
	}
	else if((computerChoice == 'Paper') || (computerChoice == 'Spock')) {
		playerLose = true;
	}
		endMessage();

}

function userChoicePaper() {
	$('#rock, #scissors, #lizard, #spock, h2').hide(0);

	$('#vs').show(0);
	
	if((computerChoice == 'Rock') || (computerChoice == 'Spock')) {
		playerWin = true;
	}
	else if(computerChoice == 'Paper') {
		playerTie = true;
	}
	else if((computerChoice == 'Scissors') || (computerChoice == 'Lizard')) {
		playerLose = true;
	}
		endMessage();

}

function userChoiceScissors() {
	$('#rock, #paper, #lizard, #spock, h2').hide(0);

	$('#vs').show(0);
	
	if((computerChoice == 'Paper') || (computerChoice == 'Lizard')) {
		playerWin = true;
	}
	else if(computerChoice == 'Scissors') {
		playerTie = true;
	}
	else if((computerChoice == 'Spock') || (computerChoice == 'Rock')) {
		playerLose = true;
	}

		endMessage();

}

function userChoiceLizard() {
	$('#rock, #paper, #scissors, #spock, h2').hide(0);

	$('#vs').show(0);
	
	if((computerChoice == 'Spock') || (computerChoice == 'Paper')) {
		playerWin = true;
	}
	else if(computerChoice == 'Lizard') {
		playerTie = true;
	}
	else if((computerChoice == 'Scissors') || (computerChoice == 'Rock')) {
		playerLose = true;
	}

		endMessage();

}

function userChoiceSpock() {
	$('#rock, #paper, #scissors, #lizard, h2').hide(0);

	$('#vs').show(0);
	
	if((computerChoice == 'Scissors') || (computerChoice == 'Rock')) {
		playerWin = true;
	}
	else if(computerChoice == 'Spock') {
		playerTie = true;
	}
	else if((computerChoice == 'Paper') || (computerChoice == 'Lizard')) {
		playerLose = true;
	}

		endMessage();

}


function endMessage() {

	if(computerChoice == "Rock"){
		$('#rockComputer').show(0);
	}

	if(computerChoice == "Paper"){
		$('#paperComputer').show(0);
	}

	if(computerChoice == "Scissors"){
		$('#scissorsComputer').show(0);
	}

	if(computerChoice == "Lizard"){
		$('#lizardComputer').show(0);
	}

	if(computerChoice == "Spock"){
		$('#spockComputer').show(0);
	}



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




// dev's crap, plz ignore

// console.log($('img');



// end document waiting

});