<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo $stylesheet; ?>">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<?php echo $font_url; ?>" rel="stylesheet">
    <style>
    html,
    body {
        font-family: <?php echo $font_family;
        ?>;
    }
    </style>
    <title>
        <?php echo $sitename; ?>
    </title>
</head>

<body>
    <?php if(session_status() === PHP_SESSION_NONE): ?>
    <?php session_start(); ?>
    <?php if(isset($_SESSION['isSuccess'])): ?>
    <?php if($_SESSION['isSuccess'] == true): ?>
    <div class="p-3 fixed-top">
        <div class="alert alert-success" role="alert">
            Pendaftaran berhasil. Selamat datang, <?php echo $_SESSION['username']; ?>!
        </div>
    </div>
    <?php else: ?>
    <div class="p-3 fixed-top">
        <div class="alert alert-danger" role="alert">
            Pendaftaran gagal! <?php echo $_SESSION['errorMessage']; ?>
        </div>
    </div>
    <?php endif; ?>
    <?php endif; ?>
    <?php session_destroy(); ?>
    <?php endif; ?>