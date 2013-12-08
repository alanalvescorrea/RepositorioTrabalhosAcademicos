<!DOCTYPE html PUBLIC “-//W3C//DTD XHTML 1.0 Transitional//EN” “http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd”>
<html xmlns=”http://www.w3.org/1999/xhtml”>
    <head>
        <meta http-equiv=”Content-Type” content=”text/html; charset=utf-8″ />
        <title>Editar</title>
    </head>

    <body>
        <?php
        $id = $_GET['id']; // Recebendo o valor vindo do link
        $conexao = mysql_connect("localhost","root",""); // Mapeando o caminho do banco de dados
        if (!$conexao) // Verificando se existe conexão com o caminho mapeado
        {
        die('Erro ao conectar: ' . mysql_error()); // Caso o caminho esteja errado, o usuário ou a senha esteja errado, irá mostrar esta mensagem
        }

        mysql_select_db("repositoriotrabalhosacademicos_db", $conexao); // Selecionando o banco de dados
        $resultado = mysql_query("SELECT * FROM cadastro WHERE id = '".$id."'"); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
        while($linha = mysql_fetch_array($resultado)) //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
        {
        ?>
        <form method=”post” action=”editar2.php” >
            <input type=”hidden” name=”id” value=”<?php echo $linha['id']; ?>” /> <!– passando o valor da id em um campo oculto –>
            Autor: <input type=”text” name=”autor” value=”<?php echo $linha['autor']; ?>” /> <br /><!– mostrando dentro do form o valor do campo nome –>
            Titulo: <input type=”text” name=”titulo” value=”<?php echo $linha['titulo']; ?>” /> <br /><!– mostrando dentro do form o valor do campo email –>
            <input type=”submit” value=”Editar” />

        </form>
<?php
}
?> 
    </body>
</html>