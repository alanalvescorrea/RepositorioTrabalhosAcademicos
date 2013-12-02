<?php

$mysqli = new mysqli('localhost', 'root', '', 'repositoriotrabalhosacademicos_db');
$text = $mysqli->real_escape_string($_GET['term']);

$query = "SELECT aluno FROM trabalho_academico WHERE aluno LIKE '%$text%' ORDER BY aluno ASC";
$result = $mysqli->query($query);
$json = '[';
$first = true;
while ($row = $result->fetch_assoc()) {
    if (!$first) {
        $json .= ',';
    } else {
        $first = false;
    }
    $json .= '{"value":"' . $row['aluno'] . '"}';
}
$json .= ']';
echo $json;
?>