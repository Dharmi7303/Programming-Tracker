<?php

// include './dbconnect.php';
// session_start();
// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// };

// if(isset($_GET['logout'])){
//    unset($user_id);
//    session_destroy();
//    header('location:login.php');
// }

?>

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

</head>

<body>
    <?php include 'header_user.php';?>
    
    <table>
    
    <?php include 'user_details.php'; ?>
      <tr>
        <th>Username:</th>
        <td><?php echo $row["username"]; ?></td>
      </tr>
      <tr>
        <th>Email:</th>
        <td><?php echo $row["email"]; ?></td>
      </tr>
      <tr>
        <th>Joined:</th>
        <td><?php echo $row["datejoin"]; ?></td>
      </tr>
    </table>
    
    <?php include 'footer_user.php';?>

    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>