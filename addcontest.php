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
        $start_date = new DateTime($_POST['start_date']);
        $end_date = new DateTime($_POST['end_date']);
        $description = $_POST['description'];
        $contest_type = $_POST['contest_type'];

        // insert the data into the Problem table
        $stmt = $dbh->prepare("INSERT INTO Contest (name, start_date, end_date, description, contest_type) VALUES (:name, :start_date,:end_date, :description, :contest_type)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':start_date', $start_date->format('Y-m-d H:i:s'));
        $stmt->bindParam(':end_date', $end_date->format('Y-m-d H:i:s'));
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':contest_type', $contest_type);
        $stmt->execute();

        // redirect to a confirmation page
        header('Location: add_contest.php');
        exit;
    }
} catch(PDOException $e) {
    // handle any database errors
    die("Error: " . $e->getMessage());
}
