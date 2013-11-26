<?php
require 'interface/html.class.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        $carregaClasseHtml = new html();

        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        $carregaClasseHtml->metaTag();
        $carregaClasseHtml->viewport();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->carregarJavascrip();
        ?>

    </head>

    <body>

        <?php
        $cabecalho = new html();
        $cabecalho->cabecalho();
        ?>

        <!-- Conteúdo -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Parágrafo -->
                        <div class="main-para">
                            <p>A leitura engrandece a alma. (Voltaire)</p>
                        </div>
                    </div>
                </div>
                <?php
                $rodape = new html();
                $rodape->rodape();
                ?>
            </div>
        </div>
        <!-- Fim Conteúdo-->





    </body>	
</html>