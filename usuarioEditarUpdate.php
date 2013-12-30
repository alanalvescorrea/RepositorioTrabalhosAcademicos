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
                        $sql = "SELECT * FROM repositoriotrabalhosacademicos_db.usuarios WHERE id = '$id'";
                        $result = mysql_query($sql);
                        $rows = mysql_fetch_array($result);
                        ?>

                        <!----inicio form para edição-->
                        <div class="span10">
                            <!-- INICIO FORM -->
                            <form class="form-horizontal" action='usuarioEditarSalvar.php' method="POST">
                                <fieldset>
                                    <div id="legend">
                                        <legend class="breadcrumb">Editar usuário</legend>
                                    </div>



                                    <!-- 1.nome --------------------------------------------------->
                                    <div class="control-group">
                                        <label class="control-label" for="nome">Nome Completo</label>
                                        <div class="controls">
                                            <input name="nome" type="text" id="nome" value="<?php echo $rows['nome']; ?>"size= "40"/>
                                        </div>
                                    </div>


                                    <!-- 2. usuário ----------------------------------------------------->
                                    <div class="control-group">
                                        <label class="control-label" for="usuario">Nome de usuário</label>
                                        <div class="controls">
                                            <input name="usuario" type="text" id="usuario" value="<?php echo $rows['usuario']; ?>"size= "15"/>
                                        </div>
                                    </div>


                                    <!-- 5. email -->
                                    <div class="control-group">
                                        <label class="control-label" for="email">Email</label>
                                        <div class="controls">
                                            <input name="email" type="text" id="email" value="<?php echo $rows['email']; ?>"size= "15"/>
                                        </div>
                                    </div>



                                    <!-- 7. nível -->
                                    <div class="control-group">
                                        <label class="control-label"  for="nivel">Nível</label>
                                        <div class="controls">
                                            <input name="nivel" type="text" id="nivel" value="<?php echo $rows['nivel']; ?>"size= "15"/><br />  
                                        </div>
                                    </div>



                                    <!-- 9. ativo -->
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


