// THIS IS CREATED BY DAVID ZHAN
// ALL RIGHTS RESERVED


// run when loaded
$(document).ready(function() {

var gameRun = true;
var playerTurn = "X";


// deddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd

function xoSwitch() {

	if (playerTurn == "X") {
		playerTurn = "O";
	}
	else {
		playerTurn = "X";
	}

}

// deddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd


function horizontalWinCheck() {
	var threeInARow = false;
	for (var row = 1; row <= 3; row++) {
		for (var column = 1; column <= 3; column++) {
			if ($("tr:nth-child("+row+") td:nth-child("+column+")").html() == playerTurn) {
				threeInARow = true;
			}
			else {
				threeInARow = false;
				break;
			}
		}
		if (threeInARow) {
			gameEnd();
			break;
		}
	}

// function ends
}
function verticalWinCheck() {



// function ends
}
function diagonalWinCheck() {



// function ends
}

function winCheck() {
	horizontalWinCheck();
	verticalWinCheck();
	diagonalWinCheck();
}


// deddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd


// var squareClicked;
// var squaresLeft = ["a1", "b1", "c1", "a2", "b2", "c2", "a3", "b3", "c3",];

$('td').on('click' , function() {

	//asdfasdfasdfasdfasdfasdfasdfasdfsadff
	// if ($(this).text() == null) {

	// }
//asdfsadfasdfasdfasdfasfdsadfasdfasdfasdfsadf

	if ($(this).html()) {
    	// The cell has stuff in it
		
    	// nothing happen

	}
	else {
    	// The cell is empty
		
    	$(this).append("<h2>"+playerTurn+"</h2>");


    	winCheck();

    	// winCheck

	    xoSwitch();


	}

	






	

});





































// document load
});