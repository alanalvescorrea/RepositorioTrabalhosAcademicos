<?php

include 'acessoSeguranca.php';

if (!isset($_SESSION))
    session_start();

$nivel_necessario = 2;

if (!isset($_SESSION ['UsuarioID']) or ($_SESSION ['UsuarioNivel'] < $nivel_necessario)) {
    session_destroy();
    header("Location: index.php");
    exit();
}


$nome = $_POST ['nome'];
$usuario = $_POST ['usuario'];
$email = $_POST ['email'];
$senha = sha1($_POST ['senha']);
$senha_confirmacao = sha1($_POST ['senha_confirmacao']);
$nivel = $_POST ['nivel'];
$ativo = 1;
$data = date("Y-m-d");
$hora = date("H:i:s");

if ($senha != $senha_confirmacao) {
    echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                    alert ("Senhas informadas divergem. Informe senhas iguais!")
                    location.href="javascript:history.go(-1)"
              </SCRIPT>';

    exit();
}

require 'persistencia/classe_conexao.php';
require 'html.class.php';
$html = new html();
$html->includes();
$html->unicode();
$novaConexao = new conexao();
$novaConexao->conecta();


$inserir = "INSERT INTO `usuarios` (`nome`, `usuario` , `senha` , `email` , `nivel` , `ativo`, `data`, `hora`)  
VALUES ('$nome', '$usuario', '$senha', '$email', $nivel, $ativo, '$data', '$hora')";
$novaConexao->mysql_query($inserir);

if (!$novaConexao->mysql_query($inserir)) {
    $mensagemSucesso = new html ();
    $mensagemSucesso->menssagemDadosGravadosComSucesso();
} else {

    $mensagemErro = new html ();
    $mensagemErro->menssagemDadosNaoGravados();
}

exit();
?>



