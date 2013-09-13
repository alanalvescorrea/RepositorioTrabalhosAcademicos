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
                    <!--<span class="label label-info">Dados editados com sucesso!</span>-->
                    <div class="alert alert-success">
                        Dados editados com sucesso!
                    </div>
                    <?php
                    $id = $_POST['id']; // Recebendo o valor id do formulário
                    $titulo = $_POST['titulo']; // Recebendo o valor nome do formulário
                    $aluno = $_POST['aluno']; // Recebendo o valor email do formulário
                    $tipo = $_POST['tipo']; // Recebendo o valor email do formulário
                    $resumo = $_POST['resumo']; // Recebendo o valor email do formulário
                    $abstract = $_POST['abstract']; // Recebendo o valor email do formulário
                    $area = $_POST['area']; // Recebendo o valor email do formulário
                    $ativo = $_POST['ativo']; // Recebendo o valor email do formulário
                    $numero_paginas = $_POST['numero_paginas']; // Recebendo o valor email do formulário
                    $data = $_POST['data']; // Recebendo o valor email do formulário
                    $local_pdf = $_POST['local_pdf']; // Recebendo o valor email do formulário
                    $palavras_chave = $_POST['palavras_chave']; // Recebendo o valor email do formulário
                    $instituicao = $_POST['instituicao']; // Recebendo o valor email do formulário
                    $orientador = $_POST['orientador']; // Recebendo o valor email do formulário


                    include ('../persistencia/classe_conexao.php');
                    $novaConexao = new conexao();
                    $novaConexao->conecta();

                    mysql_query("UPDATE trabalho_academico SET titulo='" . $titulo . "', data='" . $data . "', abstract='" . $abstract . "',resumo='" . $resumo . "',orientador='" . $orientador . "',instituicao='" . $instituicao . "',palavras_chave='" . $palavras_chave . "',local_pdf='" . $local_pdf . "',ativo='" . $ativo . "', numero_paginas='" . $numero_paginas . "',area='" . $area . "',tipo='" . $tipo . "',aluno = '" . $aluno . "'WHERE id='" . $id . "'");
                    ?>

                </div>
            </div>
            <?php
            $rodape = new tela();
            $rodape->rodape();
            ?>
    </body>
</html>
