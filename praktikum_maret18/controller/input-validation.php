<?php 

    require 'project-class.php';
    // Menangkap data dari input form
    $mahasiswaBaru = new Mahasiswa();
    $mahasiswaBaru -> inputData(
                    $_POST['identitas_nim'],
                    $_POST['identitas_nama'],
                    $_POST['identitas_password'],
                    $_POST['identitas_tanggal_lahir']
                );

?>