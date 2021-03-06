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
        <?php ?>
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
                        <legend class="breadcrumb">Consultar trabalho acadêmico</legend>
                        <?php
                        $conexao = mysql_connect("localhost", "root", ""); // Faz a conexão com o servidor local
                        $banco = mysql_select_db("repositoriotrabalhosacademicos_db", $conexao); // Seleciona o banco de dados 'loja'
// Informações da query
                        $campos_query = "*";
                        $final_query = "FROM trabalho_academico ORDER BY titulo ASC";

// Maximo de registros por pagina
                        $maximo = 3;

// Declaração da pagina inicial
                        $pagina = $_GET["pagina"];
                        if ($pagina == "") {
                            $pagina = "1";
                        }

// Calculando o registro inicial
                        $inicio = $pagina - 1;
                        $inicio = $maximo * $inicio;

// Conta os resultados no total da query
                        $strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
                        $query = mysql_query($strCount);
                        $row = mysql_fetch_array($query);
                        $total = $row["num_registros"];

###################################################################################
// INICIO DO CONTEÚDO
// Realizamos a query
                        $sql = mysql_query("SELECT $campos_query $final_query LIMIT $inicio,$maximo");

// Exibimos os nomes dos produtos e seus repectivos valores
                        echo 'Numero total de trabalhos cadastrados ' . $total . '<br>';
                        echo "<table class='table table-condensed'>
                        <tr class='success'>
                            <td>Titulo</td>
                            <td>Autor</td>
                            <td>Orientador</td>
                            <td>Area</td>
                            <td>Tipo</td>
                            <td>Paginas</td>
                            <td>Arquivo</td>
                        </tr>";
                        while ($linha = mysql_fetch_object($sql)) {

                            echo "<tr><td>" . $linha->titulo .
                            "</td><td>" . $linha->autor .
                            "</td><td>" . $linha->orientador .
                            "</td><td>" . $linha->area .
                            "</td><td>" . $linha->tipo .
                            "</td><td>" . $linha->numero_paginas .
                            "</td><td><a href=\" $linha->local_pdf\" target='_blank' >PDF</a>";
                            "</td></tr>";
                        }
                        echo "</table>"; /* fecha a tabela apos termino de impressão das linhas */

// FIM DO CONTEUDO###################################################################################

                        $menos = $pagina - 1;
                        $mais = $pagina + 1;

                        $pgs = ceil($total / $maximo);

                        if ($pgs > 1) {

                            echo "<br />";

                            // Mostragem de pagina
                            if ($menos > 0) {
                                echo "<a href=" . $_SERVER['PHP_SELF'] . "?pagina=$menos>anterior</a>&nbsp; ";
                            }

                            // Listando as paginas
                            for ($i = 1; $i <= $pgs; $i++) {
                                if ($i != $pagina) {
                                    echo " <a href=" . $_SERVER['PHP_SELF'] . "?pagina=" . ($i) . ">$i</a> | ";
                                } else {
                                    echo " <strong>" . $i . "</strong> | ";
                                }
                            }

                            if ($mais <= $pgs) {
                                echo " <a href=" . $_SERVER['PHP_SELF'] . "?pagina=$mais>próxima</a>";
                            }
                        }
                        ?>

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

