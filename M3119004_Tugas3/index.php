<?php

require 'inc/setup.php';
require 'controller/database/connect.php';
require 'view/header.php';
require 'view/alert.php';
require 'class/form.php';

$myForm = new Form('controller/database/insert.php', 'POST', 'submit', "Daftar");
$myForm->add_field('Nama', 'nama', 'text');
$myForm->add_field('Email', 'email', 'email');
$myForm->add_field('Password', 'password', 'password');
$myForm->add_field('Program Studi', 'prodi', 'select', array("Teknik Informatika", "Teknik Elektro"), array("D3 Teknik Informatika", "D3 Teknik Elektro"));
$myForm->add_field('Jenis Kelamin', 'gender', 'radio', array("L", "P"), array ("Laki-laki", "Perempuan"));
$myForm->add_field('Alamat', 'alamat', 'textarea');
$myForm->add_field(null, 'agreement', 'checkbox', array(1), array("Dengan mendaftar saya menyetujui persyaratan yang berlaku."));

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