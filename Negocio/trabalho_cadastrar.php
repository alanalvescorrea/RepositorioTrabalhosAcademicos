<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">

        <!-- JQUERY -->
        <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">


        <!-- TWITTER BOOTSTRAP JS -->
        <script src="../js/bootstrap.min.js"></script>





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
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 

                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  

                    <!-- INICIO FORM -->
                    <form class="form-horizontal" action='classe_trabalho_academico.php' method="POST">
                        <fieldset>
                            <div id="legend">
                                <legend class="breadcrumb">Cadastrar novo trabalho acadêmico</legend>
                            </div>

                            <!-- titulo -->
                            <div class="control-group">
                                <label class="control-label"  for="titulo">Título do trabalho</label>
                                <div class="controls">
                                    <input type="text" id="titulo" name="titulo" placeholder="" class="input-xlarge" required="">
                                </div>
                            </div>
                            <!-- aluno -->
                            <div class="control-group">
                                <label class="control-label"  for="aluno">Aluno</label>
                                <div class="controls">
                                    <?php include 'aluno.php'; ?>
                                    <?php /*echo 'cadastrar'; */?> 
                                    <a href="#" onclick="window.open('aluno_cadastrar.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=1000, HEIGHT=500');">Cadastrar Aluno</a>

                                    <?php /*echo '<a href="aluno_cadastrar.php" target="_blank"> novo aluno</a>'; */?>

                                </div>
                            </div>
                            <!--form cadastrar novon aluno-->
                            <!-- orientador -->
                            <div class="control-group">
                                <label class="control-label"  for="aluno">Orientador</label>
                                <div class="controls">
                                    <?php include 'orientador.php'; ?>
                                    <?php /*echo 'cadastrar'; */?> 
                                    <?php /*echo '<a href="orientador_cadastrar.php" target="_blank"> novo orientador</a>'; */?>
                                    <a href="#" onclick="window.open('orientador_cadastrar.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=1000, HEIGHT=500');">Cadastrar Orientador</a>

                                </div>
                            </div>
                            <!-- fim orientador -->
                             <!-- data -->
                            <div class="control-group">

                                <label class="control-label"  for="data">Data Apresentação  </label>
                                <div class="controls">
                                    <?php include '../tela/date_time_picker.html'; ?>
                                </div>
                            </div>
                             <!-- fim data -->

                            <!-- tipo -->
                            <div class="control-group">
                                <label class="control-label" for="tipo">Tipo</label>
                                <div class="controls">
                                    <select class="selectpicker show-tick" id="tipo" name="tipo" required="">
                                        <option>Monografia</option>
                                        <option>Dissertação</option>
                                        <option>Tese</option>
                                        <!--<option>Paper</option>-->
                                    </select>
                                </div>
                            </div>

                            <!-- resumo -->
                            <div class="control-group">
                                <label class="control-label"  for="resumo">Resumo</label>
                                <div class="span6">
                                    <textarea class="field span12" id="resumo" rows="6" name="resumo" required=""></textarea>
                                </div>
                            </div>
                            <!-- palavras chaves -->
                            <div class="control-group">
                                <label class="control-label"  for="palavras_chave">Palavras-Cahave</label>
                                <div class="controls">
                                    <input type="text" id="palavra_chave" name="palavras_chave" class="input-xlarge" required="">
                                </div>
                            </div>
                            <!-- fim palavras chaves -->
                            <!--abstract-->
                            <div class="control-group">

                                <label class="control-label"  for="abstract">Abstract</label>
                                <div class="span6">
                                    <textarea class="field span12" id="abstract" rows="6" name="abstract" required=""></textarea>
                                </div>
                            </div>

                            <!-- numero paginas -->
                            <div class="control-group">

                                <label class="control-label"  for="num_pag">Número de Páginas</label>
                                <div class="controls">
                                    <input type="text" id="num_pag" name="numero_paginas" placeholder="" class="input-small" required="">
                                </div>
                            </div>
                           



                            <!-- area -->
                            <div class="control-group">
                                <label class="control-label"  for="area">Area</label>
                                <div class="controls">
                                    <?php include 'area.php'; ?>
                                </div>
                            </div>

                            <!-- instituição -->
                            <div class="control-group">
                                <label class="control-label"  for="aluno">Instituicão</label>
                                <div class="controls">
                                    <?php include 'instituicao.php'; ?>
                                    <?php /*echo 'cadastrar'; */?> 
                                    <?php /*echo '<a href="instituicao_cadastrar.php" target="_blank"> nova instituição</a>'; */?>
                                    <a href="#" onclick="window.open('instituicao_cadastrar.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=1000, HEIGHT=500');">Cadastrar Instituição</a>

                                </div>
                            </div>

                            <!-- orientador -->
                            <div class="control-group">
                                <label class="control-label"  for="aluno">Enviar arquivo</label>
                                <div class="controls">
                                    <!--
                                    <?php /* include 'upload.php'; ?>
                                      <?php echo '<a href="upload.php" target="_blank"> </a>'; */ ?>  
                                    -->
                                    <a href="#" onclick="window.open('upload.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Selecionar aquivo</a>

                                </div>
                            </div>

                            <!-- local pdf -->
                            <div class="control-group">
                                <label class="control-label"  for="local_pdf">Local PDF</label>
                                <div class="controls">
                                    <input type="text" id="local_pdf" name="local_pdf" class="input-xlarge" required="">
                                </div>
                            </div>
                            <!-- fim local pdf -->
                            <!-- Button -->
                            <div class="control-group">

                                <div class="controls">
                                    <button class="btn btn-success">Gravar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <!-- FIM FORM-->


            </div>

        </div>

        <?php
        $rodape = new tela();
        $rodape->rodape();
        ?>
    </body>
</html>


