<?php

$conn = mysql_connect("localhost", "root", "") or die("Impossível conectar");

//Caso a conexão seja estabelecida corretamente, seleciona o Banco de Dados a ser usado
if ($conn) {
    mysql_select_db("acervo_bd", $conn);
}


@$q = strtolower($_GET["q"]);

$sql = "SELECT * FROM area WHERE nome like '%" . $q . "%'";

$query = mysql_query($sql); // or die ("Erro". mysql_query());

while ($reg = mysql_fetch_array($query)) {

    //if (srtpos(strtolower($reg['nom_lista']),$q !== false){
    echo $reg["nome"] . "|" . $reg["nome"] . "\n";
//	}
}
?>

