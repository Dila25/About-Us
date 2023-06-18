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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $privacyPolicy = $_POST["privacy_policy"];
    $personalData = $_POST["personal_data"];

    // Prepare the SQL statement
    $sql = "INSERT INTO Pdetail (privacy_policy, personal_data) VALUES (?, ?)";

    // Create a prepared statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters and execute the statement
    $stmt->bind_param("ss", $privacyPolicy, $personalData);
    $stmt->execute();

    // Check if the insertion was successful
    if ($stmt->affected_rows > 0) {
        echo "Data inserted successfully.";
        header("Location: Main_Display.php");
        exit();
    } else {
        echo "Failed to insert data.";
    }

    // Close the statement
    $stmt->close();
}

// Close the connection
$conn->close();
?>
