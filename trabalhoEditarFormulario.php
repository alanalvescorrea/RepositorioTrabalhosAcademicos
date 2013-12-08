<?php
include 'acessoSeguranca.php';
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
                        <legend class="breadcrumb">Editar Trabalhos acadêmicos cadastrados</legend>

                        <?php
                        $id = $_GET['id']; // Recebendo o valor vindo do link

                        include ('persistencia/classe_conexao.php');
                        $novaConexao = new conexao();
                        $novaConexao->conecta();


                        $resultado = mysql_query("SELECT * FROM trabalho_academico WHERE id = '" . $id . "'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
                        while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
                            ?>
                            <form class="form-horizontal" method="post" action="trabalhoEditarUpdate.php" >
                                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" /> <!– passando o valor da id em um campo oculto –>

                                <!-- editar titulo -->
                                <div class="control-group">
                                    <label class="control-label"  for="titulo">Título do trabalho:</label>
                                    <div class="controls">
                                        <input type="text" name="titulo" value="<?php echo $linha['titulo']; ?>" class="input-xxlarge"/> <br /><!– mostrando dentro do form o valor do campo nome –>
                                    </div>
                                </div>
                                <!-- fim titulo -->

                                <!-- editar tipo -->
                                <div class="control-group">
                                    <label class="control-label"  for="tipo">Tipo:</label>
                                    <div class="controls">
                                        <input type="text" name="tipo" value="<?php echo $linha['tipo']; ?>" class="input-medium"/> <br />                                
                                    </div>
                                </div>
                                <!-- fim tipo -->

                                <!-- editar resumo -->
                                <div class="control-group">
                                    <label class="control-label" for="resumo">Resumo:</label>
                                    <div class="controls">
                                        <textarea class="field span8" name="resumo" rows="10"><?php echo $linha['resumo']; ?> </textarea><br />     <br />                         
                                    </div>
                                    <!-- fim resumo -->

                                    <!-- editar abstract -->
                                    <div class="control-group">
                                        <label class="control-label" for="abstract">Abstract:</label>
                                        <div class="controls">
                                            <textarea class="field span8" name="abstract" rows="10"><?php echo $linha['abstract']; ?> </textarea><br />     <br />                         
                                        </div>
                                        <!-- fim abstract -->

                                        <!-- editar numero de páginas -->
                                        <div class="control-group">
                                            <label class="control-label"  for="numero_paginas">Número de Páginas:</label>
                                            <div class="controls">
                                                <input type="text" name="numero_paginas" value="<?php echo $linha['numero_paginas']; ?>" class="input-mini"/> <br /><br />
                                            </div>
                                            <!-- fim numero de páginas -->

                                            <!-- editar data apresentação -->
                                            <div class="control-group">
                                                <label class="control-label"  for="data">Data Apresentação:</label>
                                                <div class="controls">
                                                    <input type="text" name="data" value="<?php echo $linha['data']; ?>" /> <br /><br />
                                                </div>
                                                <!-- fim data apresentação -->

                                                <!-- editar local arquivo -->
                                                <div class="control-group">
                                                    <label class="control-label"  for="local_pdf">Local do Arquivo:</label>
                                                    <div class="controls">
                                                        <input type="text" name="local_pdf" value="<?php echo $linha['local_pdf']; ?>" class="input-xxlarge"/> <br /><br />
                                                    </div>
                                                    <!-- fim local arquivo -->

                                                    <!-- editar palavras-chave -->
                                                    <div class="control-group">
                                                        <label class="control-label"  for="palavras_chave">Palavras-Chave:</label>
                                                        <div class="controls">
                                                            <input type="text" name="palavras_chave" value="<?php echo $linha['palavras_chave']; ?>" class="input-xxlarge"/> <br /><br />  
                                                        </div>
                                                        <!-- fim palavras chave -->

                                                        <!-- editar area -->
                                                        <div class="control-group">
                                                            <label class="control-label"  for="area">Área do conhecimento:</label>
                                                            <div class="controls">
                                                                <input type="text" name="area" value="<?php echo $linha['area']; ?>" /> <br />    <br />                     
                                                            </div>
                                                            <!-- fim area -->

                                                            <!-- editar aluno -->
                                                            <div class="control-group">
                                                                <label class="control-label"  for="autor">autor:</label>
                                                                <div class="controls">
                                                                    <input type="text" name="autor" value="<?php echo $linha['autor']; ?>" /> <br /><br />
                                                                </div>
                                                                <!-- fim aluno -->

                                                                <!-- editar instituição -->
                                                                <div class="control-group">
                                                                    <label class="control-label"  for="instituicao">Instituição:</label>
                                                                    <div class="controls">
                                                                        <input type="text" name="instituicao" value="<?php echo $linha['instituicao']; ?>" class="input-xxlarge"/> <br /><br />
                                                                    </div>
                                                                    <!-- fim instituição -->

                                                                    <!-- editar orientador -->
                                                                    <div class="control-group">
                                                                        <label class="control-label"  for="orientador">Orientador:</label>
                                                                        <div class="controls">
                                                                            <input type="text" name="orientador" value="<?php echo $linha['orientador']; ?>" /> <br /><br />
                                                                        </div>
                                                                        <!-- fim orientador -->


                                                                        <!-- editar Ativo -->
                                                                        <div class="control-group">
                                                                            <label class="control-label"  for="ativo">Ativo:</label>
                                                                            <div class="controls">
                                                                                <input type="text" name="ativo" value="<?php echo $linha['ativo']; ?>" /> <br /><br />
                                                                            </div>
                                                                            <!-- fim ativo -->

                                                                            <div class="control-group">
                                                                                <!-- botão de acesso -->
                                                                                <div class="controls">
                                                                                    <button class="btn btn-success">Atualizar Informações</button>

                                                                                </div>
                                                                            </div>

                                                                            </form>
                                                                            <?php
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


