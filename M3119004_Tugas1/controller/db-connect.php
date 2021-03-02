<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "pwl_tugas1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

?>

<!-- Check connection -->
<?php if(!$conn): ?>
<div class="alert alert-danger m-5" role="alert">
    <?php die("Connection failed: " . mysqli_connect_error()); ?>
</div>
<?php endif; ?>