<section class="section">
    <div class="columns">

        <div class="container is-centered is-max-desktop">
            <form action="" method="post">
                <h1 class="title">Redefinir senha</h1>
                <div class="field">
                    <label for="" class="label">Email</label>
                    <div class="control has-icons-left">
                        <input type="email" placeholder="ex. ana@gmail.com" name="email" class="input" required>
                        <span class="icon is-small is-left">
                            <i class="fa fa-envelope"></i>
                        </span>
                    </div>
                </div>
                <div class="field is-grouped is-pulled-right">
                    <div class="control">
                        <button class="button is-primary" onclick="document.getElementById('modal-pass').style.display='block'" name="btn">Enviar código</button>
                    </div>
                </div>
            </form>
            <div class="modal" id="modal-pass" >
                    <div class="modal-background"></div>
                    <div class="modal-card">
                        <header class="modal-card-head">
                            <p class="modal-card-title">Modal title</p>
                            <button class="delete" aria-label="close" onclick="document.getElementById('modal-pass').style.display='none'"></button>
                        </header>
                        <section class="modal-card-body">
                        <input type="text" placeholder="Código" name="codigo" class="input" required>
                        </section>
                        <footer class="modal-card-foot">
                            <button class="button is-success"  onclick="document.getElementById('modal-pass').style.display='none'">Enviar</button>
                            <button class="button" onclick="document.getElementById('modal-pass').style.display='none'">Cancel</button>
                        </footer>
                    </div>
                </div>
        </div>
    </div>
</section>