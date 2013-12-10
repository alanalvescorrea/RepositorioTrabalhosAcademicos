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
                        <h4>Editar trabalhos acadêmicos</h4>

                        <?php
// Connect to server and select database.
                        mysql_connect("localhost", "root", "") or die("cannot connect");
                        mysql_select_db("repositoriotrabalhosacademicos_db") or die("cannot select DB");



                        $sql = "UPDATE usuarios SET nome='" . $_POST['nome'] . "',
                                                              usuario='" . $_POST['usuario'] . "',
                                                              email='" . $_POST['email'] . "',
                                                              nivel='" . $_POST['nivel'] . "',
                                                              ativo='" . $_POST['ativo'] . "' WHERE id='" . $_POST['id'] . "'";

                        $result = mysql_query($sql) or
                                die("this stuffedup");


// if successfully updated. 
                        if ($result) {
                            $dadosGravadosComSucesso = new html();
                            $dadosGravadosComSucesso->menssagemDadosGravadosComSucesso();

                            echo "<a href='usuarioEditarListar.php'>Veja como ficou!</a>";
                        } else {
                            echo "ERROR";
                        }
                        ?>

                    </div>
                </div>

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


