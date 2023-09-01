<?php
    include_once "../appBase.php";

    session_unset();
    session_destroy();

    header("Location: {$webBaseURL}")
?>