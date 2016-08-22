<?php

function pageController() {
    $data = [];

    //page title
    $data["title"] = "About";

    //to toggle active class on navbar
    $data["projects"] = "";
    $data["about"] = "active";
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
<body class="footer-divide">
    <?php require_once  "navbar.php" ?>

    <!--- Header and Photo --->
    <!-- first section -->
    <section>
        <div class='text-center'><img src="img/logo.png" id="logo"><span style="font-family: Cursive; font-size: x-large">Software Developer</span></div>

        <div class='container' id='intro'>

            <h1 style="text-align: center">Introduction</h1>
            <hr>
            <div class='row'>
                <p class="col-md-5">Hello and welcome to my site! Who am I? I'm Chris Davila. I'm an aspiring software developer who recently left the media sales industry to chase a dream. It was a tough decision to make but saying "What if?" is not something I ever plan to say when I'm an old man. </p>

                <img class='col-md-2 center-block img-responsive img-circle' alt="Responsive image" src="img/pic2.jpg" alt="Profile-Pic">


                <div class='col-md-5'>I have MANY passions. I've been a journalist, a multimedia news reporter, and as I mentioned before, a TV advertising salesman. My biggest passions are sports and anything and everything muscle cars! So why be a developer? Because I plan to join my passions in a way I never imagined as a kid. <br>Stand by for AWESOMENESS!
                </div>

            </div>
        </div>
        <br>
    </section>

    <?php require_once "footer.html" ?>

    <!--- JS --->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/personal_site.js"</script>
    <script src="https://use.fontawesome.com/d2f688b35c.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/parallax.js-1.4.2/parallax.min.js"></script>

</body>
</html>


