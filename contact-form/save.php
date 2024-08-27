<?php
// Database credentials
$servername = "localhost"; // or your server name
$username = "root";        // your MySQL username
$password = "";            // your MySQL password
$dbname = "database_form";  // your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['fname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $messaage = mysqli_real_escape_string($conn, $_POST['message']);

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO database_table (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $messaage);

    // Execute the query
    if ($stmt->execute()) {
        // Redirect to a success page or display a success message
        header("Location: success.php");
        exit;
    } else {
        // Display a user-friendly error message
        echo "Error: Unable to save your message. Please try again later.";
    }

    $stmt->close();
}

$conn->close();
?>
