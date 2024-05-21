<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Programming Tracker</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/headers/">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/footers/">
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/user.css">

</head>

<body>
    <?php include 'header_user.php';?>
    
    <div class="container_edit">

    <div class="update-profile">

    <?php
      $select = $conn->query("SELECT * FROM `users` WHERE id = '$user_id'") or die('query failed');
      if($select->rowCount() > 0){
          $fetch = $select->fetch(PDO::FETCH_ASSOC);
      }
    ?>


    <form action="u_update.php" method="post" enctype="multipart/form-data">
      <?php
          // if($fetch['image'] == ''){
          //   echo '<img src="images/default-avatar.png">';
          // }else{
          //   echo '<img src="uploaded_img/'.$fetch['image'].'">';
          // }
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
            <!-- <span>Update profile picture:</span> -->
            <!-- <input type="file" name="update_image" accept="image/jpg, image/jpeg, image/png" class="box"> -->
          </div>
          <div class="inputBox">
            <input type="hidden" name="old_pass" value="<?php echo $fetch['password']; ?>">
            <span>Old password:</span>
            <input type="password" name="update_pass" placeholder="enter previous password" class="box">
            <span>New password:</span>
            <input type="password" name="new_pass" placeholder="enter new password" class="box">
            <span>Confirm password:</span>
            <input type="password" name="confirm_pass" placeholder="confirm new password" class="box">
          </div>
      </div>
      <input type="submit" value="Update" name="update_profile" class="btn">
      <a href="dashboard.php" class="delete-btn">Dashboard</a>
    </form>

    </div>
    
    <?php include 'footer_user.php';?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>