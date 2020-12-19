<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['btn'])) {
    require_once 'crudLinguagem.php';
    $cadastrolinguagem = cadastroLinguagem(filter_input(INPUT_POST, 'name'));
}

if (isset($_GET['idRemover'])) {
    require_once 'crudLinguagem.php';
    $removerlinguagem = removerLinguagem($idRemover = filter_input(INPUT_GET, 'idRemover', FILTER_VALIDATE_INT));
}

if (isset($_GET['idAtualizar'])) {
    $id = filter_input(INPUT_GET, 'idAtualizar', FILTER_VALIDATE_INT);
    header("Location: updateLinguagem.content.php?id=".$id);
}
?>

<section class="section">
    <div class="columns">

        <div class="container is-centered is-max-desktop">
            <form action="" method="post">
                <h1 class="title">Cadastro</h1>
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
                    $linguagens = R::findAll('language');
                    $saida = '<table class="table is-hoverable">'
                                . '<thead>'
                                . '<tr>'
                                . '<th>Nome</th>'
                                . '<th>Opções</th>'
                                . '</tr>'
                                . '</thead>'
                                . '<tbody>';

                    foreach ($linguagens as $linguagem) {
                        $saida .= '<tr>';
                        $idLinguagem = $linguagem['id'];
                        $nomeLinguagem = $linguagem['name'];
                        $saida .= "<td>$nomeLinguagem</td>";
                        $saida .= "<td><a href=crudLinguagem.php?idAtualizar=".$idLinguagem.">Alterar</a></td>";
                        $saida .= "<td><a href=crudLinguagem.php?idRemover=".$idLinguagem.">Remover</a></td>";
                    }

                    $saida .= '</tbody></table >';
                    echo $saida;
                ?>
            </form>
        </div>
    </div>
</section>