<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>

<!DOCTYPE html>
<html>
<head>
		<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php';?>

	<meta charset="utf-8">
	<meta name="description" content="My name is David Zhan. On my website, I have many things such as school projects and simple games.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>David Zhan - School</title>
	<style type="text/css">
		#title {
			display: block;
			text-align: center;
			margin-top: 30px;
		}

		#sub-nav {
			display: block;
			text-align: center;
			margin: 10px;
			margin-bottom: 40px;
		}

		#sub-nav a {
			display: inline-block;
			width: 400px;
			height: 400px;
			margin: 10px;
		}

		#sub-nav a > div {
			margin: 10px;
			width: 400px;
			height: 400px;
			border: 1px solid blue;
			display: inline-block;
			text-align: center;
			color: green;
		}

		#sub-nav a > div:hover {
			color: lightgreen;
		}

		#sub-nav #sub-nav-container {
			width: 1298px; /*THREE COLUMN*/
			display: inline-block;
			text-align: left;
		}
			/*TWO COLUMN*/
			@media only screen and (max-width: 1324px) {
				#sub-nav #sub-nav-container {
					width: 864px;
				}
			}
			/*ONE COLUMN STATIC*/
			@media only screen and (max-width: 899px) {
				#sub-nav {
					margin: 0;
					margin-top: -10px;
					margin-bottom: 60px;
				}
				#sub-nav #sub-nav-container {
					width: 400px;
					display: inline-block;
					text-align: left;
				}
				#sub-nav a {
					margin: 0;
					margin-top: 20px;
				}
				#sub-nav a > div {
					margin: 0;
					margin-top: 20px;
				}
			}
			/*ONE COLUMN DYNAMIC*/
			@media only screen and (max-width: 574px) {
				#sub-nav {
					margin: 0;
					margin-top: -10px;
					margin-bottom: 60px;
				}
				#sub-nav #sub-nav-container {
					/*border: 3px dashed black;*/
					width: 70vw;
					display: inline-block;
					text-align: left;
				}
				#sub-nav a {
					width: 70vw;
					height: 70vw;
					margin: 0;
					margin-top: 20px;
				}
				#sub-nav a > div {
					width: 70vw;
					height: 70vw;
					margin: 0;
					margin-top: 20px;
				}
			}
	</style>
</head>
<body>

	<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/top-bar/top-bar.php'; ?>

	<div id="title">
		<h1>School Work</h1>
	</div>

	<div id="sub-nav">
		<div id="sub-nav-container">
			<a href="isearch/">
				<div id="isearch">
					<h3>The I-Search Project</h3>
				</div>
			</a>
			<a href="newtonslaws/">
				<div id="newtonslaws">
					<h3>Newton's Three Laws</h3>
				</div>
			</a>
			<a href="newtonslaws/">
				<div id="newtonslaws">
					<h3>Newton's Three Laws</h3>
				</div>
			</a>
			<!-- <a href="newtonslaws/">
				<div id="newtonslaws">
					<h3>Newton's Three Laws</h3>
				</div>
			</a>
			<a href="newtonslaws/">
				<div id="newtonslaws">
					<h3>Newton's Three Laws</h3>
				</div>
			</a>
			<a href="newtonslaws/">
				<div id="newtonslaws">
					<h3>Newton's Three Laws</h3>
				</div>
			</a> -->
		</div>
	</div>

	<!-- <div id="sub-nav">
		<a href="msp/">
			<div id="msp">
				<h3>Media Search Paper</h3>
			</div>
		</a>
		<a href="interview/">
			<div id="interview">
				<h3>Interview Paper</h3>
			</div>
		</a>
		<a href="mgp/">
			<div id="mgp">
				<h3>Multigenre Portfolio</h3>
			</div>
		</a>
	</div> -->

	<!-- <div id="high" class="school-level">
		
	</div>
	<div id="middle" class="school-level">
		<h2>Middle School: <a href="ams.ausdk12.org">Albany Middle School</a></h2>
		<div id="8th" class="grade">
			
		</div>
	</div> -->


	

	<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/footer/footer.php'; ?>

</body>
</html>