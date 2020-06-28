// computer chooses

var computerChoice = Math.floor(Math.random() * 3) + 1;

// computerChoice = Math.floor(Math.random() * 3) + 1;

if(computerChoice == 1) {
	console.log(computerChoice = "Rock");
}

else if(computerChoice == 2) {
	console.log(computerChoice = "Paper");
}

else if(computerChoice == 3){
	console.log(computerChoice = "Scissors");
}

// game start
alert("Let's play Rock Paper Scissors!");

var userChoice = prompt("Choose between rock, paper, and scissors.");

// user choose rock

if((userChoice == "rock") || (userChoice == "Rock")) {
	if(computerChoice == "Rock") {
		alert("I chose rock! We tied!");
	}
	else if(computerChoice == "Paper") {
		alert("I chose paper. You lose. :(");
	}
	else if(computerChoice == "Scissors") {
		alert("I chose scissors. You win!!!");
	}
}
// user choose paper
else if((userChoice == "Paper") || (userChoice == "paper")) {
	if(computerChoice == "Rock") {
		alert("I chose rock! You win!!!");
	}
	else if(computerChoice == "Scissors") {
		alert("I chose scissors. You lose. :(");
	}
	else if(computerChoice == "Paper") {
		alert("I chose paper. We tied!");
	}
}
// user choose scissors
else if((userChoice == "scissors") || (userChoice == "Scissors")) {
	if(computerChoice == "Rock") {
		alert("I chose rock! You lose. :(");
	}
	else if(computerChoice == "Scissors") {
		alert("I chose scissors. We tied!");
	}
	else if(computerChoice == "Paper") {
		alert("I chose paper. You won!!!");
	}
}
else{
	alert("Sorry. That was not a valid choice. Please choose between Rock Paper and Scissors.")
}

function reloadPage() {
	location.reload();
}