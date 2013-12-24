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
        <script>
            function reloadPage()
              {
                  location.reload();
              }
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
                        <hr />  
                        <legend class="breadcrumb">Editar Trabalhos Acadêmicos Cadastrados</legend>

                        <?php
                        require 'persistencia/classe_conexao.php';
                        $novaConexao = new conexao();
                        $novaConexao->conecta();
                        $id = $_GET['id']; // Recebendo o valor vindo do link

                        $conexao = mysql_connect('localhost', 'root', '');
                        mysql_select_db('repositoriotrabalhosacademicos_db', $conexao);
                        $consultar = "SELECT * FROM usuarios ORDER BY id";
                        $resultado = mysql_query($consultar, $conexao);

                        if (mysql_num_rows($resultado) != 0) {
                            echo "<form name='frmExcluir' method='post' action=''>";
                            echo "<table class='table table-condensed'><tr><th>&nbsp</th><th>Nome do usuário</th><th>Nome de login</th></tr>";

                            while ($linha = mysql_fetch_row($resultado)) {
                                echo "<td><input type='checkbox' name='id[]' value='$linha[0]'></td>
                          <td>$linha[1]</td>
                          <td>$linha[2]</td></tr>";
                            }
                            echo "<tr><td colspan='3'>
                                    <button type='submit' class='btn btn-danger'>Excluir</button>
                                    </td></tr>";
                            echo "</table></form>";
                        } else {
                            echo "Nenhum registro foi encontrado!";
                        }
                        if (isset($_POST['id'])) {
                            $opcoes = $_POST['id'];
                            $opcoes_text = implode(", ", $opcoes);
                            $strexcluir = "DELETE FROM usuarios WHERE id in (" . $opcoes_text . ")";
                            mysql_query($strexcluir, $conexao) or die("Ocorreu algum erro");
                            echo'<div class="alert alert-success">
                                 usuário excluído com sucesso
                                </div>
                                <button type="button" class="btn btn-info" onclick="reloadPage()">Veja como ficou</button>';
                        } else {
                            echo '<span class="label label-info">Selecione o usuário que será excluído</span>';
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


