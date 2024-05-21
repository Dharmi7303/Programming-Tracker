<?php
// Connect to the database
require_once ('dbconnect.php');
session_start();
$user_id = $_SESSION['user_id'];

try {
    // Prepare the SQL statement
    $stmt = $conn->prepare("SELECT username,email,datejoin FROM users WHERE id = :user_id");

    // Bind parameters
    $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);

    // Execute the query
    $stmt->execute();

    // Fetch the user data and store it in variables
    if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $name = $row['username'];
        $email = $row['email'];
        $datejoin = $row['datejoin'];
    }

} catch(PDOException $e) {
    // Handle errors
    die("Error executing query: " . $e->getMessage());
}

// Close the database connection
$conn = null;
?>
