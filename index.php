
<!DOCTYPE html>
<html>
    <head>
        <?php
        require 'html.class.php';

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
                            <?php
                            $conexao = mysql_connect("localhost", "root", ""); // Faz a conexão com o servidor local
                            $banco = mysql_select_db("repositoriotrabalhosacademicos_db", $conexao); // Seleciona o banco de dados 'loja'
// Informações da query
                            $campos_query = "*";
                            $final_query = "FROM trabalho_academico ORDER BY titulo ASC";


// Conta os resultados no total da query
                            $strCount = "SELECT COUNT(*) AS 'num_registros' $final_query";
                            $query = mysql_query($strCount);
                            $row = mysql_fetch_array($query);
                            $total = $row["num_registros"];

                        
                            echo '<pre>Atualmente temos <h2>'. $total .'</h2>  trabalhos cadastrados em nossa base! </pre><br>';
                            ?>

                            <p align="justify"> Você sabia?</p><br>
                            <p align="justify"> A grande Biblioteca, a Biblioteca de Alexandria,
                                tem sua fundação atribuíada à Ptolomeu Sóter II (309-247 a. C.) e seu acervo foi constituído basicamente na forma 
                                de rolos, chegando a aproximadamente 700.000 rolos.</p><br>
                            <p align="justify"> Está é uma homenagem a essa famosa biblioteca, seja bem-vindo!</p><br>
                            <img src="img/biblio.jpg" alt="interior biblioteca de alexandria" width="190" height="88" /><br>
                            O interior da antiga biblioteca de Alexandria

                        </div>
                    </div>
                </div>
                <?php
                $rodape = new html();
                $rodape->rodape();
                ?>
            </div>
        </div>
        <!-- Fim Conteúdo-->
    </body>	
</html>