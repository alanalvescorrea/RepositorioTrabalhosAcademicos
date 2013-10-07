<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
?>


<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $header = new tela();
        $header->header();
        ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php
                $menuEsquerdo = new tela();
                $menuEsquerdo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">
                    <?php echo 'Ol� ' . $_SESSION['UsuarioNome'] . '!'; ?> 
                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <legend class="breadcrumb">Trabalhos Acad�micos Cadastrados</legend>
                    <?php
                    include ('../persistencia/classe_conexao.php');
                    $novaConexao = new conexao();
                    $novaConexao->conecta();


                    $resultado = mysql_query("SELECT * FROM trabalho_academico"); // Há variável $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos

                    while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha //Inicia o loop
                        ?> <a href="editar_formulario.php?id=<?php echo $linha['id']; ?>"> <!– passando o valor do id para a página editar1.php –>
                            <?php
                            echo $linha['titulo'] . ". Autor: " . $linha['aluno']; // Mostra o valor do registro dentro do loop
                            echo "<br />";
                        } // Retorna para o início do loop caso existam mais registros a serem mostrados
                        ?>
                    </a>


                </div>
            </div>
            <?php
            $rodape = new tela();
            $rodape->rodape();
            ?>
    </body>
</html>
