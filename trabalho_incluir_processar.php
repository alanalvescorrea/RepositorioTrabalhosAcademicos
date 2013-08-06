<?php

if (isset($_POST['nome'])) {
    $nome = strip_tags($_POST['nome']);
    $email = strip_tags($_POST['email']);
    $observacao = strip_tags($_POST['observacao']);

    echo "Nome		=" . $nome . "</br>";
    echo "Email		=" . $email . "</br>";
    echo "Observacao	=" . $observacao . "</br>";
    echo "<span class=\"label label-info\" >Sua mensagem foi enviada.</span>";


    include 'inc/conexao.php';



//consulta sql - inserção
    $query = mysql_query("INSERT INTO acervos_alunos (nome, email, observacao, timestamp) VALUES ('$nome', '$email', '$observacao', 'NOW()')") or die(mysql_error());
    if ($query)
        echo 'Dados inseridos!';

//fecha a conexão com o banco
    mysql_close($conexao);
} else
    echo 'Formulário não preenchido corretamente';
?>