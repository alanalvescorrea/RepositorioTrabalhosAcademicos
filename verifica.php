<!--
Em todas as páginas reservadas para o administrador, 
insira apenas o comando include_once('verifica.php'); 
assim você estará restringindo o acesso somente a quem for necessário.
-->
<?php
//Inicia a sessão
session_start();

//Verifica se há dados ativos na sessão
if (empty($_SESSION["id"]) || empty($_SESSION["nome"]) || empty($_SESSION["login"])) {

//Caso não exista dados registrados, exige login
    header("Location:index.html");
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php echo 'Oi ' . $_SESSION['nome'] . '. Seja Bem vindo!';?>
        <a href='sair.php' title='sair' class='sair'>Sair do sistema</a>
    </body>
</html>
