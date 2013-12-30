<?php

class conexao {

    var $host = 'localhost';
    var $usuario = 'root';
    var $senha = '';
    var $banco = 'repositoriotrabalhosacademicos_db';
    var $conexao = null;
    var $query = null;
    var $data;

    function conecta() {
        $this->conexao = mysql_connect($this->host, $this->usuario, $this->senha);
        $status = mysql_select_db($this->banco, $this->conexao);
        return $status;
    }

    function mysql_query($query) {
        $this->query = mysql_query($query);
        return $this->query;
    }

    function resultado() {
        return mysql_fetch_assoc($this->query);
    }

    function desconectar() {
        mysql_close($conexao);
    }

}
?>
