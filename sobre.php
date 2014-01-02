<?php
require 'html.class.php';
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
                            <p align="justify">O Ptolomeu, é uma biblioteca virtual de trabalhos acadêmicos.</p>
                            <br>
                            <p align="justify">O Ptolomeu foi desenvolvido no Curso Técnico para Internet, na disciplina de Projeto 2013/2,
                                vinculado ao IFRG (Instituto Federal de Educação, Ciência e Tecnologia do Rio Grande do Sul).
                            </p>
                            <br>
                            <p align="justify">O Sistema visa armazenar, de forma digital, trabalhos autorais 
                                elaborados por alunos e professores em diversos níveis de ensino.
                                O sistema possui capacidade de cadastrar, consultar, alterar, exlucuir as informações relativas
                                aos trabalhos cadastrados, bem como as informações dos usuários do sistema que podem gerencias esses trabalhos e outros usuários.
                                Os trabalhos são armazenados em formato de arquivo PDF.
                            </p>
                            <br> 
                            <p align="justify"> Esse empreendimento ainda permite que qualquer usuário conectado à Internet,
                                sem necessariamente possuir uma conta de usuário, busque, leia e faça o download dos trabalhos previamente cadastrados.
                            </p>
                            <br> 
                           <p align="justify"> </p> 
                        </div>
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