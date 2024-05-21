<?php
require_once('dbconnect.php');

$dsn = "mysql:host=$server;dbname=$db";
$options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
try {
  $conn = new PDO($dsn, $user, $password, $options);
} catch (PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

if (isset($_POST['asubmit'])) {
  $email = $_POST['aemail'];
  $pass = md5($_POST['apassword']);

  $stmt = $conn->prepare("SELECT * FROM `admins` WHERE email = :email AND password = :password");
  $stmt->execute(array('email' => $email, 'password' => $pass));

  if ($stmt->rowCount() > 0) {
    // $row = $stmt->fetch(PDO::FETCH_ASSOC);
    header('location:admin.php');
    exit();
  } else {
    $message = 'Incorrect email or password!';
  }
}

$conn = null; // Close database connection

// rest of the code using $message variable
?>