<?php

function pageController() {
    $data = [];

    //page title
    $data["title"] = "Chris - Web Developer";

    //to toggle active class on navbar
    $data["projects"] = "";
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
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 10%">
                <h1 style="font-size: 64px">Hello!</h1>
                <h3 style="font-size: 32px; margin-top: -10px; text-align: center">Welcome to my site!</h3>
                <h4>My name is Chris Davila. I'm a web and UI developer based in San Antonio, TX. I have experience developing real-world projects in the LAMP stack and love learning new technologies in web development. Please get in touch with any questions you have.</h4>
                <button class="btn btn-primary">Click here</button>
            </div>
            <div class="col-md-6" style="margin-top: 10%">
                <img src="/img/codeup_photo.jpeg" class="text-center img-responsive center-block" style="width=195px; height=253px; padding:1px; border:1px solid black;">
            </div>
        </div>
    </div>

    <?php require_once "footer.html" ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/parallax.js-1.4.2/parallax.min.js"></script>

</body>
</html>

