<?php

/**
 * Funçoes relacionadas ao banco de dados
 */
class db {
    /**
     * Conecta no banco
     * @example $db->conexao()
     */
    public function conexao(){
        $conn = mysql_connect(DBURL, DBUSER, DBPASS) or die("Impossível conectar");
        mysql_select_db(DBNAME, $conn);
    }
}

/**
 * Funçoes para trabalhar com autenticaçao
 */
class auth {
    /**
     * Verifica se o usuario esta logado
     * @example $auth->verifica();
     */
    public function verifica(){
        //verifica se as $_SESSION estao criadas
        //verifica se a chave de usuario ($_SESSION["chaveu"]) existe na tabela de usuarios
        //verifica se este usuario se logou na tabela de registro de sessoes
    }
}