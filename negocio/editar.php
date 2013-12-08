<?php
$conexao = mysql_connect("localhost", "root", ""); // Mapeando o caminho do banco de dados
if (!$conexao) { // Verificando se existe conexão com o caminho mapeado
    die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
}

mysql_select_db("cdcol", $conexao); // Selecionando o banco de dados
$resultado = mysql_query("SELECT * FROM cds"); // Há variável $resultado faz uma consulta em nossa tabela selecionando todos os registros de todos os campos

while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha //Inicia o loop
    ?> <a href="editar1.php?id=<?php echo $linha['id']; ?>"> <!-- passando o valor do id para a página editar1.php –>
    <?php
    echo $linha['titel'] . " – " . $linha['jahr']; // Mostra o valor do registro dentro do loop
    echo "<br />";
} // Retorna para o início do loop caso existam mais registros a serem mostrados
?>
    </a>
  