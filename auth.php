<?php

    require_once("templates/header.php");
?>
 <div id="main-container" class="container-fluid">
     <div class="col-md-12">
        <div class="row" id="auth-row">
            <div class="col-md-4" id="login-container">
                <h2>Entrar</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha:</label>
                        <input type="text" class="form-control" id="password" name="password" placeholder="Digite sua senha">
                    </div>
                </form>
            </div>
            <div class="col-md-4" id="registrer-container">
                <h2>Criar Contato</h2>
            </div>
        </div>
     </div>
</div>
<?php
        require_once("templates/footer.php");
?>