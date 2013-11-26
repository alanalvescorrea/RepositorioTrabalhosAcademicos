<?php

/*
 * @author Alan
 */

//************* fun√ß√£o mensagem erro ***************
class mensagens_form {

    var $msg_erro = null;
    var $msg_sucesso = null;

    function erro() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message warning">
                <a class="close" href="#">x</a>
                <p><strong>Ops...</strong> Dados n„o foram gravados. TENTE NOVAMENTE. <a href="#"></a></p>
            </div>';
        echo '</div>';
    }

//************* fun√ß√£o mensagem sucesso ***************
    function sucesso() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />';
        echo '<div class="alerts">';
        echo '<div class="alert-message success">
                <a class="close" href="#">x</a>
                <p><strong>Legal..</strong> Dados gravados com sucesso!!! <a href="#"></a></p>
            </div>';
        echo '</div>';
    }

    function erro_login() {
        echo '<link href="../css/alert.css" rel="stylesheet" type="text/css" />
                <div class="alerts">
               
            

                <div class="alert-message warning">
                <a class="close" href="#">√ó</a>
                <strong>
                <a href="../index.php" class="alert-link">Sabemos que isso È chato, mas os dados est„o incorretos. Tente novamente :( </a>
                </strong>
                
                </div>
                </div>';
    }

}

?>
