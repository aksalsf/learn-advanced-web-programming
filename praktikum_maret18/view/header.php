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
        font-family:
            <?php echo $font_family;
        ?>;
    }
    </style>
    <title>
        <?php echo $sitename; ?>
    </title>
</head>

<body>
    <?php require 'alert.php';