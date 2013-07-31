
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
// Recebemos os dados digitados pelo usuário
        $login = $_POST['login'];
        $senha = $_POST['senha'];

//Estabelecemos uma conexão com o Banco de Dados
//mysql_connect(“Nome ou IP do servidor”, “Usuário”, “Senha”);
        $conn = mysql_connect("localhost", "root", "") or die("Impossível conectar");

//Caso a conexão seja estabelecida corretamente, seleciona o Banco de Dados a ser usado
        if ($conn) {
            mysql_select_db("acervo_bd", $conn);
        }

//Criamos o comando que efetua a busca do Banco
        $sql = "SELECT id, nome FROM pessoas WHERE login = '$login' AND senha = '$senha'";

//Executamos o comando
        $rs = mysql_query($sql, $conn);

//Retornamos o número de linhas afetadas
        $num = mysql_num_rows($rs);

//Verificamos se alguma linha foi afetada. Caso sim, retornamos suas informações
        if ($num > 0) {

//Retorna os dados do Banco
            $rst = mysql_fetch_array($rs);
            $id = $rst["id"];
            $nome = $rst["nome"];

//Inicia a sessão
            session_start();

//Registra os dados do usuário na sessão
            $_SESSION["id"] = $id;
            $_SESSION["nome"] = $nome;
            $_SESSION["login"] = $login;

//Encerra a conexão com o Banco
            mysql_close($conn);

//Redireciona para o index
            header("Location:logado.php");
        } else {

//Encerra a conexão com o Banco
            mysql_close($conn);

//Caso nenhuma linha seja retornada, emite o alerta e retorna
            echo "<b>Nenhum usuário foi encontrado com os dados informados…retornando</b>";
            echo "<meta http-equiv = 'refresh' content = '0;URL=index.html'>";
        }
        ?>
    </body>
</html>
