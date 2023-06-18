<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AURA Photography - About Us - P&C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="./styles - about/style_about.css">
    <link rel="stylesheet" href="./styles - about/about_us.css">
    <link rel="stylesheet" href="./styles - about/insert.css">
</head>
<body>
    <center>
        <div class="aura">AURA</div>
        <div class="photography">Photography</div>
      </center>
    
      <ul>
        <li><img src="./images - about/PicsArt_05-26-03.27.28.jpg" width="110px"  class="logo"></img></li>
        <li><img src="./images - about/1727578.webp" width="50px" class="userimage"></img></li>
        <li><font class="username">Hello !</font><br><font class="username">Username</font></li>
        <li><a href="home_page.html">Home</a></li>
        <li><a href="#album">Album</a></li>
        <li><a class="active_About" href="#aboutus">About us</a></li>
        <li><a href="#contactus">Contact us</a></li>
        <li><a href="#reservation">Reservation</a></li>
        <li><a href="#help">Help</a></li>
    </ul>

    <div class="heder">
        <a href="about_us.html" class="h">About Us</a>
        <font>|</font>
        <a href="about_us_tnc.html" class="h">Terms & Conditions</a>
        <font>|</font>
        <a href="about_us_pncp.html" class="h" id="active_us_pnc">Privacy and Cookies policy</a>
    </div>

<div class="box">

<form action="insert.php" method="POST">
  <h1>Insert Your Privacy and Cookies policy</h1> <br>
  <div>
    <label for="privacy_policy"><h3>Privacy policy</h3></label> <br>
    <textarea id="privacy_policy" name="privacy_policy" placeholder="Write something.." required></textarea>
  </div>

  <div>
    <label for="personal_data"><h3>Cookies & your personal Data</h3></label> <br>
    <textarea id="personal_data" name="personal_data" placeholder="Write something.." required></textarea>
  </div>
  </p>

  <div class="btncen">
    <button id="bottone5" type="submit">Submit</button>
  </div>
</form>

    <br><br>

    </div>

    <footer>
        <div class="button-row">
         <div class="social-media">
            <a href="#">
              <i class="fa fa-facebook"></i>
            </a>
            <a href="#">
            <i class="fa fa-twitter"></i>
            </a>
            <a href="#">
            <i class="fa fa-instagram"></i>
            </a>
            <a href="#">
            <i class="fa fa-google"></i>
            </a>
          </div>
          <div class="newsletter">
            <form class="subscriber-form">
              <input type="email" name="email" placeholder="Enter Your Email"/>
              <button type="submit">Subscribe to Email</button<
            </form>
          </div>
        </div>
        <div class="links-row">
          <a href="#">Contact Us</a>
          <a href="#">Terms & Condition</a>
          <a href="#">Privacy</a>
          <a href="#">FAQ</a>
        </div>
      </footer>
      <script src="submit.js"></script>
  </body>
  </html>