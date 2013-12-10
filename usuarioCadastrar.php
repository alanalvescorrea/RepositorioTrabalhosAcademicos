<?php
include 'acessoSeguranca.php';
require 'html.class.php';

if (!isset($_SESSION))
    session_start();

$nivel_necessario = 2;

if (!isset($_SESSION ['UsuarioID']) or ($_SESSION ['UsuarioNivel'] < $nivel_necessario)) {
    session_destroy();
    header("Location: index.php");
    exit();
}

if (isset($_POST ['nome'])) {
    $nome = strip_tags($_POST ['usuario']);
    $usuario = strip_tags($_POST ['usuario']);
    $email = strip_tags($_POST ['email']);
    $senha = strip_tags($_POST ['senha']);
    $senha_confirmacao = strip_tags($_POST ['senha_confirmacao']);
    $nivel = strip_tags($_POST ['nivel']);

    $nome = $_POST ['nome'];
    $usuario = $_POST ['usuario'];
    $email = $_POST ['email'];
    $senha = sha1($_POST ['senha']);
    $senha_confirmacao = sha1($_POST ['senha_confirmacao']);
    $nivel = $_POST ['nivel'];
    $ativo = 1;
    $data = date("Y-m-d");
    $hora = date("H:i:s");

    if ($senha != $senha_confirmacao) {
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                    alert ("Senhas informadas divergem. Informe senhas iguais!")
              </SCRIPT>';
        echo '<script language= "JavaScript"> location.href="usuario_cadastrar.php"</script>';
    }

    include ('persistencia/classe_conexao.php');
    $novaConexao = new conexao ();
    $novaConexao->conecta();

    $inserir = "INSERT INTO `usuarios` (`nome`, `usuario` , `senha` , `email` , `nivel` , `ativo`, `data`, `hora`)  
VALUES ('$nome', '$usuario', '$senha', '$email', $nivel, $ativo, '$data', '$hora')";
    $novaConexao->mysql_query($inserir);

    if (!$novaConexao->mysql_query($inserir)) {
        $mensagemSucesso = new html ();
        $mensagemSucesso->menssagemSucessoTrabalhoGravado();
        echo '<a href="javascript:history.go(-1)">Voltar</a>';
    } else {
        
        $mensagemErro = new html ();
        $mensagemErro->menssagemErroTrabalhoGravado();
        echo '<a href="javascript:history.go(-1)">Voltar</a>';
    }

    exit();
}
?>
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $carregaClasseHtml = new html();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        ?>
    </head>

    <body>
        <?php
        $header = new html ();
        $header->topoSistema();
        ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php
                $menuEsquerdo = new html ();
                $menuEsquerdo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br>
                <br>
                <br>
                <div class="span10">
                    <?php
                    $informacoesSobreSessao = new html();
                    $informacoesSobreSessao->informarSessao();
                    ?>

                    <div class="span10">
                        <legend class="breadcrumb">usuário cadastrar</legend>


                    </div>
                    <br>

                </div>
            </div>
            <?php
            $rodape = new html ();
            $rodape->rodape();
            ?>
        </div>
    </div>
</body>
</html>


