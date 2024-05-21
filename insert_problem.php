<?php
require_once ('dbconnect.php');

$conn = mysqli_connect($server,$user,$password,$db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){

    $name = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pass = mysqli_real_escape_string($conn, md5($_POST['password']));

 
    $select = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND password = '$pass'") or die('query failed');
 
    if(mysqli_num_rows($select) > 0){
       $message[] = 'user already exist'; 
    // }else{
    //    if($pass != $cpass){
    //       $message[] = 'confirm password not matched!';
    //    }elseif($image_size > 2000000){
    //       $message[] = 'image size is too large!';
       }else{
        //   $insert = mysqli_query($conn, "INSERT INTO `user_form`(name, email, password, image) VALUES('$name', '$email', '$pass', '$image')") or die('query failed');
        $insert = mysqli_query($conn, "INSERT INTO `users`(username, email, password) VALUES('$name', '$email', '$pass')") or die('query failed');
 
          if($insert){
            //  move_uploaded_file($image_tmp_name, $image_folder);
            //  $message[] = 'registered successfully!';
             echo 'alert("Success, now you can log in!")';  
            //  header('location:index.php');
          }else{
            //  $message[] = 'registeration failed!';
            echo 'alert("Registeration Failed!")';  
          }
       }
    }
 
//  }

  $conn->close();
?>