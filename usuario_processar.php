<?php
session_start();
include("template/".SITE_TEMA."/header.php");


/**
 * verificar de onde vem os dados que estao sendo enviados para utilizar um campo verificador apenas, antes de ler todo o codigo de todos os campos
 * 
 * se for um cadastro simples, nao utilizar arquivos do tema e fazer rodar usando $().load() (jquery)
 */
        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
        if(!empty($senha)){
            $senha = hash('sha512',$senha);
        }
        $tipo_acesso = 1;
        $observacao = $_POST["observacao"];

        $data = date("Y-m-d");
        $hora = strftime("%H:%M:%S");

        $query = "INSERT INTO pessoas (nome, tel, email, login, senha, tipo_acesso, observacao, data, hora) 
                    VALUES ('$nome', '$tel', '$email', '$login', '$senha', $tipo_acesso, '$observacao', '$data','$hora')";

        $inserir = mysql_query($query);
        if ($inserir) {


            echo '<div class="alert alert-success">';
            echo "Ola " . $nome . ", Cadastro foi enviado com suscesso!\n";
            echo '</div>';
        } else {
            echo '<div class="alert alert-error">';
            echo "Ops...Cadastro não foi incluído";
            echo mysql_error();
            echo '</div>';
        }
        ?>
    <center><a href='index.php' title="incluir" class='incluir'>Acessar Sistema </a></center>
        

<?php
include("template/".SITE_TEMA."/footer.php");
?>