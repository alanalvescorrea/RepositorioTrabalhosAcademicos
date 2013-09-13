<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>

    </head>
    <?php
// Verifica se houve POST e se o usuário ou a senha é(são) vazio(s)
    if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
        header("Location: ../index.php");
        exit;
    }

    include ('../persistencia/classe_conexao.php');
    $novaConexao = new conexao();
    $novaConexao->conecta();

    $usuario = mysql_real_escape_string($_POST['usuario']);
    $senha = mysql_real_escape_string($_POST['senha']);

// Validação do usuário/senha digitados
    $sql = "SELECT `id`, `nome`, `nivel` FROM `usuarios` WHERE (`usuario` = '" . $usuario . "') AND (`senha` = '" . sha1($senha) . "') AND (`ativo` = 1) LIMIT 1";
    $query = mysql_query($sql);
    if (mysql_num_rows($query) != 1) {
        // Mensagem de erro quando os dados são inválidos e/ou o usuário não foi encontrado
        echo "Login inválido!";
        echo '<div class="alert">
  <a class="close" data-dismiss="alert">×</a>
  <strong>Warning!</strong> Best check yo self, youre not looking too good.
        </div>';
       
    } else {
        // Salva os dados encontados na variável $resultado
        $resultado = mysql_fetch_assoc($query);

        // Se a sessão não existir, inicia uma
        if (!isset($_SESSION))
            session_start();

        // Salva os dados encontrados na sessão
        $_SESSION['UsuarioID'] = $resultado['id'];
        $_SESSION['UsuarioNome'] = $resultado['nome'];
        $_SESSION['UsuarioNivel'] = $resultado['nivel'];

        // Redireciona o visitante
        header("Location: restrito.php");
        exit;
    }
    ?>
</body>
</html>

