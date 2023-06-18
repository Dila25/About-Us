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

    // Prepare the delete statement
    $stmt = $conn->prepare("DELETE FROM Pdetail WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Execute the delete statement
    if ($stmt->execute()) {
        $stmt->close();

        // Display success message and redirect
        echo "<script>alert('Record deleted successfully.'); window.location.href = 'Main_Display.php';</script>";
        exit;
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid request.";
}

// Close the connection
$conn->close();
?>
