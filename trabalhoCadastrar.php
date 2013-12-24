<?php

$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$tipo = $_POST['tipo'];
$resumo = $_POST['resumo'];
$abstract = $_POST['abstract'];
$numero_paginas = $_POST['numero_paginas'];
$data = $_POST['data'];
$dataFormatoMySQL = implode("-", array_reverse(explode("/", $data)));
$local_pdf = $_POST['local_pdf'];
$palavras_chave = $_POST['palavras_chave'];
$area = $_POST['area'];
$instituicao = $_POST['instituicao'];
$orientador = $_POST['orientador'];
$ativo = 1;

require 'persistencia/classe_conexao.php';
require 'html.class.php';
$html = new html();
$html->includes();
$html->unicode();
$novaConexao = new conexao();
$novaConexao->conecta();

$query = mysql_query("INSERT INTO `trabalho_academico` ( `titulo`, `tipo` , `resumo` , `abstract` , `numero_paginas` , `data` , `local_pdf` , `palavras_chave` , `area`,`autor`,`instituicao`,`orientador`,`ativo`)  
VALUES ('$titulo', '$tipo', '$resumo', '$abstract', $numero_paginas, '$dataFormatoMySQL', '$local_pdf', '$palavras_chave', '$area','$autor','$instituicao','$orientador',$ativo)");

if ($query) {
    $mensagemSucesso = new html();
    $mensagemSucesso->menssagemDadosGravadosComSucesso();
} else {

    $mensagemErro = new html();
    $mensagemErro->menssagemDadosNaoGravados();
}
?>
<?php

$fechaConexao = new conexao();
$fechaConexao->desconectar()
?>