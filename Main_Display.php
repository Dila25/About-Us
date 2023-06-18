<?php
$servername = "localhost";  // database server name
$username = "root";  // database username
$password = "";  // database password
$dbname = "privacydb";  // database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
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
    <link rel="stylesheet" href="./styles - about/Display.css">
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

    <table id="about">

        <tr>
            <th>ID</th>
            <th>Privacy Policy</th>
            <th>Personal Data</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
  

        <?php
        // Fetch data from the database
        $sql = "SELECT id, privacy_policy, personal_data FROM Pdetail";
        $result = $conn->query($sql);

        // Check if any data is retrieved
        if ($result->num_rows > 0) {
            // Output data for each row
            while ($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $privacyPolicy = $row["privacy_policy"];
                $personalData = $row["personal_data"];

                // Display the data in the table rows
                echo "<tr>";
                echo "<td>" . $id . "</td>";
                echo "<td>" . $privacyPolicy . "</td>";
                echo "<td>" . $personalData . "</td>";
                echo "<td><a href='Main_Update.php?id=" . $id . "' class='butttn''>Update</a></td>";
                echo "<td><a href='delete.php?id=" . $id . " ' class='butttnr' '>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No data found.</td></tr>";
        }

        // Close the connection
        $conn->close();
        ?>
   
</table>



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
      
  </body>
  </html>