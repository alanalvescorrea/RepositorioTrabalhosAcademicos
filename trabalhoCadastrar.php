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
    header("Location: trabalhoCadastrar.php");
    exit;
}

$titulo = $_POST['titulo'];
$tipo = $_POST['tipo'];
$resumo = $_POST['resumo'];
$abstract = $_POST['abstract'];
$numero_paginas = $_POST['numero_paginas'];
$data = $_POST['data'];
$local_pdf = $_POST['local_pdf'];
$palavras_chave = $_POST['palavras_chave'];
$area = $_POST['area'];
$aluno = $_POST['aluno'];
$instituicao = $_POST['instituicao'];
$orientador = $_POST['orientador'];
$ativo = 1;

include ('../persistencia/classe_conexao.php');
include 'classe_mensagens_formularios.php';
$novaConexao = new conexao();
$novaConexao->conecta();

$query = mysql_query("INSERT INTO `trabalho_academico` ( `titulo`, `tipo` , `resumo` , `abstract` , `numero_paginas` , `data` , `local_pdf` , `palavras_chave` , `area`,`aluno`,`instituicao`,`orientador`,`ativo`)  
VALUES ('$titulo', '$tipo', '$resumo', '$abstract', $numero_paginas, '$data', '$local_pdf', '$palavras_chave', '$area','$aluno','$instituicao','$orientador',$ativo)");

if ($query) {
    $mensagemSucesso = new mensagens_form();
    $mensagemSucesso->sucesso();
} else {

    $mensagemErro = new mensagens_form();
    $mensagemErro->erro();
}
?>
