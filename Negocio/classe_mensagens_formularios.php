<?php
/*
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
                <p><strong>Ops...</strong> Dados não foram gravados. TENTE NOVAMENTE. <a href="#"></a></p>
            </div>';
        echo '</div>';
    }

//************* função mensagem sucesso ***************
    function sucesso() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message success">
                <a class="close" href="#">×</a>
                <p><strong>Legal..</strong> Dados gravados com sucesso!!! <a href="#"></a></p>
            </div>';
        echo '</div>';
    }
}
?>
