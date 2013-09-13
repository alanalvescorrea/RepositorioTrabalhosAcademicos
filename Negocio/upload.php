<?php
// Dados para Conexão via FTP
$host_ftp = "ftp.informatica.besaba.com";
$user_ftp = "u808267183";
$pass_ftp = "lmpq2AZZ";

// Faz a conexão com o Servidor
$ftp_con = ftp_connect($host_ftp);

if ($ftp_con) {
    echo 'Conexão realizada com sucesso..<br>';
}
// Efetua o login com o usuário e senha informados
$ftp_log = ftp_login($ftp_con, $user_ftp, $pass_ftp);
if ($ftp_log) {
    echo 'Login realizada com sucesso..<br>';
}

// Em seu formulário, crie um campo do tipo "file" com o nome de "arquivo", 
//que depois aqui utilizaremos o a variável $_FILES["arquivo"]["name"] que tem o valor 
//do nome original do arquivo enviado, e a $_FILES["arquivo"]["tmp_name"] armazena o nome temporário no servidor
@$arquivo_nome = $_FILES["arquivo"]["name"];
@$arquivo_temp = $_FILES["arquivo"]["tmp_name"];

// Verificamos se a nossa variável não está em branco ou é nula
if ($arquivo_nome != "" and $arquivo_nome != "none") {
    // Utilizamos o comando ftp_put para enviar o arquivo.
    ftp_put($ftp_con, "/public_html/trabalhosacademicos/" . $arquivo_nome, $arquivo_temp, FTP_BINARY);
    
    echo 'Arquivo enviado com sucesso..<br>';
    echo '<hr>Selecione e copie o caminho do arquivo:<br>';
    echo '<strong>http://informatica.besaba.com/trabalhosacademicos/'. $arquivo_nome.'<strong></hr>';
    exit();
}

// Encerramos a conexão de FTP previamente estabelecida
ftp_close($ftp_con);
?>
<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">

        <!-- JQUERY -->
        <script src = "//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" ></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />
        <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">


        <!-- TWITTER BOOTSTRAP JS -->
        <script src="../js/bootstrap.min.js"></script>


    </head>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo" />
        <input type="submit" name="enviar" value="Enviar" />
    </form>
</body>
</html>