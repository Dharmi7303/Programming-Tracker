<?php
require_once 'dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
};

if(isset($_GET['logout'])){
   unset($user_id);
   session_destroy();
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./assets/css/header.css"/>
</head>
<body>
    <nav>
        <div class="logo">
            <img src="./assets/images/PY0.png" alt="PT">
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
        <ul class="nav-links">
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="practice.php">Practice</a></li>
            <li><a href="competitions.php">Competitions</a></li>
            <li><a href="user_analytics.php">Analytics</a></li>
            <li><a href="update_profile.php">Edit Profile</a></li>
            <li><button class="login-button"> <a href="login.php?logout=<?php echo $user_id; ?>">Logout</a></button></li>
            <!-- <li><button class="join-button"> <a href="#">Join </a></button></li> -->
        </ul>
    </nav>
    <script src="./assets/js/header.js"></script>
</body>
</html>
