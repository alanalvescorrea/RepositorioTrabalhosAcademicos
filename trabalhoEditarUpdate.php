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
                        <?php
// Connect to server and select database.
                        mysql_connect("localhost", "root", "") or die("cannot connect");
                        mysql_select_db("repositoriotrabalhosacademicos_db") or die("cannot select DB");

// get value of id that sent from address bar
                        $id = $_GET['id'];



// Retrieve data from database 
                        $sql = "SELECT * FROM repositoriotrabalhosacademicos_db.trabalho_academico WHERE id = '$id'";
                        $result = mysql_query($sql);
                        $rows = mysql_fetch_array($result);
                        ?>

                        <!----inicio form para edição-->
                        <div class="span10">
                            <!-- INICIO FORM -->
                            <form class="form-horizontal" action='trabalhoEditarSalvar.php' method="POST">
                                <fieldset>
                                    <div id="legend">
                                        <legend class="breadcrumb">Editar trabalho Acadêmico</legend>
                                    </div>



                                    <!-- 1.titulo --------------------------------------------------->
                                    <div class="control-group">
                                        <label class="control-label" for="titulo">Título do trabalho</label>
                                        <div class="controls">
                                            <input name="titulo" type="text" id="titulo" value="<?php echo $rows['titulo']; ?>"size= "40"/>
                                        </div>
                                    </div>


                                    <!-- 2. autor ----------------------------------------------------->
                                    <div class="control-group">
                                        <label class="control-label" for="autor">Autor</label>
                                        <div class="controls">
                                            <input name="autor" type="text" id="autor" value="<?php echo $rows['autor']; ?>"size= "15"/>
                                        </div>
                                    </div>


                                    <!-- 3. orientador -->
                                    <div class="control-group">
                                        <label class="control-label"  for="orientador">Orientador</label>
                                        <div class="controls">
                                            <input name="orientador" type="text" id="orientador" value="<?php echo $rows['orientador']; ?>"size= "15"/>
                                        </div>
                                    </div>


                                    <!-- 4.data -->
                                    <div class="control-group">
                                        <label class="control-label" for="data">Data Apresentação  </label>
                                        <div class="controls">
                                            <input name="data" type="text" id="data" value="<?php echo $rows['data']; ?>"size= "15"/>
                                        </div>
                                    </div>




                                    <!-- 5.tipo -->
                                    <div class="control-group">
                                        <label class="control-label" for="tipo">Tipo</label>
                                        <div class="controls">
                                            <input name="tipo" type="text" id="tipo" value="<?php echo $rows['tipo']; ?>"size= "15"/>
                                        </div>
                                    </div>


                                    <!--6.resumo-->
                                    <div class="control-group">
                                        <label class="control-label"  for="resumo">Resumo</label>
                                        <div class="span6">
                                            <textarea class="field span8" name="resumo" rows="10"><?php echo $rows['resumo']; ?> </textarea><br />                                           </div>
                                    </div>


                                    <!-- 7.palavras chaves -->
                                    <div class="control-group">
                                        <label class="control-label"  for="palavras_chave">Palavras-Cahave</label>
                                        <div class="controls">
                                            <input name="palavras_chave" type="text" id="palavras_chave" value="<?php echo $rows['palavras_chave']; ?>"size= "15"/><br />  
                                        </div>
                                    </div>



                                    <!--8.abstract-->
                                    <div class="control-group">
                                        <label class="control-label"  for="abstract">Abstract</label>
                                        <div class="span6">
                                            <textarea class="field span8" name="abstract" rows="10"><?php echo $rows['abstract']; ?> </textarea><br />     <br />                                            </div>
                                    </div>


                                    <!-- 9. numero paginas -->
                                    <div class="control-group">

                                        <label class="control-label"  for="numero_paginas">Número de Páginas</label>
                                        <div class="controls">
                                            <input name="numero_paginas" type="text" id="numero_paginas" value="<?php echo $rows['numero_paginas']; ?>"size= "15"/><br />  
                                        </div>
                                    </div>



                                    <!-- 10.area -->
                                    <div class="control-group">
                                        <label class="control-label"  for="area">Área</label>
                                        <div class="controls">
                                            <input name="area" type="text" id="area" value="<?php echo $rows['area']; ?>"size= "15"/><br />  

                                        </div>
                                    </div>


                                    <!-- 11. instituição -->
                                    <div class="control-group">
                                        <label class="control-label"  for="instituicao">Instituição</label>
                                        <div class="controls">
                                            <input name="instituicao" type="text" id="instituicao" value="<?php echo $rows['instituicao']; ?>"size= "15"/><br />  

                                        </div>
                                    </div>



                                    <!-- 12. arquivo -->
                                    <div class="control-group">
                                        <label class="control-label"  for="arquivo">Selecionar arquivo</label>
                                        <div class="controls">

                                            <?php echo '<a href="trabalhoUpload.php" target="_blank">Enviar arquivo </a>'; ?>  

                                        </div>
                                    </div>


                                    <!-- 13. local pdf -->
                                    <div class="control-group">
                                        <label class="control-label"  for="local_pdf">Local PDF</label>
                                        <div class="controls">
                                            <input name="local_pdf" type="text" id="local_pdf" value="<?php echo $rows['local_pdf']; ?>"size= "15"/><br />  
                                        </div>
                                    </div>


                                    <!-- 14. ativo -->
                                    <div class="control-group">
                                        <label class="control-label"  for="ativo">Ativo</label>
                                        <div class="controls">
                                            <input name="ativo" type="text" id="ativo" value="<?php echo $rows['ativo']; ?>"size= "15"/><br />  

                                        </div>
                                    </div>



                                    <!-- Button -->
                                    <div class="control-group">

                                        <div class="controls">
                                            <input name="id" type="hidden" id="id" value="<?php echo $rows['id']; ?>"/>
                                            <button type='submit' class='btn btn-info'>Salvar alterações</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>

                        <!--fim do form de edição-->



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


