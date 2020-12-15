<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.14.0/js/all.js"></script>

</head>

<body>
    <nav class="navbar is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="">
                <img src="img/logoPlayivas.png" alt="Playivas o melhor lugar pra aprender seu instrumento" width="112" height="28">
            </a>
            <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <div id="navbarExampleTransparentExample" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="*">
                    Início
                </a>
                <a class="navbar-item" href="">
                    Sobre
                </a>
                <a class="navbar-item" href="">
                    Learn
                </a>
                <a class="navbar-item" href="">
                    Improve
                </a>
                <a class="navbar-item" href="">
                    Sobre nós
                </a>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="field">
                        <div class="control">
                            <!--<a href="login.php" class="button">Login</a>-->
                            <a class="button" href="cadastro.php">Cadastro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
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
                        <form action="" class="box">
                            <h1 class="title is-4 column left">Login</h1>
                            <div class="field">
                                <label for="" class="label">Email</label>
                                <div class="control has-icons-left">
                                    <input type="email" placeholder="ex. ana@gmail.com" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <label for="" class="label">Senha</label>
                                <div class="control has-icons-left">
                                    <input type="password" placeholder="*******" class="input" required>
                                    <span class="icon is-small is-left">
                                        <i class="fa fa-lock"></i>
                                    </span>
                                </div>
                            </div>
                            <div class="field">
                                <button class="button is-success"> Login </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </section>

</body>
<style>
    .register {
        margin-top: 10rem;
        background: white;
        border-radius: 10px;
    }
    @media screen and (max-width: 768px) {
        .mobile-margin{
            margin-left: 2em;
            margin-right: 2em;
        }
    }
</style>

</html>