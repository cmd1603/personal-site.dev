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

    <div class="slide-1">
        <div class="overlay"></div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-4 hero">
                <hgroup>
                    <h1 style="color: white">Hi!</h1>
                    <h3>Welcome to my site!</h3>
                </hgroup>
            </div>
        </div>
    </div>

    <?php require_once "footer.html" ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/parallax.js-1.4.2/parallax.min.js"></script>

</body>
</html>

