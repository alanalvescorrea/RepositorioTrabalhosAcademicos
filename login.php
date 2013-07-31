<?php
session_start();
include("template/".SITE_TEMA."/header.php");

// Recebemos os dados digitados pelo usuário
        $login = $_POST['login'];
        $senha = $_POST['senha'];
        
//Criamos o comando que efetua a busca do Banco
        $sql = "SELECT id, nome FROM pessoas WHERE login = '$login' AND senha = '$senha'";

//Executamos o comando
        $rs = mysql_query($sql, $conn);

//Retornamos o número de linhas afetadas
        $num = mysql_num_rows($rs);

//Verificamos se alguma linha foi afetada. Caso sim, retornamos suas informações
        if ($num > 0) {

//Retorna os dados do Banco
            $rst = mysql_fetch_array($rs);
            $id = $rst["id"];
            $nome = $rst["nome"];

//Registra os dados do usuário na sessão
            $_SESSION["id"] = $id;
            $_SESSION["nome"] = $nome;
            $_SESSION["login"] = $login;
            /**
             * nao utilizar dados pessoais dos usuarios, em vez disso, guardar apenas uma chave unica gravada no banco, no registro deste o usuario
             */

//Redireciona para o index
            header("Location:logado.php");
        } else {

//Caso nenhuma linha seja retornada, emite o alerta e retorna
            echo "<b>Nenhum usuário foi encontrado com os dados informados…retornando</b>";
            echo "<meta http-equiv = 'refresh' content = '0;URL=index.php'>";
        }
        include("templates/".SITE_TEMA."/footer.php");