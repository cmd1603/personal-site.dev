<?php

function pageController() {
	$data = [];
	// page title
	$data["title"] = "Weather Map";
	// to toggle active class on navbar
	$data["projects"] = "active";
	$data["about"] = "";
	$data["resume"] = "";
	$data["contact"] = "";

	return $data;
}
header('Access-Control-Allow-Origin: http://chrisdavila.net', false);
extract(pageController());

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<?php require_once "../header.php" ?>a
	<link href="/css/weather.css" type="text/css" rel="stylesheet">
</head>

<body style="padding-top: 75px;">
	<?php require_once "../navbar.php" ?>
<div class="container">
			<h3 class="col-md-12 text-center" id='weather'></h3>
			<h2 class="text-center" id="headers">Weather for<span id="cityname" class="location" style="color: orange"></span></h2>
			<div id="customData" class="text-center">
				<label for="location" id="headers">Location:</label><input style="margin: 3px" type="text" id="location" name="location" placeholder="San Antonio, TX">
				<button type="submit" id="submitLocation">Get Forecast</button>
			</div>
			<div id="forecast"></div>
			<div id="map"></div>
</div>

	<?php require_once "../footer.html" ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDVURvoehzS9TH8mAMbPIEtu-zpBd_dTXI"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<script src="http://momentjs.com/downloads/moment.min.js"></script>
	<script src="/js/weather.js"></script>
</body>
</html>