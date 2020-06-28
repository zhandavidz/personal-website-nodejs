// tells computer to read js after read html

$(document).ready(function() {

// global variables

var columnnumber;
var playerTurn = 0;
var redOrBlack = "Red";
var trueCount = 0;
var fourInARow = false;
var isFilledInHorizontal;
var isFilledInVertical;
var isFilledInPositive;
var isFilledInNegative;
var oppositeOfRedOrBlack = "Black";






			



				function horizontalWinCheck(row, column, color) {

					trueCount = 0


				// four checks for this cell...

					// horizontal (row) check
						// get the row number
						// for every cell in the row (columns 1-7)
							// what color (class) is this cell?
							// if redOrBlack, start counting
							// if not, set count back to 0
							// if count == 4, return true

					// //console.log(


						for (var i = 0; i <= 6; i++) {

							var cell = $( 'tr:nth-child(' + row + ') > td' )[i];
							//console.log(cell + " cell");

							isFilledInHorizontal = $(cell).hasClass(color);
							//console.log(isFilledInHorizontal + " isFilledInHorizontal");

						// colorChecker(trueCount, isFilledInHorizontal)

						if(isFilledInHorizontal) {
							trueCount++;

							if(trueCount == 4) {
								fourInARow = true;
							}
						}

						else {
							
							trueCount = 0;

						}
						//console.log(trueCount + " trueCount");
						//console.log(fourInARow + " fourInARow");
				}

				if(fourInARow) {
					return true;
				}
				else {
					return false;
				}

				//end of function

				}

				//ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
				//ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
				//ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
				//ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd
				//ddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd


				function verticalWinCheck(row, column, color) {
				trueCount = 0;
				
					

					for (var i = 0; i <= 5; i++) {

						var cell = $('td:nth-child(' + column + ')')[i];
						//console.log(cell + "`~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` ");


						isFilledInVertical = $(cell).hasClass(color);
						// console.log(isFilledInVertical);

						if(isFilledInVertical) {

								trueCount++;
								// console.log(trueCount);

								if(trueCount == 4){
									fourInARow = true;
								}
						}

						else {
							
							trueCount = 0;

						}
						




				//for
					}

					if(fourInARow) {
						return true;
					}
					else {
						return false;
					}




// function ends
				}


			function negativeWinCheck(row, column, color) {

			trueCount = 0;
			console.log("this is being called");

			var startColumn = column - row + 1;




				for (var i = 0; i < 6; i++) {
				

				var cell = $('tr > td:nth-child(' + (startColumn + i + 1) + ')')[i];
				console.log(cell + "`~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` `~` ");


				isFilledInNegative = $(cell).hasClass(color);
				console.log(isFilledInNegative);

				if(isFilledInNegative) {

						trueCount++;
						console.log(trueCount);

						if(trueCount == 4){
							fourInARow = true;
						}
				}

				else {
					
					trueCount = 0;

				}
				
				






				// startColumn



//end for loop
				}


				if(fourInARow) {
					return true;
				}
				else {
					return false;
				}




				//function ends
			}




					function positiveWinCheck(row, column, color) {

					trueCount = 0;
					console.log("this is being called");
					//asdjfhscgdvygfncdsyingcrfuyrgvushnfuydgfcbadgcbsdgfhjgfhhdsvcafgjg
					// for (row; row > 1; i--) {
					// 	row = row - 1;
					// 	column = column - 1;
					// }
					//scfgbcuverwgfuwcenuvgfysuyvnceiuyvgncauyefgrnxiwyregnyesyisgcavier
					var startColumn = column + row - 8;




						for (var i = 1; i < 7; i++) {
						


						var cell = $('tr > td:nth-child(' + (startColumn + i) + ')')[6 - i];
						console.log(cell);


						isFilledInPositive = $(cell).hasClass(color);
						console.log(isFilledInPositive);

						if(isFilledInPositive) {

								trueCount++;
								console.log(trueCount);

								if(trueCount == 4){
									fourInARow = true;
								}
						}

						else {
							
							trueCount = 0;

						}
						
						






						// startColumn



		//end for loop
						}


						if(fourInARow) {
							return true;
						}
						else {
							return false;
						}




						//function ends
					}









// var playerTurn = "Red"

// $('selector').function(parameters);

$( 'th:nth-child(1) > button' ).on('click' , function() {
	//console.log("This Works :)");
});

$('button').click(function() {
	// add one to playerTurn
	playerTurn++;

	// //console.log() playerTurn
	//console.log(playerTurn + "playerTurn");

	// figure out the column
	columnnumber = $(this).parent().index() + 1;
	//console.log(columnnumber + "  ^v^dddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd");
	var lastEmptyCell = $('td:nth-child(' + columnnumber + ')').not('.Red , .Black').length + 1;
	$('tr:nth-child(' + lastEmptyCell + ') td:nth-child('+ columnnumber +') ').addClass(redOrBlack);
	$('tr:nth-child(' + lastEmptyCell + ') td:nth-child('+ columnnumber +') ').addClass("filled")


//horizontal
	if(horizontalWinCheck(lastEmptyCell, columnnumber, redOrBlack) || 
		verticalWinCheck(lastEmptyCell, columnnumber, redOrBlack)  ||
		negativeWinCheck(lastEmptyCell, columnnumber, redOrBlack)  ||
		positiveWinCheck(lastEmptyCell, columnnumber, redOrBlack)) {
		// game is over

				if(playerTurn % 2 == 0) {
					redOrBlack = "Red";
					oppositeOfRedOrBlack = "Black"
					$('button').removeClass("Black");
					$('button').addClass(redOrBlack);
				}
				else if(playerTurn % 2 == 1) {
					redOrBlack = "Black";
					oppositeOfRedOrBlack = "Red"
					$('button').removeClass("Red");
					$('button').addClass(redOrBlack);
				}


		alert("Connect Four!!! " + oppositeOfRedOrBlack + " won!!! Please reload the page to play again!");

	}


//vertical
	// else if(verticalWinCheck(lastEmptyCell, columnnumber, redOrBlack)){

	// }


	else {
		// game is still running
		if(playerTurn % 2 == 0) {
			redOrBlack = "Red";
			$('button').removeClass("Black");
			$('button').addClass(redOrBlack);
		}
		else if(playerTurn % 2 == 1) {
			redOrBlack = "Black";
			$('button').removeClass("Red");
			$('button').addClass(redOrBlack);
		}
	}


	
	// $('button').addClass(redOrBlack);


});

// end document
});
