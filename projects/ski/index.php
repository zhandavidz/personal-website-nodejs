<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>

<!DOCTYPE html>
<html>
<head>
		<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php';?>

	<meta charset="utf-8">
	<meta name="description" content="A few links and the itinerary for my 2019-2020 season ski trip.">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Ski Trip</title>
	
	<script type="text/javascript" src="script.js"></script>

	<style type="text/css">
				a.direction-links {
					text-decoration: none;
					display: inline-grid;
					border-top-left-radius: 50%;
					border-top-right-radius: 50%;
					margin: 20px;
				}
				i.fas {
					color: white;
					background-color: #82C91E;
					border-radius: 50%;
					padding: 64px 50px;
					margin-bottom: 20px;
					font-size: 7em;
				}
				div.link-container {
					text-align: center;
					margin: 20px;
				}
				h1#title {
					text-align: center;
					font-size: 5em;
					font-weight: 900;
					margin: 20px;
					color: #82C91E;
				}
				h3.description {
					display: inline-block;
					font-size: 2.5em;
					font-weight: 900;
					color: #82C91E;
				}

			@media only screen and (max-width: 1000px) {
				a.direction-links {
					margin: 15px;
				}
				i.fas {
					font-size: 4em;
					padding: 38px 30px;
					margin: 15px;
				}
				div.link-container {
					margin: 15px;
					margin-top: 0px;
				}
				h1#title {
					font-size: 3.5em;
					margin-top: 15px;
					margin-bottom: 0px;
				}
				h3.description {
					font-size: 1.7em;
					font-weight: 900;
				}
			}
			@media only screen and (max-width: 645px) {
				a.direction-links {
					margin: 10px;
				}
				i.fas {
					font-size: 2em;
					padding: 19px 15px;
					margin: 5px;
					margin-top: 0px;
				}
				div.link-container {
					margin: 10px;
					margin-top: 0px;
				}
				h1#title {
					font-size: 2em;
					margin-top: 10px;
					margin-bottom: 0px;
				}
				h3.description {
					font-size: .9em;
					font-weight: 900;
				}
			}
			@media only screen and (max-width: 370px) {
				a.direction-links {
					margin: 10px;
				}
				i.fas {
					font-size: 2em;
					padding: 19px 15px;
					margin: 5px;
					margin-top: 0px;
				}
				div.link-container {
					margin: 10px;
					margin-top: 0px;
				}
				h1#title {
					font-size: 2em;
					margin-top: 10px;
					margin-bottom: 0px;
				}
				h3.description {
					font-size: .9em;
					font-weight: 900;
				}
			}
	</style>
</head>
<body>

	<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/top-bar/top-bar.php'; ?>
	<h1 id="title">DIRECTIONS TO:</h1>
	<div class="link-container">
		<a href="squaw" class="direction-links">
			<i class="fas fa-skiing fa-fw"></i>
			<h3 class="description">Squaw Valley</h3>
		</a>
		<a href="food" class="direction-links">
			<i class="fas fa-utensils fa-fw"></i>
			<h3 class="description">Food</h3>
		</a>
		<a href="hotel" class="direction-links">
			<i class="fas fa-hotel fa-fw"></i>
			<h3 class="description">Hotel</h3>
		</a>
	</div>





	<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/footer/footer.php'; ?>

</body>
</html>