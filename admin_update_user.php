<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Programming Tracker</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" type="text/css" href="./assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/user.css">
</head>

<body>

    
    <div class="container_edit">

    <div class="update-profile">

    <?php
    require_once ('dbconnect.php');

    // Retrieve the ID from the URL parameter if it exists
    $user_id = isset($_GET['id']) ? $_GET['id'] : null;

    // Check if the ID is set and not empty
    if(!empty($user_id)){
        $select = $conn->prepare("SELECT * FROM `users` WHERE id = :user_id");
        $select->bindParam(':user_id', $user_id);
        $select->execute();
        
        if($select->rowCount() > 0){
            $fetch = $select->fetch(PDO::FETCH_ASSOC);
        }
    }
    ?>


    <form action="a_update.php?id=<?php echo $user_id; ?>" method="post" enctype="multipart/form-data">
    <?php

          if(isset($message)){
            foreach($message as $message){
                echo '<div class="message">'.$message.'</div>';
            }
          }
      ?>
      <div class="flex">
          <div class="inputBox">
            <span>Username:</span>
            <input type="text" name="update_name" value="<?php echo $fetch['username']; ?>" class="box">
            <span>Email:</span>
            <input type="email" name="update_email" value="<?php echo $fetch['email']; ?>" class="box">
            <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
          </div>
          <div class="inputBox">
            <span>New password:</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>Confirm password:</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
          </div>
      </div>
      <input type="submit" value="Update" name="update_profile" class="btn">
      <a href="admin.php" class="delete-btn">Admin</a>
    </form>

    </div>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
