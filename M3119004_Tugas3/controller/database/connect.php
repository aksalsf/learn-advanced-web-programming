<?php
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
        session_start();
        $_SESSION['error'] = "Connection failed: " . mysqli_connect_error();
    }
?>