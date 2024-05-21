<?php
require_once ('dbconnect.php');

try {
  $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  die("Connection failed: " . $e->getMessage());
}

if(isset($_POST['submit'])){
  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  
  $stmt = $conn->prepare("SELECT * FROM `users` WHERE email = :email AND password = :pass");
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':pass', $pass);
  $stmt->execute();

  function alert($msg) {
    echo "<script>alert('$msg');</script>";
  }

  if($stmt->rowCount() > 0){
    alert('User already exists!');
    header('login.php');
  }else{
    $stmt = $conn->prepare("INSERT INTO `users`(username, email, password) VALUES(:name, :email, :pass)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':pass', $pass);
    $stmt->execute();

    if($stmt->rowCount() > 0){
      alert('Success, now you can log in!');  
      header('location:login.php');
    }else{
      alert('Registration Failed!');  
      header('location:login.php');
    }
  }
}

$conn = null;
?>
