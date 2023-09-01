<?php
    require_once "../userManagement.php";
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($userMgt->login($email, $password)) {
        header("Location: {$webBaseURL}");
        exit();
    }    
    ?>