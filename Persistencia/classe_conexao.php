<?php
class conexao {

    var $host = 'localhost';
    var $usuario = 'root';
    var $senha = '';
    var $banco = 'repositoriotrabalhosacademicos_db';
    var $conexao = null;
    var $query = null;

    function conecta() {
        $this->conexao = mysql_connect($this->host, $this->usuario, $this->senha);
        $status = mysql_select_db($this->banco, $this->conexao);
        return $status;
    }
}
?>
