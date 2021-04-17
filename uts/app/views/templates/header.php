<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="<?= FONT_URL; ?>" rel="stylesheet">
    <style>
    html,
    body {
        font-family:
            <?=FONT_FAMILY;
        ?>;
    }
    </style>
    <title>
        <?= $data['title']; ?>
    </title>
</head>

<body>

    <?php Flasher::flash(); ?>
    