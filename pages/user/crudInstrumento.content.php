<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['btn'])) {
    require_once 'crudInstrumento.php';
    $cadastroinstrumento = cadastroInstrumento(filter_input(INPUT_POST, 'name'));
}

if (isset($_GET['idRemover'])) {
    require_once 'crudInstrumento.php';
    $removerinstrumento = removerInstrumento($idRemover = filter_input(INPUT_GET, 'idRemover', FILTER_VALIDATE_INT));
}

if (isset($_GET['idAtualizar'])) {
    $id = filter_input(INPUT_GET, 'idAtualizar', FILTER_VALIDATE_INT);
    header("Location: updateInstrumento.content.php?id=".$id);
}
?>

<section class="section">
    <div class="columns">

        <div class="container is-centered is-max-desktop">
            <form action="" method="post">
                <h1 class="title">Instrumento</h1>
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
            
            <form action ="" method="get">
                <?php
                    $instrumentos = R::findAll('instrument');
                    $saida = '<table class="table is-hoverable">'
                                . '<thead>'
                                . '<tr>'
                                . '<th>Nome</th>'
                                . '<th>Opções</th>'
                                . '</tr>'
                                . '</thead>'
                                . '<tbody>';

                    foreach ($instrumentos as $instrumento) {
                        $saida .= '<tr>';
                        $idInstrumento = $instrumento['id'];
                        $nomeInstrumento = $instrumento['name'];
                        //$saida .= "<td>$idInstrumento</td>";
                        $saida .= "<td>$nomeInstrumento</td>";
                        $saida .= "<td><a href=crudInstrumento.php?idAtualizar=".$idInstrumento.">Alterar</a></td>";
                        $saida .= "<td><a href=crudInstrumento.php?idRemover=".$idInstrumento.">Remover</a></td>";
                    }

                    $saida .= '</tbody></table >';
                    echo $saida;
                ?>
            </form>
        </div>
    </div>
</section>