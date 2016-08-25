<?php

function pageController() {
	$data = [];
	// page title
	$data["title"] = "JavaScript Calculator";
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
	<link rel="stylesheet" href="/css/calculator.css">
</head>
<body style="padding-top: 75px;">
	<?php require_once "../navbar.php" ?>
<div class="container">
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4 text-center"><h1 id="featured">JavaScript Calculator</h1></div>
		<div class="col-md-4"></div>
	</div>
</div>

	<form>
		<section>
		<div class="col-md-4"></div>
			<div class="container col-md-4 text-center" id="bs_div">
				<div class="row">
					<div id='forms'>
						<input class='forms' type='text' id='leftOperand' value="" readonly="">
						<input class='forms' type='text' id='operatorBox' value=""  readonly="">
						<input class='forms' type='text' id='rightOperand' value=""  readonly="">
						<input class='forms' type='text' id='answer' name="answer" value="" readonly="">
					</div>

					<div>
						<div>	
							<button type='button' data-value='1' class='buttons numbers btn btn-default' id='one'>1</button>
							<button type='button' data-value='2' class='buttons numbers btn btn-default' id='two'>2</button>
							<button type='button' data-value='3' class='buttons numbers btn btn-default' id='three'>3</button>
							<button type='button' data-value='+' class='buttons operator btn btn-default' id='plus'>+</button>
						</div>
					<div>
						<div>
							<button type='button' data-value='4' class='buttons numbers btn btn-default' id='four'>4</button>
							<button type='button' data-value='5' class='buttons numbers btn btn-default' id='five'>5</button>
							<button type='button' data-value='6' class='buttons numbers btn btn-default' id='six'>6</button>
							<button type='button' data-value='-' class='buttons operator btn btn-default' id='minus'>-</button>
						</div>
					</div>
					<div>	
						<div>
							<button type='button' data-value='7' class='buttons numbers btn btn-default' id='seven'>7</button>
							<button type='button' data-value='8' class='buttons numbers btn btn-default' id='eight' >8</button>
							<button type='button' data-value='9' class='buttons numbers btn btn-default' id='9'>9</button>
							<button type='button' data-value='*' class='buttons operator btn btn-default' id='multiply'>*</button>
						</div>
					</div>	
						<div>
							<button type='button' data-value='C' class='buttons final btn btn-default' id='clear'>C</button>
							<button type='button' data-value='0' class='buttons numbers btn btn-default' id='zero'>0</button>
							<button type='button' data-value='=' class='buttons final btn btn-default' id='equals'>=</button>
							<button type='button' data-value='/' class='buttons operator btn btn-default' id='divide'>/</button>
						</div>
					</div>
					<div>
						<div class="bottom-row">
							<button type='button' data-value='.' class='buttons numbers btn btn-default' id='decimal'>.</button>
							<button type="button" class="buttons special btn btn-default" data-value="Neg" id="Neg">Neg</button>
							<button type="button" class="buttons special btn btn-default" data-value="sqrt" id="sqrt">√</button>				    
						</div>  
					</div>
				</div>
			</div>
		<div class="col-md-4"></div>
		</section>
	</form>

	<?php require_once "../footer.html" ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="/js/calculator.js"></script>
</body>
</html>