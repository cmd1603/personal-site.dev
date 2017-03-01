<?php

function pageController() {
    $data = [];

    // page title
    $data["title"] = "Resume";
    // to toggle active class on navbar
    $data["projects"] = "";
    $data["about"] = "";
    $data["resume"] = "active";
    $data["contact"] = "";

    return $data;
}
extract(pageController());

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once "header.php" ?>
</head>
<body>
    <?php require_once "navbar.php" ?>

	<section style="padding-top: 5%">

	<h1>Resume</h1>

	<br>

	<div class="container_resume">

			<!-- Summary -->
			<div class="row">
				<p class="lead col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">Software developer with multimedia/sales background pursuing a career web development. Currently looking to apply my skills from previous roles into a web development role in media/sports.</p>
			</div>

			<!-- Skills -->

			<h2 class="resume_head_gray">Skills</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<p><span class="skill_category">Front End</span>HTML5, CSS3, Twitter Bootstrap, JavaScript, jQuery, AJAX and experience with APIs</p>
					<p><span class="skill_category">Back End</span>PHP/Laravel, MySQL</p>
					<p><span class="skill_category">Software</span>Adobe Photoshop/Premiere, Sublime Text, PHP Storm, Sequel Pro</p>
				</div>
			</div>

			<!-- Work Experience -->

			<h2 class="resume_head_gray">Experience</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h4 class="company">Multicam Inc., <span class="title">Web Developer </span><span class="dates">[ 10/16 - Current ]</span></h4>
					<ul>
						<li>Building an application with jQuery/Laravel that will dynamically create forms to be used as Quotes and Sales Orders</li>
					</ul>
					<h4 class="company">Sinclair Broadcast Group, <span class="title">Regional National Sales Assistant </span><span class="dates">[ 02/14 - 05/16 ]</span></h4>
					<ul>
						<li>Managed over 8 million in annual advertisement dollars</li>
						<li>Created make-good packages for misplaced spots, utilizing problem solving skills</li>
						<li>Worked collaboratively with sales reps and agencies from around the country</li>
						<li>Input new and revised television advertising schedules, paying careful attention to detail to avoid input error</li>
					</ul>

					<h4 class="company">CBS Radio <span class="title">Promotions Assistant </span><span class="dates">[ 05/13- 04/14 ]</span></h4>
					<ul>
						<li>Assisted with coordination of remote events and with engineering of live broadcasts for 6 radio stations</li>
						<li>Provided administrative support to sales executives and accounting department</li>
					</ul>
				</div>
			</div>

			<!-- Education -->

			<h2 class="resume_head_gray">Education</h2>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h4 class="school">Codeup, <span class="title">Certificate of Completion </span><span class="dates">[ 05/16 - 09/16 ]</span></h4>
					<ul>
						<li>16 week immersive full-stack web development course in San Antonio focused on LAMP+J languages and technologies</li>
						<li>600+ hours in and outside classroom learning and building projects such as interactive games/programs and API-driven widgets</li>
						<li>Worked extensively with Git and command line interface</li>
					</ul>				
				</div>
			</div>


			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<h4 class="school">Texas State University, <span class="title">Bachelor of Fine Arts - Electronic Media <span class="dates">[ 08/10 - 08/13 ]</span></h4>			
				</div>
			</div>


		</div> <!-- .container -->
		</section>
    <?php require_once "footer.html" ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>		
