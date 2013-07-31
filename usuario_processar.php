<html>

    <head>
        <meta charset="UTF-8">
        <title>Acesso ao sistema</title>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <?php
        $conn = mysql_connect("localhost", "root", "") or die("Impossível conectar");

        if ($conn) {
            mysql_select_db("acervo_bd", $conn);
        }

        $nome = $_POST["nome"];
        $tel = $_POST["tel"];
        $email = $_POST["email"];
        $login = $_POST["login"];
        $senha = $_POST["senha"];
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
            echo \mysql_error();
            echo '</div>';
        }
        ?>
    <center><a href='index.php' title="incluir" class='incluir'>Acessar Sistema </a></center>
        

    </body>
</html>