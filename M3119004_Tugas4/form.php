<?php

require 'header.php';

?>

<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <a href="." title="Klik untuk melihat tabel data~"><img src="img/img-01.png" class="img-fluid"></a>
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger display-1 fw-bold">#Pendaftaran</h1>
        <?php require 'view/cetakForm.php'; ?>
    </section>
</main>

<?php require 'footer.php';