<?php

require 'inc/setup.php';
require 'view/header.php';
require 'class/form.php';

$myForm = new Form('index.php', 'POST', 'submit');
$myForm->add_field('Nama', 'nama', 'text');
$myForm->add_field('Program Studi', 'prodi', 'select', array("ti", "te"), array("D3 Teknik Informatika", "D3 Teknik Elektro"));

?>

<main class="d-md-flex">
    <section class="col-md-6 d-flex align-items-center bg-danger p-md-5 p-3">
        <img src="img/img-01.png" class="img-fluid">
    </section>
    <section class="col-md-6 p-md-5 p-3">
        <h1 class="text-danger fw-bold">Daftar</h1>
        <p class="text-secondary lead">Nikmati fitur kami, sepuasnya!</p>
        <?php $myForm -> display_form(); ?>
    </section>
</main>

<?php require 'view/footer.php';