<?php
    require_once "config/config.php";

    session_start();
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
    $result = $conn->query("SELECT * FROM User WHERE Username='majda_admin'");

    $row=$result->fetch_assoc();
    $_SESSION['Username'] = $row['Username'];
    $_SESSION['First Name'] = $row['First Name'];
    $_SESSION['Last Name'] = $row['Last Name'];
    $_SESSION['Picture'] = $row['Picture'];
    $_SESSION['Email Address'] = $row['Email Address'];
    $_SESSION['Theme Mode'] = $row['Theme Mode'];

    $conn->close();
?>