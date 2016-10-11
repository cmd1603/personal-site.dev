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

<section style="padding-top: 5%">
<h1 class="text-center">Web Applications</h1>
<br>

    <div class="full_width">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <a href="https://fitwager.net" alt="fitwager" target="_blank">
                        <img src="/img/fitwager.png" alt="fitwager home page" class="img-responsive thumb" style="max-width: 650px">
                    </a>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                    <p class="lead"><span class="strong">fitwager</span> is a web app that is connected to the Fitbit API. Users are able to log in through their Fitbit account and wager against their friends in exercise challenges.<a class="seeProjectLink" href="https://fitwager.net" target="_blank" alt="fitwager">&nbsp;&nbsp;see project ></a></p>
                    <hr>
                    <p class="categories_small">php, laravel, html, css, bootstrap, javascript, jquery, fitbit api, o-auth</p>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="row calculator_section">
        <div class="appHolder">
            <div class="col-sm-12 col-md-5 col-lg-5 col-sm-offset-1 col-md-offset-1 col-lg--1"><h3>JavaScript Calculator</h3>
                <img class="img-responsive right" alt="JavaScript calculator" src="/img/calcapp.png">
            </div>
            <div class="col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
                <p class="lead">JavaScript calculator made with custom CSS6, JavaScript and jQuery<a class="seeProjectLink" href="/portfolio/calculator.php" alt="JavaScript Calculator">&nbsp;&nbsp;see project ></a></p>
                <hr>
                <p class="categoriesSmallGray">JavaScript // jQuery // HTML // CSS // Bootstrap</p>
            </div>
        </div>
    </div>

    <hr>

    <div class="container">
        <div>
            <div class="row">
                <div class="col-sm-12 col-md-6 col-lg-6">
                    <p class="lead">Using the Open Weather Map API and Google Maps API, I created this simple application to show the 3-day weather forecast and a close-up of a location from a user search.<a class="seeProjectLink" href="/portfolio/weather_map.php" alt="Weather Map">&nbsp;&nbsp;see project ></a></p>
                    <hr>
                    <p class="categoriesSmallGray">JavaScript // jQuery // HTML // CSS // Bootstrap</p>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-md-offset-1 col-lg-offset-1">
                    <img class="img-responsive" alt="Weather Map" src="/img/weatherapp.png">
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="simpsonsBackground">
        <div class="appHolder">
            <div class="col-sm-4 col-md-4 col-lg-4 col-sm-offset-1 col-md-offset-1 col-lg-offset-1">
                <img class="img-responsive" alt="Adlister" src="/img/pokemon_logo2.jpg">
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 col-lg-offset-1 col-xl-offset-1">
                <p class="lead">A fictional site based on "Craiglist" where users can buy, sell, and trade Pokemon.</p>
                <p style="font-size: smaller;font-weight: 100;">I claim no rights to any Pokemon characters, images, or anything related to the show. The use of the Pokemon logo was only for fictional and educational purposes.</p>
                <hr>
                <p class="categoriesSmallGray">JavaScript // jQuery // HTML // CSS</p>
            </div>
        </div>
    </div>
</section>

    <?php require_once "footer.html" ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://momentjs.com/downloads/moment.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


</body>
</html>
