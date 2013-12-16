<?php
require 'acessoSeguranca.php';
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
        <script type="text/javascript">
            $(document).ready(function() {
                $(".data").datepicker({
                    dateFormat: 'dd/mm/yy',
                    dayNames: ['Domingo', 'Segunda', 'TerÃ§a', 'Quarta', 'Quinta', 'Sexta', 'SÃ¡bado', 'Domingo'],
                    dayNamesMin: ['D', 'S', 'T', 'Q', 'Q', 'S', 'S', 'D'],
                    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'SÃ¡b', 'Dom'],
                    monthNames: ['Janeiro', 'Fevereiro', 'MarÃ§o', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
                    monthNamesShort: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez'],
                    nextText: 'Próximo',
                    prevText: 'Anterior'
                });
            });
        </script>
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
                        <!-- INICIO FORM -->
                        <form class="form-horizontal" action='trabalhoCadastrar.php' method="POST">
                            <fieldset>
                                <div id="legend">
                                    <legend class="breadcrumb">Cadastrar trabalho Acadêmico</legend>
                                </div>

                                <!-- titulo --------------------------------------------------->
                                <div class="control-group">
                                    <label class="control-label" for="titulo">Título do trabalho</label>
                                    <div class="controls">
                                        <input type="text" id="titulo" name="titulo" placeholder="" class="input-xxlarge" required="">
                                    </div>
                                </div>
                                <!-- autor ----------------------------------------------------->
                                <div class="control-group">
                                    <label class="control-label" for="aluno">Autor</label>
                                    <div class="controls">
                                        <?php require 'autorFormulario.php'; ?>
                                    </div>
                                </div>
                                <!--form cadastrar novon aluno-->
                                <!-- orientador -->
                                <div class="control-group">
                                    <label class="control-label"  for="aluno">Orientador</label>
                                    <div class="controls">
                                        <?php require 'orientadorFormulario.php'; ?>
                                    </div>

                                </div>
                                <!-- fim orientador -->
                                <!-- data -->
                                <div class="control-group">
                                    <label class="control-label" for="data">Data Apresentação  </label>
                                    <div class="controls">
                                        <input type="text" id="data" name="data"class="data" class="input-mini"/>
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
                                        <input type="text" id="palavra_chave" name="palavras_chave" class="input-xxlarge" required="">
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
                                        <input type="text" id="num_pag" name="numero_paginas" placeholder="" class="input-mini" required="">
                                    </div>
                                </div>




                                <!-- area -->
                                <div class="control-group">
                                    <label class="control-label"  for="area">Área</label>
                                    <div class="controls">
                                        <?php require 'areaFormulario.php'; ?>

                                    </div>
                                </div>

                                <!-- instituição -->
                                <div class="control-group">
                                    <label class="control-label"  for="aluno">Instituição</label>
                                    <div class="controls">
                                        <?php require 'instituicaoFomulario.php'; ?>

                                    </div>
                                </div>

                                <!-- orientador -->
                                <div class="control-group">
                                    <label class="control-label"  for="aluno">Selecionar arquivo</label>
                                    <div class="controls">

                                        <?php // include 'upload.php'; ?>
                                        <?php echo '<a href="trabalhoUpload.php" target="_blank">Enviar arquivo </a>'; ?>  
                                        
                                    </div>
                                </div>

                                <!-- local pdf -->
                                <div class="control-group">
                                    <label class="control-label"  for="local_pdf">Local PDF</label>
                                    <div class="controls">
                                        <input type="text" id="local_pdf" name="local_pdf" class="input-xxlarge" required="">
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


