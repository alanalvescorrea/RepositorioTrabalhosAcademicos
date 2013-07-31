<?php
include("inc/config.php");
include("inc/core.php");

$db = new db();
$db->conexao();


@$q = strtolower($_GET["q"]);

$sql = "SELECT * FROM area WHERE nome like '%" . $q . "%'";

$query = mysql_query($sql); // or die ("Erro". mysql_query());

while ($reg = mysql_fetch_array($query)) {

    //if (srtpos(strtolower($reg['nom_lista']),$q !== false){
    echo $reg["nome"] . "|" . $reg["nome"] . "\n";
//	}
}
?>

