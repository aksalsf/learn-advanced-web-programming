<?php 

    // Data Catch
    $identitas_nim = $_POST['identitas_nim'];
    $identitas_nama = $_POST['identitas_nama'];
    $identitas_password = password_hash($_POST['identitas_password'], PASSWORD_DEFAULT);
    $identitas_tanggal_lahir = $_POST['identitas_tanggal_lahir'];
    $identitas_gender = $_POST['identitas_gender'];
    $identitas_prodi = $_POST['identitas_prodi'];
    $identitas_keterangan = $_POST['identitas_keterangan'];
    $identitas_status = $_POST['identitas_status'];
    if (isset($_POST['identitas_citizenship'])) {
        $identitas_citizenship = $_POST['identitas_citizenship'];
    } else {
        $identitas_citizenship = 0;
    }

?>