<?php
// Connect to the database
require_once('dbconnect.php');

try {
  $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);

  // Set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "SELECT username,email,datejoin FROM users ORDER BY id DESC LIMIT 1";
  $result = $conn->query($sql);

  // Fetch the user data and store it in variables
  while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
    $name = $row['username'];
    $email = $row['email'];
    $datejoin = $row['datejoin'];
  }

} catch(PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

// Close the database connection
$conn = null;
?>
