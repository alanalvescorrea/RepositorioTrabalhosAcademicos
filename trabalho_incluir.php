<?php
session_start();
include("template/".SITE_TEMA."/header.php");
?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="text-center">
                        Repositório Acadêmico
                    </h3>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                </div>
                <div class="span4">
                    <h3 class="text-center">
                        Cadastro de Trabalho Acadêmico
                    </h3>
                    <form class="form-horizontal">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Incluir Trabalho</legend>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="titulo">Título</label>
                                <div class="controls">
                                    <input id="titulo" name="titulo" type="text" placeholder="título do trabalho" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="resumo">Resumo</label>
                                <div class="controls">                     
                                    <textarea id="resumo" name="resumo">Informe o resumo do trabalho</textarea>
                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="abstract">Abstract</label>
                                <div class="controls">                     
                                    <textarea id="abstract" name="abstract">Informe o resumo do trabalho</textarea>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="num_pag">Numero de páginas</label>
                                <div class="controls">
                                    <input id="num_pag" name="num_pag" type="text" placeholder="ex.: 35" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="data_apres">Data Apresentação</label>
                                <div class="controls">
                                    <input id="data_apres" name="data_apres" type="text" placeholder="dd/mm/aaaa" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="pal_cha">Palavras-Cave</label>
                                <div class="controls">
                                    <input id="pal_cha" name="pal_cha" type="text" placeholder="palavras-chave separadas por vírgula. Ex.: internet, educação" class="input-xxlarge" required="">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="local_arquivo">Local do arquivo</label>
                                <div class="controls">                     
                                    <textarea id="end_link" name="local_arquivo">Informe o caminho ou a URL do arquivo</textarea>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="idioma">Idioma</label>
                                <div class="controls">
                                    <input id="idioma" name="idioma" type="text" placeholder="Ex.: Inglês, português, italiano" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="observacao">Observações</label>
                                <div class="controls">                     
                                    <textarea id="observacao" name="observacao">Informe observações adicionais</textarea>
                                </div>
                            </div>

                            <!-- Search input-->
                            <div class="control-group">
                                <label class="control-label" for="aluno">Aluno</label>
                                <div class="controls">
                                    <input id="aluno" name="aluno" type="text" placeholder="buscar aluno" class="input-xlarge search-query" required="">
                                        <br>Não encontrou o aluno? 
                                            <a  href="#" onclick="window.open('aluno_incluir.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Cadastre novo aluno</a>
                                            </div>
                                            </div>

                                            <!-- Search input-->
                                            <div class="control-group">
                                                <label class="control-label" for="orientador">Orientador</label>
                                                <div class="controls">
                                                    <input id="orientador" name="orientador" type="text" placeholder="buscar orientador" class="input-xlarge search-query" required="">
                                                        <br>Não encontrou o orientados?
                                                            <a  href="#" onclick="window.open('orientados_incluir.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Cadastre novo orientador</a>

                                                            </div>
                                                            </div>

                                                            <!-- Search input-->
                                                            <div class="control-group">
                                                                <label class="control-label" for="area">Área do conhecimento</label>
                                                                <div class="controls">
                                                                    <input id="area" name="area" type="text" placeholder="ex.: Engenharia, Medicina, Biologia" class="input-xlarge search-query" required="">
                                                                        <input type="text" name="txtNome" id="txtNome" size="60" class="input_forms"/>
                                                                        <br> Não encontrou a Área do conhecimento? 
                                                                            <a  href="#" onclick="window.open('area_incluir.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Cadastre nova área do conhecimento</a>
                                                                            </div>
                                                                            </div>

                                                                            <!-- Search input-->
                                                                            <div class="control-group">
                                                                                <label class="control-label" for="instituicap">Instituição</label>
                                                                                <div class="controls">
                                                                                    <input id="instituicap" name="instituicap" type="text" placeholder="Ex.: FACOS, UFRGS, PUC" class="input-xlarge search-query" required="">
                                                                                        <br> Não encontrou a instituição? 
                                                                                            <a href='instituicao_incluir.php?' title="incluir" class='sair'>Cadastre nova instituição.</a>
                                                                                            </div>
                                                                                            </div>

                                                                                            <!-- Button -->
                                                                                            <div class="control-group">
                                                                                                <label class="control-label" for="gravar"></label>
                                                                                                <div class="controls">
                                                                                                    <button id="gravar" name="gravar" class="btn btn-primary">Gravar Trabalho</button>
                                                                                                </div>
                                                                                            </div>

                                                                                            </fieldset>
                                                                                            </form>


                                                                                            </div>
                                                                                            <div class="span4">
                                                                                            </div>
                                                                                            </div>
                                                                                            </div>


<?php
include("template/".SITE_TEMA."/footer.php");
?>