<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AURA Photography - About Us - P&C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./styles/style.css">
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
        <li><img src="./images - about/PicsArt_05-26-03.27.28.jpg" width="110px" class="logo"></li>
        <li><img src="./images - about/1727578.webp" width="50px" class="userimage"></li>
        <li>
            <font class="username">Hello !</font><br>
            <font class="username">Username</font>
        </li>
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
        <?php
            // Check if the ID parameter is present in the URL
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                // Fetch the existing data for the given ID
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

                $stmt = $conn->prepare("SELECT privacy_policy, personal_data FROM Pdetail WHERE id = ?");
                $stmt->bind_param("i", $id);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_assoc();

                // Close the statement and the connection
                $stmt->close();
                $conn->close();

                // Check if the row is fetched successfully
                if ($row) {
                    $privacyPolicy = $row['privacy_policy'];
                    $personalData = $row['personal_data'];
        ?>
                    <form action="update.php?id=<?php echo $id; ?>" method="POST">
                        <h1>Update Your Privacy and Cookies Policy</h1><br>
                        <label for="privacyPolicy"><h3>Privacy Policy</h3></label>
                        <textarea name="privacyPolicy" required><?php echo $privacyPolicy; ?></textarea><br>

                        <label for="personalData"><h3>Cookies & Your Personal Data</h3></label>
                        <textarea name="personalData" required><?php echo $personalData; ?></textarea><br>

                        <div class="btncen">
                            <button id="bottone5" type="submit">Update</button>
                        </div>
                    </form>
        <?php
                } else {
                    echo "No data found.";
                }
            } else {
                echo "Invalid request.";
            }
        ?>
    </div>

    <footer>
        <div class="button-row">
            <div class="social-media">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-google"></i></a>
            </div>
            <div class="newsletter">
                <form class="subscriber-form">
                    <input type="email" name="email" placeholder="Enter Your Email"/>
                    <button type="submit">Subscribe to Email</button>
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
