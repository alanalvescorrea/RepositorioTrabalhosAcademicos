<?php

$mysqli = new mysqli('localhost', 'root', '', 'repositoriotrabalhosacademicos_db');
$text = $mysqli->real_escape_string($_GET['term']);

$query = "SELECT autor FROM trabalho_academico WHERE autor LIKE '%$text%' ORDER BY autor ASC LIMIT 1";
$result = $mysqli->query($query);
$json = '[';
$first = true;
while ($row = $result->fetch_assoc()) {
    if (!$first) {
        $json .= ',';
    } else {
        $first = false;
    }
    $json .= '{"value":"' . $row['autor'] . '"}';
}
$json .= ']';
echo $json;
?>