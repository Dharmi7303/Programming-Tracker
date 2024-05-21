<?php
require_once('dbconnect.php');

try {
    $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['password']);

    $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = :email AND password = :pass");
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['user_id'] = $row['id'];
        header('location:dashboard.php');
        exit(); // add exit to prevent further execution
    } else {
        echo '<script>alert("Incorrect username/password!");</script>';
        header('location:login.php');
    }
}

$conn = null; // Close database connection
