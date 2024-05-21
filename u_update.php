<?php

require_once 'dbconnect.php';
session_start();
$user_id = $_SESSION['user_id'];

if(isset($_POST['update_profile'])){

   $update_name = $_POST['update_name'];
   $update_email = $_POST['update_email'];

   $stmt = $conn->prepare("UPDATE `users` SET username = :update_name, email = :update_email WHERE id = :user_id");
   $stmt->bindParam(':update_name', $update_name);
   $stmt->bindParam(':update_email', $update_email);
   $stmt->bindParam(':user_id', $user_id);
   $stmt->execute();

   $old_pass = $_POST['old_pass'];
   $update_pass = md5($_POST['update_pass']);
   $new_pass = md5($_POST['new_pass']);
   $confirm_pass = md5($_POST['confirm_pass']);

   function alert($msg) {
      echo "<script>alert('$msg');</script>";
  }
  
   if(!empty($update_pass) || !empty($new_pass) || !empty($confirm_pass)){
      if($update_pass != $old_pass){
         alert('old password not matched!');
      }elseif($new_pass != $confirm_pass){
         alert('confirm password not matched!');
      }else{
         $stmt = $conn->prepare("UPDATE `users` SET password = :confirm_pass WHERE id = :user_id");
         $stmt->bindParam(':confirm_pass', $confirm_pass);
         $stmt->bindParam(':user_id', $user_id);
         $stmt->execute();
         alert('password updated successfully!');
      }
   }

//    $update_image = $_FILES['update_image']['name'];
//    $update_image_size = $_FILES['update_image']['size'];
//    $update_image_tmp_name = $_FILES['update_image']['tmp_name'];
//    $update_image_folder = 'uploaded_img/'.$update_image;

//    if(!empty($update_image)){
//       if($update_image_size > 2000000){
//          $message[] = 'image is too large';
//       }else{
//          $image_update_query = mysqli_query($conn, "UPDATE `user_form` SET image = '$update_image' WHERE id = '$user_id'") or die('query failed');
//          if($image_update_query){
//             move_uploaded_file($update_image_tmp_name, $update_image_folder);
//          }
//          $message[] = 'image updated succssfully!';
//       }
//    }

}

?>