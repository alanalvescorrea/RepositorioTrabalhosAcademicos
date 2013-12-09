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


                        $sql = "SELECT * FROM trabalho_academico";
                        $result = mysql_query($sql);
                        ?>


                        <table class='table table-condensed'>


                            <tr>
                                <td align="center"><strong>Titulo</strong></td>
                                <td align="center"><strong>Autor</strong></td>

                            </tr>

                            <?php
                            while ($rows = mysql_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $rows['titulo']; ?></td>
                                    <td><?php echo $rows['autor']; ?></td>
                                    <td align="center"><a href="trabalhoEditarUpdate.php?id=<?php echo $rows['id']; ?>">Editar</a></td>
                                </tr>

                                <?php
                            }
                            ?>

                        </table>



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


