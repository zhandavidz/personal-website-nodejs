<?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/code-text.php'; ?>

<!DOCTYPE html>
<html>
<head>
		<?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/head-tags.php';?>

	<meta charset="utf-8">
	<meta name="description" content="SplitMaster: The computerized version of coaches do at every swim meet: taking splits of their swimmers racing.">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>David Zhan</title>

	<link rel="stylesheet" type="text/css" href="styles.css">

</head>
<body>

	<!-- <?php require $_SERVER['DOCUMENT_ROOT'].'/site-parts/top-bar/top-bar.php'; ?> -->

	<!-- <form action="" method="get" target="_self">
		Number of lanes:<br>
		<input type="text" name="lanes">
		<input type="submit" value="Submit">
	</form> -->

	<?php

		$lanes = htmlspecialchars($_GET['lanes']);
		$poolLength = htmlspecialchars($_GET['poolLength']);
		$distance = htmlspecialchars($_GET['distance']);


		$lanes = intval($lanes);

		
		if (!isset($_GET['lanes']) || !isset($_GET['poolLength']) || !isset($_GET['distance']) || $lanes < 1 || !is_int($lanes) || (strcmp($poolLength, "LCM") == 0 && strcmp($distance, "25") == 0)) {
			echo 	"<form id=\"getLanes\" action=\"\" method=\"get\" target=\"_self\">
						Number of lanes: 
						<input type=\"text\" name=\"lanes\">
						<br>
						Pool Length: 
						<select name=\"poolLength\">
							<option value=\"SCY\">SCY</option>
							<option value=\"SCM\">SCM</option>
							<option value=\"LCM\">LCM</option>
						</select>
						<br>
						Distance: 
						<select name=\"distance\">
							<option value=\"25\">25</option>
							<option value=\"50\">50</option>
							<option value=\"100\">100</option>
							<option value=\"200\">200</option>
							<option value=\"400\">400</option>
							<option value=\"500\">500</option>
							<option value=\"1000\">1000</option>
							<option value=\"1650\">1650</option>
						</select>
						<br>
						<input type=\"submit\" value=\"Submit\">
					</form>";
		}
		else {


			echo   "<form id=\"getLanes\" action=\"\" method=\"get\" target=\"_self\">
						Number of lanes: 
						<input type=\"text\" name=\"lanes\" value=\"$lanes\">
						<br>
						Pool Length: 
						<select name=\"poolLength\">
							<option value=\"SCY\"";
			if (strcmp($poolLength, "SCY") == 0) {
				echo " selected";
			}
			
			echo 				">SCY</option>
							<option value=\"SCM\"";
			if (strcmp($poolLength, "SCM") == 0) {
				echo " selected";
			}
			
			echo 				">SCM</option>
							<option value=\"LCM\"";
			if (strcmp($poolLength, "LCM") == 0) {
				echo " selected";
			}
			
			echo 				">LCM</option>
						</select>
						<br>
						Distance: 
						<select name=\"distance\">
							<option value=\"25\"";
			if (strcmp($distance, "25") == 0) {
				echo " selected";
			}
			
			echo 				">25</option>
							<option value=\"50\"";
			if (strcmp($distance, "50") == 0) {
				echo " selected";
			}
			
			echo 				">50</option>
							<option value=\"100\"";
			if (strcmp($distance, "100") == 0) {
				echo " selected";
			}
			
			echo 				">100</option>
							<option value=\"200\"";
			if (strcmp($distance, "200") == 0) {
				echo " selected";
			}
			
			echo 				">200</option>
							<option value=\"400\"";
			if (strcmp($distance, "400") == 0) {
				echo " selected";
			}
			
			echo 				">400</option>
							<option value=\"500\"";
			if (strcmp($distance, "500") == 0) {
				echo " selected";
			}
			
			echo 				">500</option>
							<option value=\"1000\"";
			if (strcmp($distance, "1000") == 0) {
				echo " selected";
			}
			
			echo 				">1000</option>
							<option value=\"1650\"";
			if (strcmp($distance, "1650") == 0) {
				echo " selected";
			}
			
			echo 				">1650</option>
						</select>
						<br>
						<input type=\"submit\" value=\"Submit\">
					</form>";

			echo   "<div id=\"control\">
						<button id=\"start\">START</button>
						<button id=\"clear\">CLEAR</button>
					</div>";

			echo   "<table id=\"times\">
						<tr id=\"header\">
							<td>LANE</td>
							<td>LAP</td>
							<td>TOTAL</td>
						</tr>"; // need to end <TABLE>

			for ($lane = 1; $lane <= $lanes; $lane++) { 
				echo   "<tr>
							<td>$lane</td>
							<td id=\"lap$lane\" class=\"lap\">LAP</td>
							<td>0</td>
						</tr>";
			}

			echo "</table>";
		}
		
	?>
	<!-- <?php include $_SERVER['DOCUMENT_ROOT'].'/site-parts/footer/footer.php'; ?> -->

</body>
</html>