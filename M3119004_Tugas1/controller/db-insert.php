<?php 

    $sql = "INSERT INTO tb_identitas(identitas_nim, identitas_nama, identitas_password, identitas_tanggal_lahir, identitas_gender, identitas_prodi, identitas_keterangan, identitas_status, identitas_citizenship) VALUES ('$identitas_nim', '$identitas_nama', '$identitas_password', '$identitas_tanggal_lahir', '$identitas_gender', '$identitas_prodi', '$identitas_keterangan', '$identitas_status', '$identitas_citizenship')";

    session_start();
    if (mysqli_query($conn, $sql)) {
        $_SESSION['isSuccess'] = true;
        $_SESSION['username'] = $identitas_nama;
        header("Location: ../");
    } else {
        $_SESSION['isSuccess'] = false;
        $_SESSION['errorMessage'] = mysqli_error($conn);
        header("Location: ../");
    }

?>