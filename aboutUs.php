<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>About Us</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/location.css" type="text/css">
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="js/location.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Covered+By+Your+Grace|Marck+Script|Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Calligraffitti|Covered+By+Your+Grace|Doppio+One|Marck+Script|Pacifico" rel="stylesheet">
</head>

<body>
  <div class="topnav">
    <a id="mekanix">MEKANIX</a>
    <a id="home" class="active" href="landing.html">Home</a>
    <a href="contactUs.html">Contact Us</a>
    <a href="aboutUs.html">About Us</a>
    <a href="#logout" id="login">Log out</a>
  <a href="#login" id="login">Log in</a>

  </div>
  <div class="container">
    <div class="more">
      <h1>ABOUT US</h1>
      <h3>We've all been there.Your car breaks down on a busy street,with no mechanic in sight,and your trusted mechanic is too far away or too busy to come to your rescue.You've got no one to call.It's getting dark.</h3>
      <h3>WHAT DO YOU DO? WHO DO YOU CALL?</h3>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3><strong><em>WHO WE ARE</em></strong></h3>
        <p>Mekanix is your trusted road side aid.If and when you are in such a situation,just log into our web app and find a mechanic in under 10 minutes.The process is quite simple.After loging in,enter your location and give us a brief
          description
          on what problem you think your car has.We will connect you to the nearest mechanic to meet your car's needs who will come to your rescue.We also provide towing services to get your car to the nearest partner garage.</p>
      </div>
      <div class="col-md-6">
        <h3><strong><em>WHO WE WORK WITH</em></strong></h3>
        <p>All our mechanics are vetted for work quality and professionalism.You will also be provided with top of the range spare parts at an affordable price.</p>
      </div>
    </div>
    <div class="row">
      <div class="ab">
        <div class="col-md-6">
          <h3><strong><em>THE TEAM</em></strong></h3>
          <p>Mekanix was founded 3 years ago by a group of 4 developers.Since then,the team has grown to 50 full time staff at our headquarters and over 500 mechanics and garages that we partner with.</p>
        </div>
        <div class="col-md-6">
          <h3><strong><em>WE ARE HIRING!</em></strong></h3>
          <p>Send your resume to <em><strong>jobs@mekanix.com</strong></em> and we'll be in touch ASAP. </p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        <h3><strong><em>LOCATION</em></strong></h3>
        <p> Ngong Lane Plaza, Ngong Lane. Nairobi</p>
      </div>
      <div class="col-md-6">
        <h3><strong><em>PARTNER WITH US</em></strong></h3>
        <p>If you are a mechanic and want to partner with us,pay us a visit at our offices or <a href="contacts.html"><em>contact us.</em></a></p>
      </div>
    </div>
  </div>
</body>

</html>

<? php
session_start();
$name=$_SESSION['username'];
?>
