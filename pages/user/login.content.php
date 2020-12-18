<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['btn'])) {
    require_once 'login.php';
    $login = login(filter_input(INPUT_POST, 'email'), filter_input(INPUT_POST, 'passwordHash'));
}
?>

<section class="container mobile-margin">
    <div class="columns is-multiline">
        <div class="column is-8 is-offset-2 register">
            <div class="columns">
                <div class="column left">
                    <h1 class="title is-1">Playiva</h1>
                    <h2 class="subtitle colored is-4">Aprenda a tocar de um jeito descomplicado.</h2>
                    <p>Tenha acesso as melhores videoaulas de aprendizado. Filtre suas aulas por linguagens, canais e técnicas.</p>
                </div>
                <div class="column right">
                    <form action="" class="box" method="post">

                        <?php if (isset($login) and $login['status']) : ?>
                            <span style="text-align: center;color: green;margin: 2px auto;display: block;"><?php print $login['message'] ?></span>
                        <?php elseif (isset($login) and !$login['status']) : ?>
                            <span style="text-align: center;color: red;margin: 2px auto;display: block;"><?php print $login['message'] ?></span>
                        <?php endif ?>
                        <h1 class="title is-4 column left">Login</h1>
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
                                <input type="password" placeholder="*******" class="input" name="passwordHash" required>
                                <span class="icon is-small is-left">
                                    <i class="fa fa-lock"></i>
                                </span>
                            </div>
                        </div>
                        <div class="has-text-centered">

                        </div>
                        <div class="field">
                            <button class="button is-primary is-pulled-right" name="btn"> Login </button>
                        </div>
                        <div class="has-text-centered p_desce">
                            <p><a href="reset-password.php">Esqueceu sua senha?</a> · <a href="cadastro.php">Cadastre-se</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>