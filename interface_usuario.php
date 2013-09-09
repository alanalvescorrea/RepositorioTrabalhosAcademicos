<?php
//Conexão e consulta ao Mysql
include ('persistencia/classe_conexao.php');
include 'negocio/classe_mensagens_formularios.php';
$novaConexao = new conexao();
$novaConexao->conecta();



@$busca = $_POST['palavra']; // palavra que o usuario digitou


$busca_query = mysql_query("SELECT * FROM trabalho_academico WHERE titulo LIKE '%$busca%'") or die(mysql_error()); //faz a busca com as palavras enviadas

if (empty($busca_query)) { //Se nao achar nada, lança essa mensagem
    echo "Nenhum registro encontrado.";
}
?>

<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'tela/header.html'; ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->

                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">



                    <hr />  
                    <legend class="breadcrumb">Seja Bem-Vindo ao Repositório de Acervo Acadêmico</legend>
                    <form action=" " method="post">
                        <input type="text" name="palavra" required=""/>
                        <div class="control-group">

                            <div class="controls">
                                <button class="btn btn-success">Pesquisar</button>
                            </div>
                        </div>

                    </form>


                    <?php
                    if (empty($busca)) {
                        echo "Por favor, insira um termo para sua pesquisa.";
                        exit();
                    }


                    while ($dados = mysql_fetch_array($busca_query)) {
                        echo '<hr>';
                        echo "<strong>$dados[titulo]</strong>.<br> ";

                        @$string = $dados[resumo];
                        $string = substr($string, 0, 190);
                        echo " <b><i>Resumo:</b></i> $string ...<br />";

                        echo " <i>Autor:</i> $dados[aluno]<br>";
                        echo " <i>Orientador:</i> $dados[orientador]<br />";
                        echo " <i>Data:</i> $dados[data]<br />";
                        echo " <i>Área:</i> $dados[area]<br />";
                        echo " <i>Palavras-Chave:</i> $dados[palavras_chave]<br />";
                        echo "<a href=\" $dados[local_pdf]\"</a>Arquivo";
                        echo '<hr>';
                    }
                    ?>




                </div>
            </div>
            <?php include 'tela/rodape.html'; ?>
    </body>
</html>
