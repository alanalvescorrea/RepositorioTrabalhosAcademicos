<?php
include '../negocio/seguranca.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <?php include '../tela/titulo.html'; ?>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="../js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php include '../tela/header.html'; ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php include '../tela/menu_esquerdo.html'; ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 

                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <h4>Trabalhos acadêmicos</h4>
                    <div class="span1">
                        <a href="../negocio/trabalho_cadastrar.php" class="btn btn-primary">
                            <i class="icon-pencil icon-white"></i>
                            <span><strong>Cadastrar</strong></span>            
                        </a>
                    </div>
                    <div class="span1">
                        <a href="#" class="btn btn-primary">
                            <i class="icon-eye-open icon-white"></i>
                            <span><strong>Listar</strong></span>        	
                        </a>
                    </div>
                    <div class="span1">
                        <a href="#" class="btn btn-primary">
                            <i class="icon-edit icon-white"></i>
                            <span><strong>Editar</strong></span>       
                        </a> 	
                    </div>
                    <div class="span1">
                        <a href="#" class="btn btn-primary">
                            <i class="icon-trash icon-white"></i>
                            <span><strong>Excluir</strong></span>        	
                        </a>
                    </div>

                </div>

            </div>
        </div>
        <?php include '../tela/rodape.html'; ?>
    </body>
</html>


