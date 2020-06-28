<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>

<!DOCTYPE html>
<html>
<head>
		<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php';?>

	<meta charset="utf-8">
	<meta name="description" content="My name is David Zhan. On my website, I have many things such as school projects and simple games.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script type="text/javascript" src="index.js"></script>
	
	<link rel="stylesheet" href="index.css">


	<title>Rock, Paper, Scissors</title>
	
</head>
<body>
	<div id="connected">connected</div>
	<div id="disconnected">not connected</div>
	<div id="input">
		<input type="radio" name="rps" value="rock">Rock
		<br>
		<input type="radio" name="rps" value="paper">Paper
		<br>
		<input type="radio" name="rps" value="scissors">Scissors
		<br>

		<button id="play">Play!</button>
	</div>
	<div id="waiting">
		Waiting for the other player...
	</div>
	<div id="result"></div>
</body>