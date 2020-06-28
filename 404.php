<!DOCTYPE html>
<html>
<head>
	<title>Oh no, 404</title>

	<style type="text/css">
		
		h1,h2,h3,h4 {
			font-family: monospace;
			text-align: center;
		}
		h2#line2 {
			margin-bottom: 60px;
		}
		#homeLink {
			margin-top: 30px;
		}
		#homeLink a {
			color: blue;
		}
	</style>
</head>
<body>
	<?php
		$poemNum = rand(1,4);
		echo "<div id='poem'>";
			if ($poemNum == 1) {
				echo "<h2 id='line1'>Roses are red,</h2>
				<h2 id='line2'>Violets are blue</h2>
				<h2 id='line3'>Unexpected '{'</h2>
				<h2 id='line4'>on line 32.</h2>";
			}
			elseif ($poemNum == 2) {
				echo "<h2 id='line1'>Roses are red,</h2>
				<h2 id='line2'>Don't shed a tear,</h2>
				<h2 id='line3'>'cause the page that you want,</h2>
				<h2 id='line4'>ain't f****** here.</h2>";
			}
			elseif ($poemNum == 3) {
				echo "<h2 id='line1'>Roses are red,</h2>
				<h2 id='line2'>Violets are blue</h2>
				<h2 id='line3'>There's always an Asian,</h2>
				<h2 id='line4'>That's better than you.</h2>";
			}
			elseif ($poemNum == 4) {
				echo "<h2 id='line1'>Roses are #ff0000,</h2>
				<h2 id='line2'>Violets are #0000ff</h2>
				<h2 id='line3'>If you understand this,</h2>
				<h2 id='line4'>You're a nerd too.</h2>";
			}
		echo "</div>"
	?>
	<h3 id="homeLink"><a href="/">sorry for 404, here's the home page :)</a></h3>
</body>
</html>