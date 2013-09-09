<?php
include '../negocio/seguranca.php';
?>
<?php
//Conexão e consulta ao Mysql
include ('../persistencia/classe_conexao.php');
include 'classe_mensagens_formularios.php';
$novaConexao = new conexao();
$novaConexao->conecta();
$qry = mysql_query("select titulo,aluno,orientador from trabalho_academico ORDER BY titulo");

//Pegando quantidade de registros
$sql = "SELECT * FROM trabalho_academico";
$res = mysql_query($sql);
$rows = mysql_num_rows($res);


//Pegando os nomes dos campos
$num_fields = mysql_num_fields($qry); //Obtém o número de campos do resultado

for ($i = 0; $i < $num_fields; $i++) {//Pega o nome dos campos
    $fields[] = mysql_field_name($qry, $i);
}

//Montando o cabeçalho da tabela
$table = '<table border="1"><tr>';

for ($i = 0; $i < $num_fields; $i++) {
    $table .= '<th>' . $fields[$i] . '</th>';
}

//Montando o corpo da tabela
$table .= '<tbody>';
while ($r = mysql_fetch_array($qry)) {
    $table .= '<tr>';
    for ($i = 0; $i < $num_fields; $i++) {
        $table .= '<td>' . $r[$fields[$i]] . '</td>';
    }
    $table .= '</tr>';
}

//Finalizando a tabela
$table .= '</tbody></table>';
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
        <?php include '../tela/header.html'; ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php include '../tela/menu_esquerdo.html'; ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 
                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <legend class="breadcrumb">Trabalhos acadêmicos cadastrados</legend>
                    Quantidade de trabalhos cadastrados: 
                    <?php echo("$rows"); ?>
                    <?php echo $table; ?>

                </div>
            </div>
            <?php include '../tela/rodape.html'; ?>
    </body>
</html>
