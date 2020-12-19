<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['btn'])) {
    $idAtualizacao = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
    $nome = filter_input(INPUT_POST, 'name');
    require_once 'crudInstrumento.php';
    $atualizarinstrumento = atualizarInstrumento($idAtualizacao, $nome);
}
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
            <h1 class="title">Atualização</h1>
            <div class="field">
                <label class="label">Nome</label>
                <div class="control">
                    <input class="input" type="text" placeholder="Nome" name="name" required>
                </div>
            </div>
            <div class="field is-grouped is-pulled-right">
                <div class="control">
                    <button class="button is-primary" name="btn">Enviar</button>
                </div>
            </div>
        </form>
    </div>
</section>