<?php

$mysqli = new mysqli('localhost', 'root', '', 'repositoriotrabalhosacademicos_db');
$text = $mysqli->real_escape_string($_GET['term']);

$query = "SELECT instituicao FROM trabalho_academico WHERE instituicao LIKE '%$text%' ORDER BY instituicao ASC LIMIT 1";
$result = $mysqli->query($query);
$json = '[';
$first = true;
while ($row = $result->fetch_assoc()) {
    if (!$first) {
        $json .= ',';
    } else {
        $first = false;
    }
    $json .= '{"value":"' . $row['instituicao'] . '"}';
}
$json .= ']';
echo $json;
?>
<?php

$fechaConexao = new conexao();
$fechaConexao->desconectar()
?>