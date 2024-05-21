<?php

require_once 'dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = htmlspecialchars($_POST['update_name']);
   $update_email = htmlspecialchars($_POST['update_email']);

   $stmt = $conn->prepare("UPDATE users SET username = :update_name, email = :update_email WHERE id = :user_id");
   $stmt->bindParam(':update_name', $update_name);
   $stmt->bindParam(':update_email', $update_email);
   $stmt->bindParam(':user_id', $user_id);
   $stmt->execute();

   $update_pass = htmlspecialchars(md5($_POST['update_pass']));
   $new_pass = htmlspecialchars(md5($_POST['new_pass']));
   $confirm_pass = htmlspecialchars(md5($_POST['confirm_pass']));

   function alert($msg) {
      echo "<script>alert('$msg');</script>";
  }

   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($new_pass != $confirm_pass){
         alert('confirm password not matched!');
      }else{
         $stmt = $conn->prepare("UPDATE users SET password = :confirm_pass WHERE id = :user_id");
         $stmt->bindParam(':confirm_pass', $confirm_pass);
         $stmt->bindParam(':user_id', $user_id);
         $stmt->execute();
         alert('password updated successfully!');
      }
   }
}

?>