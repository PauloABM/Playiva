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
                    <h1 class="title is-1">Super Cool Website</h1>
                    <h2 class="subtitle colored is-4">Lorem ipsum dolor sit amet.</h2>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Corporis ex deleniti aliquam tempora libero excepturi vero soluta odio optio sed.</p>
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
                        <div class="field">
                            <button class="button is-success" name="btn"> Login </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>