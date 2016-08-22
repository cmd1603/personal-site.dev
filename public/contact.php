<?php

function pageController() {
    $data = [];

    //page title
    $data["title"] = "Contact";

    //to toggle active class on navbar
    $data["projects"] = "";
    $data["about"] = "";
    $data["resume"] = "";
    $data["contact"] = "active";

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

    <section>
        <div class="container">
            <div class='row'>
                <h1 class='text-center'>Contact</h1>
                <h4 class='text-center'>Say hey?</h4>
                <hr>
                <p class='text-center'>Want to know more? Have questions? Feel free to fill out the form below and I will get back to you ASAP!</p>
            </div>

            <form role="form">
                <div class='row'>
                    <div class="col-md-4">
                        <label for="name">Name:</label>
                        <input type="name" class="form-control" id="name">
                    </div>
                </div>

                <div class='row'>
                    <!-- <form role='form'> -->
                    <div class="col-md-4">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                </div>

                <div class='row'>
                    <!-- <form role='form'> -->
                    <div class="col-md-4">
                        <label for="phone">Phone:</label>
                        <input type="phone" class="form-control" id="phone">
                    </div>
                </div>

                <div class='row'>
                    <!-- <form role='form'> -->
                    <div class="col-md-4">
                        <label for='message'>Message:</label>
                        <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                    </div>

                </div>
            </form>
            <br><button type="submit" class="btn btn-default">Submit</button>
        </div>

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
