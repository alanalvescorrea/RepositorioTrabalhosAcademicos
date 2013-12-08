<?php
$id = $_POST['id']; // Recebendo o valor id do formulário
$nome = $_POST['autor'];// Recebendo o valor nome do formulário
$email = $_POST['titulo'];// Recebendo o valor email do formulário
$conexao = mysql_connect("localhost","root",""); // Mapeando o caminho do banco de dados
if (!$conexao) // Verificando se existe conexão com o caminho mapeado
{
die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
}

mysql_select_db("repositoriotrabalhosacademicos_db", $conexao); // Selecionando o banco de dados

mysql_query("UPDATE Persons SET nome='".$nome."', email = '".$email."'WHERE id='".$id."'");

mysql_close($conexao);
?>