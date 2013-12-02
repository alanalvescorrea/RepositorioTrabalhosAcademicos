<?php

$mysqli = new mysqli('localhost', 'root', '', 'repositoriotrabalhosacademicos_db');
$text = $mysqli->real_escape_string($_GET['term']);

$query = "SELECT orientador FROM trabalho_academico WHERE orientador LIKE '%$text%' ORDER BY orientador ASC";
$result = $mysqli->query($query);
$json = '[';
$first = true;
while ($row = $result->fetch_assoc()) {
    if (!$first) {
        $json .= ',';
    } else {
        $first = false;
    }
    $json .= '{"value":"' . $row['orientador'] . '"}';
}
$json .= ']';
echo $json;
?>