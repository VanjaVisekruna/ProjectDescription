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
    <style>
    .alert {
      padding: 20px;
      background-color: #f44336;
      color: white;
      opacity: 1;
      transition: opacity 0.6s;
      margin-bottom: 15px;
    }

    .alert.success {background-color: #04AA6D;}
    .alert.info {background-color: #2196F3;}
    .alert.warning {background-color: #ff9800;}

    .closebtn {
      margin-left: 15px;
      color: white;
      font-weight: bold;
      float: right;
      font-size: 22px;
      line-height: 20px;
      cursor: pointer;
      transition: 0.3s;
    }

    .closebtn:hover {
      color: black;
    }

    </style>
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
          <li><a href="maps.php">Map</a></li>
        </ul>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">

            <br></br>

              <h4></h4>

              <form method="POST">
                <p>
                  <label for="home">Enter your homeplace:</label>
                   <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%" name="home" placeholder="Enter adress">
                </p>
                <p>
                  <br>
                  <label for="sports">Choose a sport:</label>
                  <p></p>
                  <select id="sports" name="sports">
                    <option value=" Tennis">tennis</option>
                    <option value=" Skifahren">skiing</option>
                    <option value=" Schwimmen">swimming</option>
                    <option value=" Fußball">football</option>
                    <option value=" Basketball">basketball</option>
                  </select>
                  <p></p>
                  <br>
                  <label for="adress">Enter your city:</label>
                   <input class="w3-input w3-border w3-animate-input" type="text" style="width:30%" id="adress" name="address" placeholder="Enter adress">
                </p>
                <input type="submit" name="submit_address">
              </form>

              <?php
                if (isset($_POST["submit_address"]))
              	{
                      $home = $_POST["home"];
                      $sport = $_POST["sports"];
                      $address = $_POST["address"].$_POST["sports"];
                      ?>

                      <div class="alert success">
                        <span class="closebtn">&times;</span>
                        <strong>Success!</strong>
                      </div>

                      <div class="box">
                        <label>Sportgrounds</label>
                        <iframe width="600" height="500" src="https://maps.google.com/maps?q=<?php echo $address; ?>&output=embed"></iframe>
                        <p></p>
                        <label>Homeplace</label>
                        <iframe width="600" height="500" src="https://maps.google.com/maps?q=<?php echo $home; ?>&z=12&output=embed"></iframe>
                      <?php
                    }
               ?>

        <div class="col-sm-6">
          <script>
          var close = document.getElementsByClassName("closebtn");
          var i;

          for (i = 0; i < close.length; i++) {
            close[i].onclick = function(){
              var div = this.parentElement;
              div.style.opacity = "0";
              setTimeout(function(){ div.style.display = "none"; }, 600);
            }
          }
          </script>
        </div>

      </div>
    </div>


  </body>
</html>
