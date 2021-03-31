<?php

require 'model/form.php';
$myForm = new Form('controller/formSubmit.php', 'POST', 'submit', 'Daftar');
$myForm->add_field('Nama', 'nama', 'text');
$myForm->add_field('Email', 'email', 'email');
$myForm->add_field('Password', 'password', 'password');
$myForm->add_field('Tanggal Lahir', 'birthday', 'date');
$myForm->add_field('Program Studi', 'prodi', 'select', ['Teknik Informatika', 'Teknik Elektro'], ['D3 Teknik Informatika', 'D3 Teknik Elektro']);
$myForm->add_field('Jenis Kelamin', 'gender', 'radio', ['L', 'P'], ['Laki-laki', 'Perempuan']);
$myForm->add_field('Alamat', 'alamat', 'textarea');
$myForm->add_field(null, 'agreement', 'checkbox', [1], ['Dengan mendaftar saya menyetujui persyaratan yang berlaku.']);
$myForm->display_form();