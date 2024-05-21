<?php
require_once('dbconnect.php');

try {
    // connect to the database
    $dsn = "mysql:host=$server;dbname=$db";
    $dbh = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

    // check if the form was submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        // retrieve the form data
        $name = $_POST['name'];
        $description = $_POST['description'];
        $contest_id = $_POST['contestid'];

        // insert the data into the Problem table
        $stmt = $dbh->prepare("INSERT INTO Problem (name, description, contest_id) VALUES (:name, :description, :contest_id)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':contest_id', $contest_id);
        $stmt->execute();

        // redirect to a confirmation page
        header('Location: add_problem.php');
        exit;
    }
} catch(PDOException $e) {
    // handle any database errors
    die("Error: " . $e->getMessage());
}
