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
                        <hr />  
                        <legend class="breadcrumb">Excluir trabalhos acadêmicos cadastrados</legend>

                        <?php
                        require 'persistencia/classe_conexao.php';
                        $novaConexao = new conexao();
                        $novaConexao->conecta();
                        $id = $_GET['id']; // Recebendo o valor vindo do link

                        $conexao = mysql_connect('localhost', 'root', '');
                        mysql_select_db('repositoriotrabalhosacademicos_db', $conexao);
                        $consultar = "SELECT * FROM trabalho_academico ORDER BY id";
                        $resultado = mysql_query($consultar, $conexao);

                        if (mysql_num_rows($resultado) != 0) {
                            echo "<form name='frmExcluir' method='post' action=''>";
                            echo "<table class='table table-condensed'><tr><th>&nbsp</th><th>Título</th><th>Tipo</th></tr>";

                            while ($linha = mysql_fetch_row($resultado)) {
                                echo "<td><input type='checkbox' name='id[]' value='$linha[0]'></td>
                          <td>$linha[1]</td>
                          <td>$linha[2]</td></tr>";
                            }
                            echo "<tr><td colspan='3'><input type='submit' name='excluir' value='Excluir!'></td></tr>";
                            echo "</table></form>";
                        } else {
                            echo "Nenhum registro foi encontrado!";
                        }
                        if (isset($_POST['id'])) {
                            $opcoes = $_POST['id'];
                            $opcoes_text = implode(", ", $opcoes);
                            $strexcluir = "DELETE FROM trabalho_academico WHERE id in (" . $opcoes_text . ")";
                            mysql_query($strexcluir, $conexao) or die("Ocorreu algum erro");
                        } else {
                            echo "É necessário escolher quem será excluído<br>";
                            echo "<a href='javascript: history.back();'>Voltar</a>";
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
</body>
</html>


