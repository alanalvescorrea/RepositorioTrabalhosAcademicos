<?php
require 'html.class.php';
require 'persistencia/classe_conexao.php';
$novaConexao = new conexao ();
$novaConexao->conecta();
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
                                    <input type="text" name="palavra" required="" class="input-xxlarge" placeholder="busque o que deseja pelo título, autor ou orientador"/>
                                    <div class="control-group">

                                        <div class="controls">
                                            <button class="btn btn-success">Pesquisar</button>
                                        </div>
                                    </div>
                                </form>
                            </center>

                            <?php
                            $busca = $_POST ['palavra']; // palavra que o usuario digitou

                            $consulta = "SELECT * FROM trabalho_academico WHERE (titulo LIKE '%$busca%' or
                                                                                 autor LIKE '%$busca%'  or
                                                                                 orientador LIKE '%$busca%')
                                         AND ativo='1'order by titulo ASC"; // faz a busca com as palavras enviadas
                            
                            
                            $novaConexao->mysql_query($consulta);

                            if (empty($busca)) { // Se nao achar nada, lanÃ§a essa mensagem
                                echo "Buscar o que você é simlples! É só usar a caixa acima e pesquisar!";
                                exit();
                               
                            }

                            while ($dados = $novaConexao->resultado()) {
                                $string = $dados [resumo];
                                $string = substr($string, 0, 150);
                                echo '<hr>';
                                echo "<strong>$dados[titulo]</strong>.<br> ";
                                echo " <i>Resumo:</i> $string ...<br />";
                                echo " <i>Autor:</i> $dados[autor]<br>";
                                echo " <i>Orientador:</i> $dados[orientador]<br />";
                                echo "<i>Data Apresentação: </i>" . strftime("%d/%m/%Y ", strtotime(@$dados [data])) . "<br>";
                                echo " <i>Área:</i> $dados[area]<br />";
                                echo " <i>Palavras-Chave:</i> $dados[palavras_chave]<br />";
                                echo "<a href=\" $dados[local_pdf]\" target='_blank'>Arquivo Completo</a>";
                                echo '<hr>';
                            }
                            ?>

                        </div>
                        <?php ?>                        
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