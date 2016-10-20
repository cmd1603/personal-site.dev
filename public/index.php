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
                <h1 class="landing-page-font" style="font-size: 64px">Web Developer</h1>
                <h3 class="landing-page-font" style="font-size: 32px; margin-top: -10px; text-align: center">Welcome to my site!</h3>
                <h4 class="landing-page-font">My name is Chris Davila. I'm a web developer based in Dallas, TX. I have experience developing real-world web applications in the LAMP stack and love learning new technologies in web development. I am always looking for new projects to dabble in so please get in touch with any questions you may have.</h4>
            </div>
            <div class="col-md-6" style="margin-top: 10%">
                <img src="/img/codeup_photo.jpeg" class="text-center img-responsive center-block" style="width=195px; height=253px; padding:1px; border:1px solid black;">
            </div>
        </div>
    </div>

    <?php require_once "footer.html" ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</body>
</html>

