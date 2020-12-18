<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['btn'])) {
    require_once 'cadastro.php';
    $signup = signup(filter_input(INPUT_POST, 'firstName'), filter_input(INPUT_POST, 'lastName'), filter_input(INPUT_POST, 'email'), filter_input(INPUT_POST, 'passwordHash'));
}
?>

<section class="section">
    <div class="columns">

        <div class="container is-centered is-max-desktop">
            <form action="" method="post">
                <?php if (isset($signup) and $signup['status']) : ?>
                    <span style="text-align: center;color: green;margin: 2px auto;display: block;"><?php print $signup['message'] ?></span>
                <?php elseif (isset($signup) and !$signup['status']) : ?>
                    <span style="text-align: center;color: red;margin: 2px auto;display: block;"><?php print $signup['message'] ?></span>
                <?php endif ?>
                <h1 class="title">Cadastro</h1>
                <div class="field">
                    <label class="label">Nome</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Nome" name="firstName" required>
                    </div>
                </div>
                <div class="field">
                    <label class="label">Sobrenome</label>
                    <div class="control">
                        <input class="input" type="text" placeholder="Sobrenome" name="lastName" required>
                    </div>
                </div>
                <div class="field">
                    <label for="" class="label">Email</label>
                    <div class="control has-icons-left">
                        <input type="email" placeholder="ex. ana@gmail.com" name="email" class="input" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field">
                    <label for="" class="label">Senha</label>
                    <div class="control has-icons-left">
                        <input type="password" name="passwordHash" placeholder="*******" class="input" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                        </span>
                    </div>
                </div>
                <div class="field is-grouped is-pulled-right">
                    <div class="control">
                        <button class="button is-primary" name="btn">Cadastrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>