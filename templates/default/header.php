<?php
include("inc/config.php");
include("inc/core.php");
$db = new db();
$db->conexao();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?= SITE_NOME ?></title>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>