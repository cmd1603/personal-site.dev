
<?php
function pageController() {
	$data = [];
	// page title
	$data["title"] = "Simple Simpsons";
	// to toggle active class on navbar
	$data["projects"] = "active";
	$data["about"] = "";
	$data["resume"] = "";
	$data["contact"] = "";

	return $data;
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
	<?php require_once "../header.php" ?>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/simplesimon.css">
	

</head>
<body>
	<?php require_once "../navbar.php" ?>
	<div id="background">
		<img class="stretch" src="img/simpsonsbackground.jpg">
	</div>


<h3 class="text-center">Simple Simpsons</h3>

	

	<button id='start'>Start</button>
	<button id='round'>Round: 0</button>
	<button id='stop'>Stop</button>

<div id='container'>
	<div class="row">
	  <div class="col-md-6" id='box1' data value='1'><img src='img/duffbeer.jpg'></div>
	  <div class="col-md-6" id='box2' data value='2'><img src='img/bart2.jpg'></div>
	</div>
	<div class="row">
	  <div class="col-md-6" id='box3' data value='3'><img src='img/homer-excited.jpg'></div>
	  <div class="col-md-6" id='box4' data value='4'><img src='img/barney.jpg'></div>
	</div>
</div>


	<div>
	<p class='text-right' id='easy'>Easy</p>
	<p class='text-right' id='medium'>Medium</p>
	<p class='text-right' id='hard'>Hard</p>
	</div>


	<audio id="beer" preload="auto">
    	<source src="wav/beercanopen.wav">
	</audio>
			

	<audio id="bart" preload="auto">
    	<source src="http://www.richmolnar.com/Sounds/Bart%20-%20Aye%20Carumba.wav">
	</audio>
			
			
	<audio id="homer" preload="auto">
    	<source src="http://www.richmolnar.com/Sounds/Homer%20-%20Woohoo!%20(2).wav">
	</audio>
		

	<audio id="barney" preload="auto">
    	<source src="http://www.richmolnar.com/Sounds/Barney%20-%20Burp.wav">
	</audio>

	<?php require_once "../footer.html" ?>

		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src='js/simplesimon.js'></script>
</body>
</html>