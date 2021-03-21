<?php 

    require 'db-connect.php';
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['submit'])) {
            require 'input-validation.php';
            require 'db-insert.php';
        }
    }

?>