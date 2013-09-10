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

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php //include 'Tela/menu_esquerdo.html;'  ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <div class="span10">
                    <div class="well">

                        <hr />
                        <form class="form-horizontal" action='Negocio/validacao.php' method="POST">
                            <fieldset>
                                <div id="legend">
                                    <legend class="">Acesso ao sistema</legend>
                                </div>
                                <div class="control-group">
                                    <!-- usuario -->
                                    <label class="control-label"  for="username">Nome de usuário</label>
                                    <div class="controls">
                                        <input type="text" id="txtUsuario" name="usuario" placeholder="" class="input-xlarge">
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- senha-->
                                    <label class="control-label" for="password">Senha</label>
                                    <div class="controls">
                                        <input type="password" id="senhatxtSenha" name="senha" placeholder="" class="input-xlarge">
                                    </div>
                                </div>


                                <div class="control-group">
                                    <!-- botão de acesso -->
                                    <div class="controls">
                                        <button class="btn btn-success">Acessar</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        <hr />  
                        <?php
                        $rodape = new tela();
                        $rodape->rodape()
                        ?>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>


