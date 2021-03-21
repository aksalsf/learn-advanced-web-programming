<?php 

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        if (isset($_POST['submit'])) {
            require '../../inc/setup.php';
            require 'connect.php';
            $nama = $_POST['nama'];
            $email = $_POST['email'];
            $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $prodi = $_POST['prodi'];
            $gender = $_POST['gender'];
            $alamat = $_POST['alamat'];
            if ($_POST['agreement'] == 1) {
                $agreement = 1;
            } else {
                $agreement = 0;
            }

            $sql = "INSERT INTO tb_identitas (nama, email, password, prodi, gender, alamat, agreement) VALUES('$nama', '$email', '$password', '$prodi', '$gender', '$alamat', '$agreement')";

            session_start();
            if (mysqli_query($conn, $sql)) {
                $_SESSION['message'] = "Pendaftaran berhasil!";
            } else {
                $_SESSION['error'] =  "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            header('Location: ../../');
        }
    }

?>