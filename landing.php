<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>MEKANIX</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/location.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/location.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Covered+By+Your+Grace|Marck+Script|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Covered+By+Your+Grace|Doppio+One|Marck+Script|Pacifico" rel="stylesheet">
</head>

<body class="landing">
  <div class="backgroundImage">
    <div class="topnav">
      <a id="mekanix">MEKANIX</a>
      <a id="home" class="active" href="landing.html">Home</a>
      <a href="contactUs.html">Contact Us</a>
      <a href="aboutUs.html">About Us</a>
        <a href="#logout" id="login">Log out</a>
      <a href="#login" id="login">Log in</a>

    </div>
    <div class="content">
      <div class="welcome">
        <h1>WELCOME TO MEKANIX</h1>
        <h4>Mechanics at your finger tips.</h4>
      </div>
    </div>
  </div>
  <div class="col">
    <h2>Use less cash using our app</h2>
  </div>
  <div id="about">
    <h5>ABOUT MEKANIX</h5>
    <h2><strong>Get a mechanic in minutes</strong></h2>
    <p>Just tap a button and a mechanic will come to your aid at an affordable price.</p>
  </div>
  <div class="des">
    <h2>How Mekanix Works?</h2>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-4">
        <div class="same">
          <h2><strong>1. Request</strong></h2>
          <img id="pic1" src="image/pic1.png" alt="image1">
          <p>Set up a location and choose a mechanic that fits your budget</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="same">
          <h2><strong>2. Find a Mechanic</strong></h2>
          <img id="pic2" src="image/pic2.png" alt="image2">
          <p>Watch your mechanic arrive</p>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="same">
          <h2><strong />3. Pay & Rate</strong></h2>
          <img id="pic3" src="image/pic3.png" alt="image3">
          <p>You can rate your mechanic and pay for the service done</p>
        </div>
      </div>
    </div>
  </div>
  <div class="foot">
    <div class="container">
      <div class="row">
        <div class="col-sm-4">
          <h5>COMPANY</h5>
          <p>Careers</p>
          <p>Press</p>
          <p>Blog</p>
          <p>Contacts</p>
        </div>
        <div class="col-sm-4">
          <h5>MECHANICS</h5>
          <p>Location</p>
          <p>Cities</p>
          <p>Support & FAQ</p>
          <p>Legal</p>
        </div>
        <div class="col-sm-4">
          <h5>MORE</h5>
          <p>Business</p>
          <p>Dispatch Software</p>
          <p>Fleets</p>
          <p>Scoooters</p>
        </div>
      </div>
    </div>
    <div id="foot">
      <p>Terms & Conditions for Users/ General Terms for Mechanics / General Terms for Business/ Privacy Policy for Users / Privacy Policy for Mechanics</p>
      <p>© 2019 Mekanix KENYA</p>
    </div>
  </div>
</body>

</html>
<? php
session_start();
$name=$_SESSION['username'];
?>
