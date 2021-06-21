<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>Map</title>
  <link rel="stylesheet" href="style_map.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <header class="header">
    <nav class="navbar navbar-style">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#micon">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>

          <a href="home.html"><img class="logo" src="websitelogo.png" alt=""></a>
        </div>
        <div class="collapse navbar-collapse" id="micon">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="football_dif.html">Football</a></li>
          <li><a href="swimming.html">Swimming</a></li>
          <li><a href="tennis.html">Tennis</a></li>
          <li><a href="Basketball.html">Basketball</a></li>
          <li><a href="skiing.html">Skiing</a></li>
          <li><a href="contact.html">Contact</a></li>
          <li><a href="map.html">Map</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">

            <br></br>

              <form method="POST">
                <p>
                   <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%" name="address" placeholder="Enter adress">

                </p>

                <input type="submit" name="submit_address">
              </form>

              <?php
                if (isset($_POST["submit_address"]))
              	{
                      $address = $_POST["address"];
                      ?>

                      <iframe width="600" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>

                      <?php
                    }
               ?>

        <div class="col-sm-6">

        </div>

      </div>
    </div>


  </body>
</html>
