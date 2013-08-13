<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <?php include 'Tela/titulo.html'; ?>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php include 'Tela/header.html'; ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php //include 'Tela/menu_esquerdo.html;' ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <div class="span10">
                    <div class="well">

                        <hr />
                        <?php include 'Tela/form_login.html'; ?>
                        <hr />  
                        <?php include 'Tela/rodape.html'; ?>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
</html>


