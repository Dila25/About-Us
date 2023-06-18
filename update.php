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

// Check if the ID parameter is present in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the existing data for the given ID
    $stmt = $conn->prepare("SELECT privacy_policy, personal_data FROM Pdetail WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();

    // Check if the update form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the updated data from the form
        $privacyPolicy = $_POST['privacyPolicy'];
        $personalData = $_POST['personalData'];

        // Prepare the update statement
        $stmt = $conn->prepare("UPDATE Pdetail SET privacy_policy = ?, personal_data = ? WHERE id = ?");
        $stmt->bind_param("ssi", $privacyPolicy, $personalData, $id);

        // Execute the update statement
        if ($stmt->execute()) {
            // Redirect to the Main_Display.php page
            header("Location: Main_Display.php");
            exit;
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
} else {
    echo "Invalid request.";
}

// Close the connection
$conn->close();
?>
