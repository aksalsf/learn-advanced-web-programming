<?php 

    $sql = "INSERT INTO tb_identitas(
                        identitas_nim,
                        identitas_nama,
                        identitas_password,
                        identitas_tanggal_lahir)
            VALUES (
                '$mahasiswaBaru->nim',
                '$mahasiswaBaru->nama',
                '$mahasiswaBaru->password',
                '$mahasiswaBaru->ttl'
                )";

    session_start();
    if (mysqli_query($conn, $sql)) {
        $_SESSION['isSuccess'] = true;
        $_SESSION['username'] = $mahasiswaBaru->nama;
        header("Location: ../");
    } else {
        $_SESSION['isSuccess'] = false;
        $_SESSION['errorMessage'] = mysqli_error($conn);
        header("Location: ../");
    }

?>