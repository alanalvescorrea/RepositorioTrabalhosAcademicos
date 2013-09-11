<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
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
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 
                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <legend class="breadcrumb">Trabalhos acadêmicos cadastrados</legend>
                    Edite os dados e atualize as informações:<br>
                    <?php
                    $id = $_GET['id']; // Recebendo o valor vindo do link

                    include ('../persistencia/classe_conexao.php');
                    $novaConexao = new conexao();
                    $novaConexao->conecta();


                    $resultado = mysql_query("SELECT * FROM trabalho_academico WHERE id = '" . $id . "'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
                    while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
                        ?>
                        <form method="post" action="editar_exibir_edicao.php" >
                            <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" /> <!– passando o valor da id em um campo oculto –>
                            Titulo: <input type="text" name="titulo" value="<?php echo $linha['titulo']; ?>" class="input-xxlarge"/> <br /><!– mostrando dentro do form o valor do campo nome –>
                            Aluno:  <input type="text" name="aluno" value="<?php echo $linha['aluno']; ?>" /> <br /><!– mostrando dentro do form o valor do campo email –>
                            
                            <div class="control-group">
                                <!-- botão de acesso -->
                                <div class="controls">
                                    <button class="btn btn-success">Atualizar Informações</button>

                                </div>
                            </div>

                        </form>
                        <?php
                    }
                    ?> 

                </div>
            </div>
            <?php
            $rodape = new tela();
            $rodape->rodape();
            ?>
    </body>
</html>
