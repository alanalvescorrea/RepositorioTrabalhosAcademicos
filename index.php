<?php
include 'tela/tela.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">


        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php
        $header = new tela();
        $header->header();
        ?>

        <div class="container">
            <div class="row">
                <div class="span4 offset4 well">
                    <legend>Acesso ao sistema</legend>
                    <!--<div class="alert alert-error">
                        <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
                    </div>-->
                    <form method="POST" action="Negocio/validacao.php" accept-charset="UTF-8">
                        <input type="text" id="txtUsuario" class="span4" name="usuario" placeholder="nome de usuário">
                        <input type="password" id="senhatxtSenha" class="span4" name="senha" placeholder="senha">
                        <label class="checkbox">
                            
                        </label>
                        <button type="submit" name="submit" class="btn btn-info btn-block">Entrar</button>
                    </form>    
                </div>
            </div>
        </div>

    </body>
</html>


