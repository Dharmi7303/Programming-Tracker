<?php
require_once ('dbconnect.php');

if(isset($_GET['id'])) {
    // Sanitize and validate the ID
    $contest_id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
    if(!filter_var($contest_id, FILTER_VALIDATE_INT)) {
      die("Invalid problem!");
    }
    
    try {
        // Create a new PDO connection
        $conn = new PDO("mysql:host=$server;dbname=$db", $user, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Prepare and execute the DELETE query with parameter binding
        $stmt = $conn->prepare("DELETE FROM `contest` WHERE `id` = ?");
        $stmt->bindParam(1, $contest_id, PDO::PARAM_INT);
        $stmt->execute();
      
        // Check if the query was successful
        if($stmt->rowCount() > 0) {
          echo '<script>alert("User deleted!");</script>';
        } else {
          echo '<script>alert("User not found!");</script>';
        }
      
        // Close the statement and connection
        $stmt->closeCursor();
        $conn = null;
    } catch(PDOException $e) {
      die("Connection failed: " . $e->getMessage());
    }
  }
  
  // Redirect back to the login page
  header('location:admin_data.php');
  
?>