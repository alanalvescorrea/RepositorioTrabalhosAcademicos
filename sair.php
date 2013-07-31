<?php
session_start();
session_destroy();
header("Location:index.php");

/**
 * fechar a sessao no banco de dados, alem de destruir as sessoes
 */
?>