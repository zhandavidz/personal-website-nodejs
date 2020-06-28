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


	<title>Chat</title>
	
</head>
<body>


	<div id="menu">
		<label>Name: </label><input type="text" id="name"></input>
	</div>

	<div id="chatroom">
		
	</div>
	


	<div id="input">
		<label>Message: </label><input type="text" id="message"></input>
		<button id="send">Send</button>
	</div>

</body>
</html>