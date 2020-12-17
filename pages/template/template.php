<?php
$title = isset($title) ? $title : 'Playiva';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        <title><?= $title ?></title>
        <link rel="shortcut icon" href="../../assets/img/logoPlayivas.png" type="image/x-icon" />
        <!-- Bulma Version 0.9.0-->
        <link rel="stylesheet" href="../../assets/css/bulma.min.css" />
        <!-- Font Awesome -->
        <script defer src="../../assets/js/all.min.js"></script>
        <style>
            <?php if ($css) { include $css; } ?>
        </style>
    </head>
    <body>
        <?php if( isset($_SESSION['email']) && !empty($_SESSION['email']) ){ ?>
            <?php include 'header-logout.html'; ?> <!-- Header com botao de deslogar -->
        <?php }else{ ?>
            <?php include 'header.html'; ?>
        <?php } ?>


        <?php if ($prefix) { include $prefix . '.content.php'; } else { echo 'No content available'; } ?>
        <?php include 'footer.html'; ?>
    </body>
    <script>
        <?php if ($js) { include $js; } ?>
    </script>
</html>
