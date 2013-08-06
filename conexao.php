
<?php
//nome do servidor (localhost)
$servidor = "localhost";
//usuário do banco de dados
$user = "root";
//senha do banco de dados
$senha = "";
//nome da base de dados
$db = "acervo_bd";
//executa a conexão com o banco, caso contrário mostra o erro ocorrido
$conexao = mysql_connect($servidor, $user, $senha) or die(mysql_error());
//seleciona a base de dados daquela conexão, caso contrário mostra o erro ocorrido
$banco = mysql_select_db($db, $conexao) or die(mysql_error());

if (!$conexao) {
    echo "Não foi possivel conectar ao banco MySQL.";
    exit;
} else 
    echo "Parabens!! A conexao ao banco de dados ocorreu normalmente!";