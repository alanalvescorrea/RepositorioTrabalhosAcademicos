<?php
require '../negocio/seguranca.php';
require '../tela/tela.php';
?>


<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
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
                <?php
                $menuEsquerdo = new tela();
                $menuEsquerdo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">
                    <?php echo 'Ol� ' . $_SESSION['UsuarioNome'] . '!'; ?> 
                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <legend class="breadcrumb">Editar Trabalhos Acad�micos Cadastrados</legend>

                    <?php
                    $id = $_GET['id']; // Recebendo o valor vindo do link

                    include ('../persistencia/classe_conexao.php');
                    $novaConexao = new conexao();
                    $novaConexao->conecta();


                    $resultado = mysql_query("SELECT * FROM trabalho_academico WHERE id = '" . $id . "'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
                    while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
                        ?>
                        <form class="form-horizontal" method="post" action="editar_exibir_edicao.php" >
                            <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" /> <!– passando o valor da id em um campo oculto –>

                            <!-- editar titulo -->
                            <div class="control-group">
                                <label class="control-label"  for="titulo">T�tulo do trabalho:</label>
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
                                        <label class="control-label"  for="numero_paginas">N�mero de P�ginas:</label>
                                        <div class="controls">
                                            <input type="text" name="numero_paginas" value="<?php echo $linha['numero_paginas']; ?>" class="input-mini"/> <br /><br />
                                        </div>
                                        <!-- fim numero de páginas -->

                                        <!-- editar data apresentação -->
                                        <div class="control-group">
                                            <label class="control-label"  for="data">Data Apresenta��o:</label>
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
                                                        <label class="control-label"  for="area">�rea do Conhecimento:</label>
                                                        <div class="controls">
                                                            <input type="text" name="area" value="<?php echo $linha['area']; ?>" /> <br />    <br />                     
                                                        </div>
                                                        <!-- fim area -->

                                                        <!-- editar aluno -->
                                                        <div class="control-group">
                                                            <label class="control-label"  for="aluno">Aluno:</label>
                                                            <div class="controls">
                                                                <input type="text" name="aluno" value="<?php echo $linha['aluno']; ?>" /> <br /><br />
                                                            </div>
                                                            <!-- fim aluno -->

                                                            <!-- editar instituição -->
                                                            <div class="control-group">
                                                                <label class="control-label"  for="instituicao">Institui��o:</label>
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
                                                                                <button class="btn btn-success">Atualizar Informa��es</button>

                                                                            </div>
                                                                        </div>

                                                                        </form>
                                                                        <?php
                                                                    }
                                                                    ?> 

                                                                </div>
                                                            </div>
                                                            <?php
                                                            $rodape = new tela();
                                                            $rodape->rodape();
                                                            ?>
                                                            </body>
                                                            </html>
