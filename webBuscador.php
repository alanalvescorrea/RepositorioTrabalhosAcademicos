<?php
require 'html.class.php';
require 'persistencia/classe_conexao.php';


// ConexÃ£o e consulta ao Mysql
$novaConexao = new conexao ();
$novaConexao->conecta();

@$busca = $_POST ['palavra']; // palavra que o usuario digitou

$consulta = "SELECT * FROM trabalho_academico WHERE titulo LIKE '%$busca%'AND ativo='1'order by titulo ASC"; // faz a busca com as palavras enviadas
$novaConexao->mysql_query($consulta);

if (empty($consulta)) { // Se nao achar nada, lanÃ§a essa mensagem
    echo "Nenhum registro encontrado.";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <?php
        $carregaClasseHtml = new html();
        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        $carregaClasseHtml->metaTag();
        $carregaClasseHtml->viewport();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->carregarJavascrip();
        ?>
    </head>

    <body>

        <?php
        $cabecalho = new html();
        $cabecalho->cabecalho();
        ?>

        <!-- Conteúdo -->
        <div class="main">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- Parágrafo -->
                        <div class="main-para">
                            <legend class="breadcrumb">Seja Bem-Vindo ao Repositório de Trabalho
                                Acadêmicos</legend>
                            <center>
                                <form action=" " method="post">
                                    <input type="text" name="palavra" required="" class="input-xlarge" />
                                    <div class="control-group">

                                        <div class="controls">
                                            <button class="btn btn-success">Pesquisar</button>
                                        </div>
                                    </div>
                                </form>
                            </center>

                            <?php
                            

                            while ($dados = $novaConexao->resultado()) {
                                $string = $dados [resumo];
                                $string = substr($string, 0, 150);
                                echo '<hr>';
                                echo "<strong>$dados[titulo]</strong>.<br> ";
                                echo " <i>Resumo:</i> $string ...<br />";
                                echo " <i>Autor:</i> $dados[aluno]<br>";
                                echo " <i>Orientador:</i> $dados[orientador]<br />";
                                echo "<i>Data Apresentação: </i>" . strftime("%d/%m/%Y ", strtotime(@$dados [data])) . "<br>";
                                echo " <i>Área:</i> $dados[area]<br />";
                                echo " <i>Palavras-Chave:</i> $dados[palavras_chave]<br />";
                                echo "<a href=\" $dados[local_pdf]\" >Arquivo Completo</a>";
                                echo '<hr>';
                            }
                            ?>

                        </div>
                        <?php
                        ?>                        
                    </div>
                </div>
            </div>
            <?php
            $rodape = new html();
            $rodape->rodape();
            ?>
        </div>
    </div>
</body>	
</html>