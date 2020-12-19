<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
?>

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

<section class="section">
    <div class="container is-centered is-max-desktop">
        <form action="" method="post">
            <h1 class="title">Admin</h1>
            <a href="../user/crudInstrumento.content.php" font-size = >Instrumentos</a><br>
            <a href="../user/crudLinguagem.content.php" font-size = >Linguagem</a><br>
            <a href="../user/crudTecnica.content.php" font-size = >Tecnica</a><br>
            <a href="../user/crudLicao.content.php" font-size = >Licao</a><br>
            <a href="../user/crudCanal.content.php" font-size = >Canal</a><br>
        </form>
    </div>
</section>
