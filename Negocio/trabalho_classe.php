<?php
if (!empty($_POST) AND
        (empty($_POST['titulo']) OR
        empty($_POST['resumo']) OR
        empty($_POST['abstract']) OR
        empty($_POST['numero_paginas']) OR
        empty($_POST['data']) OR
        empty($_POST['local_pdf']) OR
        empty($_POST['palavras_chave']) OR
        empty($_POST['area'])
        )) {
    header("Location: trabalho_cadastrar.php");
    exit;
}

$titulo = $_POST['titulo'];
$resumo = $_POST['resumo'];
$abstract = $_POST['abstract'];
$numero_paginas = $_POST['numero_paginas'];
$data = $_POST['data'];
$local_pdf = $_POST['local_pdf'];
$palavras_chave = $_POST['palavras_chave'];
$area = $_POST['area'];

include ('../persistencia/conexao_classe.php');
include 'mensagens_form_classe.php';
$novaConexao = new conexao();
$novaConexao->conecta();

$query = mysql_query("INSERT INTO `trabalho_academico` ( `titulo` , `resumo` , `abstract` , `numero_paginas` , `data` , `local_pdf` , `palavras_chave` , `area`)  
VALUES ('$titulo', '$resumo', '$abstract', $numero_paginas, '$data', '$local_pdf', '$palavras_chave', '$area')");

if ($query) {
    $mensagemSucesso = new mensagens_form();
    $mensagemSucesso->sucesso();
} else {

    $mensagemErro = new mensagens_form();
    $mensagemErro->erro();
}
?>
