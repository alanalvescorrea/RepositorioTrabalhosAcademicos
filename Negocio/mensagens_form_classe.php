<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mensagens_form
 *
 * @author Alan
 */

//************* função mensagem erro ***************
class mensagens_form {

    var $msg_erro = null;
    var $msg_sucesso = null;

    function erro() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message warning">
                <a class="close" href="#">×</a>
                <p><strong>Ops...</strong> O cadastro não foi gravado. TENTE NOVAMENTE <a href="trabalho_cadastrar.php"></a>.</p>
            </div>';
        echo '</div>';
    }

//************* função mensagem sucesso ***************


    function sucesso() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message success">
                <a class="close" href="#">×</a>
                <p><strong>Legal..</strong> O trabalho foi gravado com sucesso <a href="trabalho_cadastrar.php">CADASTRAR OUTRO TRABALHO</a>.</p>
            </div>';
        echo '</div>';
    }
}

?>
