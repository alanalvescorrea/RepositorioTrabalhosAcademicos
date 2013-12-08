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
        <?php
// Conexão e consulta ao Mysql
        include ('persistencia/classe_conexao.php');
        $novaConexao = new conexao ();
        $novaConexao->conecta();
        $qry = mysql_query("select nome, usuario, email, nivel, ativo from usuarios ORDER BY nome");

// Pegando quantidade de registros
        $sql = "SELECT * FROM usuarios";
        $res = mysql_query($sql);
        $rows = mysql_num_rows($res);

// Pegando os nomes dos campos
        $num_fields = mysql_num_fields($qry); // Obtém o número de campos do resultado

        for ($i = 0; $i < $num_fields; $i++) { // Pega o nome dos campos
            $fields [] = mysql_field_name($qry, $i);
        }

// Montando o cabeçalho da tabela
        $table = '<table class="table table-condensed"><tr class="success">';

        for ($i = 0; $i < $num_fields; $i++) {
            $table .= '<th>' . $fields [$i] . '</th>';
        }

// Montando o corpo da tabela
        $table .= '<tbody>';
        while ($r = mysql_fetch_array($qry)) {
            $table .= '<tr class="success">';
            for ($i = 0; $i < $num_fields; $i++) {
                $table .= '<td>' . $r [$fields [$i]] . '</td>';
            }
            $table .= '</tr>';
        }

// Finalizando a tabela
        $table .= '</tbody></table>';
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
                        <legend class="breadcrumb">Consultar usuários cadastrados</legend>
                        Quantidade de usuários cadastrados: 
                        <?php echo("$rows"); ?>
                        <?php echo $table; ?>
                    </div>
                </div>
            </div>
            <br>
            <br>

            <?php
            $rodape = new html ();
            $rodape->rodape();
            ?>
        </div>
    </div>
</body>
</html>


