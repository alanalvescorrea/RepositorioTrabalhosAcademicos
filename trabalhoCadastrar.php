<?php
require 'acessoSeguranca.php';
require 'persistencia/classe_conexao.php';
require 'html.class.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $carregaClasseHtml = new html();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        ?>
    </head>

    <body>
        <?php
        $header = new html ();
        $header->topoSistema();
        ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php
                $menuEsquerdo = new html ();
                $menuEsquerdo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br>
                <br>
                <br>
                <div class="span10">
                    <?php
                    $informacoesSobreSessao = new html();
                    $informacoesSobreSessao->informarSessao();
                    ?>

                    <div class="span10">
                        <legend class="breadcrumb">Cadastrar trabalhos</legend>

                        <?php
                        $titulo = $_POST['titulo'];
                        $autor = $_POST['autor'];
                        $tipo = $_POST['tipo'];
                        $resumo = $_POST['resumo'];
                        $abstract = $_POST['abstract'];
                        $numero_paginas = $_POST['numero_paginas'];
                        $data = $_POST['data'];
                        $dataFormatoMySQL = implode("-", array_reverse(explode("/", $data)));
                        $local_pdf = $_POST['local_pdf'];
                        $palavras_chave = $_POST['palavras_chave'];
                        $area = $_POST['area'];
                        $instituicao = $_POST['instituicao'];
                        $orientador = $_POST['orientador'];
                        $ativo = 1;


                        $html = new html();
                        $html->includes();
                        $html->unicode();
                        $novaConexao = new conexao();
                        $novaConexao->conecta();

                        $query = mysql_query("INSERT INTO `trabalho_academico` ( `titulo`, `tipo` , `resumo` , `abstract` , `numero_paginas` , `data` , `local_pdf` , `palavras_chave` , `area`,`autor`,`instituicao`,`orientador`,`ativo`)  
VALUES ('$titulo', '$tipo', '$resumo', '$abstract', $numero_paginas, '$dataFormatoMySQL', '$local_pdf', '$palavras_chave', '$area','$autor','$instituicao','$orientador',$ativo)");

                        if ($query) {
                            $mensagemSucesso = new html();
                            $mensagemSucesso->menssagemDadosGravadosComSucesso();
                        } else {

                            $mensagemErro = new html();
                            $mensagemErro->menssagemDadosNaoGravados();
                        }
                        ?>

                    </div>
                    <br>

                </div>
            </div>
            <?php
            $rodape = new html ();
            $rodape->rodape();
            ?>

        </div>
    </div>
</body>
</html>

