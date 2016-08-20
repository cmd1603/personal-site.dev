<?php

function pageController() {
    $data = [];

    //page title
    $data["title"] = "Chris - Web Developer";

    //to toggle active class on navbar
    $data["work"] = "";
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


<!-- /.begin-parallex scrolling -->


<!-- end first section -->
    <div class="parallax-container" data-parallax="scroll" data-position="top" data-bleed="10" data-image-src="img/code2.jpg" data-natural-width="1400" data-natural-height="900"></div>

<!-- second section -->
      <section>  
        <div class="container">
          <div class='row'>
              <h1 id='skills'>Skills</h1>
    <hr>          
              <div class='col-md-offset-3 col-md-3'>
                <ul id="list" style="font-size: 24px; background-color: white;">
                  <i class="fa fa-check-square" id='check' aria-hidden="true"> HTML5</i><br>
                  <i class="fa fa-check-square" id='check' aria-hidden="true"> CSS6</i><br>
                  <i class="fa fa-check-square" id='check' aria-hidden="true"> Javascript</i>
                </ul>
              </div>
              <div class='col-md-3'>
                <ul id="list" style="font-size: 24px; background-color: white">
                  <i class="fa fa-check-square" id='check' aria-hidden="true"> JQuery</i><br>
                  <i class="fa fa-check-square" id='check' aria-hidden="true"> PHP</i><br>
                  <i class="fa fa-check-square" id='check' aria-hidden="true">MySQL</i>
                </ul>
              </div>
          </div>
        </div>
      </section>
<br>
<!-- end second section -->
  <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-speed="0.2" data-image-src="img/field.jpg" data-natural-width="1400" data-natural-height="1400"></div>
<!-- begin third section-->
        <section> 
          <div class="container text-center">
              <div class='row'>

                <div class='col-md-5' id='education'><h1>Education</h1><i class="fa fa-graduation-cap fa-4x" aria-hidden="true"></i>
    <hr>
                    <h3 id='codeup' style="text-decoration: underline;">Codeup Fullstack Bootcamp</h3>
                      <h4>San Antonio, TX</h4>
                      <h4>May 2016 - September 2016</h4>
                    <h3 id='txst' style="text-decoration: underline;">Texas State University</h3>
                      <h4>San Marcos, TX</h4>
                      <h4>September 2010 - May 2013</h4>
                </div>
                <div class='col-md-2'></div>
   	

                <div class='col-md-5' id='work-history'><h1>Work History</h1><i class="fa fa-briefcase fa-4x" aria-hidden="true"></i>
    <hr>                     
                    <h3 id='sinclair' style="text-decoration: underline;">Sinclair Broadcast Group</h3>
                      <h4>Dallas, TX</h4>
                      <h4>February 2014 - May 2016</h4>
                    <h3 id='cbs' style="text-decoration: underline;">CBS Radio</h3>
                      <h4>Dallas, TX</h4>
                      <h4>June 2013 - July 2014</h4>                                    
                </div>
              </div>                
            </div>          	        
        </section>   
    <br> 
<!-- end thrid section -->

<div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="img/texas_flag.jpg" data-natural-width="1279" data-natural-height="853"></div>

       <section> 
          <div class="container text-center">
            <div class='row'>
              <h1>My Projects</h1>
              <h4>Feel Free to Check em' Out</h4>
          <hr>
                <div class="col-md-4" id='simpsons' style='font-size: 24px; background-color: white;'>
                    <ul>
                    <a class="fancy" href="/simple-simon/simplesimon.html" target="_blank">Simple Simpsons<br><span style='font-size: 20px;'>Built w/ HTML5, CSS6, JavaScript & JQuery.
                    </ul><img src="img/screen_shot.png" style='height: 50%; width: 53%' alt="Simple Simon"></a>
                </div>
                <div class="col-md-4" id='calculator' style='font-size: 24px; background-color: white'>
                    <ul>
                    <a class="fancy" href="http://codeup.dev/calculator.html" target="_blank">JavaScript Calculator<br><span style='font-size: 20px'>Built with HTML5, CSS6 & JavaScript.
                    </ul><img src="img/js_calc.png" style='height: 100%; width: 74%' alt="Calculator"></a>
                </div>
                <div class="col-md-4" id='map' style='font-size: 24px; background-color: white'>
                    <ul>
                    <a class="fancy" href="weather_map.html" target="_blank">Weather Map<br><span style='font-size: 20px'>Built with HTML5, CSS6, JavaScript & JQuery.
                    </ul><img src="img/weathermap2.png" style='height: 61%; width: 100%' alt="Weather Map"></a>
                </div>
            </div>
          </div>
       </section> 

        <br>
<!--     <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="img/view.jpg" data-natural-width="1400" data-natural-height="900" style="height: 501px;"></div> -->



    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="img/dallas_skyline.jpg" data-natural-width="1053" data-natural-height="463"></div>
    <div class="parallax-container" data-parallax="scroll" data-bleed="10" data-image-src="img/challenger3.jpg" data-natural-width="1600" data-natural-height="544"></div>

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

<!-- end of third section -->


  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
  <script src="js/personal_site.js"</script>
  <script src="https://use.fontawesome.com/d2f688b35c.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <script src="js/parallax.js-1.4.2/parallax.min.js"></script>
  
</body>
</html>

