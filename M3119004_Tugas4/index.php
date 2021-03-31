<?php

require 'header.php';

?>

<main class="d-md-flex">
    <section class="col-md-3 d-flex align-items-center bg-warning bg-gradient p-md-5 p-3" style="height:100vh">
        <img src="img/img-02.png" class="img-fluid">
    </section>
    <section class="col-md-9 p-md-5 p-3 bg-light">
        <h1 class="display-1 text-danger fw-bold">#Data User</h1>
        <a href="form.php" class="text-danger text-decoration-none">[+] Tambah Data</a>
        <?php require 'view/cetakData.php'; ?>
    </section>
</main>

<?php require 'footer.php';