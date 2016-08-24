<?php
function pageController() {
    $data = [];

    // page title
    $data["title"] = "Projects/Applications";
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
<html lang="en">
<head>
    <?php require_once "header.php" ?>
</head>
<body>
    <?php require_once "navbar.php" ?>

<h1 class="text-center">Projects/Applications</h1>

<div>
    <div>
        <div class="col-sm-12 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <img class="img-responsive" alt="JavaScript calculator" src="#">
        </div>
        <div class="col-sm-12 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <p class="lead">Behold, an entirely JavaScript calculator! Custom CSS and JavaScript make this simple beauty a handy tool around the office.<a class="seeProjectLink" href="/portfolio/calculator.php" alt="JavaScript Calculator">&nbsp;&nbsp;see project ></a></p>
            <hr>
            <p class="categoriesSmallGray">JavaScript // jQuery // HTML // CSS // Bootstrap</p>
        </div>
    </div>
</div>

<div class="container">
    <div>
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <p class="lead">Using the Open Weather Map API and Google Maps API, I created this simple application to show the 3-day weather forecast and a close-up of a location from a user search.<a class="seeProjectLink" href="/portfolio/weather_map.php" alt="Weather Map">&nbsp;&nbsp;see project ></a></p>
                <hr>
                <p class="categoriesSmallGray">JavaScript // jQuery // HTML // CSS // Bootstrap</p>
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
                <img class="img-responsive" alt="Weather Map" src="#">
            </div>
        </div>
    </div>
</div>

<div>
    <div>
        <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
            <img class="img-responsive" alt="Adlister" src="#">
        </div>
        <div class="col-sm-7 col-md-7 col-lg-7">
            <p>JavaScript // jQuery // HTML // CSS</p>
        </div>
    </div>
</div>

    <?php require_once "footer.html" ?>


<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="js/personal_site.js"</script>
<script src="https://use.fontawesome.com/d2f688b35c.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="js/parallax.js-1.4.2/parallax.min.js"></script>


</body>
</html>
