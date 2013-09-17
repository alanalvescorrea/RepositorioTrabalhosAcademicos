<?php
if (isset($_POST['nome'])) {
    @$nome = strip_tags($_POST['usuario']);
    @$usuario = strip_tags($_POST['usuario']);
    @$email = strip_tags($_POST['email']);
    @$senha = strip_tags($_POST['senha']);
    @$senha_confirmacao = strip_tags($_POST['senha_confirmacao']);
    @$nivel = strip_tags($_POST['nivel']);

    @$nome = $_POST['nome'];
    @$usuario = $_POST['usuario'];
    @$email = $_POST['email'];
    @$senha = sha1($_POST['senha']);
    @$senha_confirmacao = sha1($_POST['senha_confirmacao']);
    @$nivel = $_POST['nivel'];
    @$ativo = 1;
    @$data = date("Y-m-d");
    @$hora = date("H:i:s");

    if ($senha != $senha_confirmacao) {
        echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                    alert ("Senhas informadas divergem. Informe senhas iguais!")
              </SCRIPT>';
        echo '<script language= "JavaScript"> location.href="usuario_cadastrar.php"</script>';
    }


    include ('../persistencia/classe_conexao.php');
    include 'classe_mensagens_formularios.php';
    $novaConexao = new conexao();
    $novaConexao->conecta();


    $inserir = "INSERT INTO `usuarios` (`nome`, `usuario` , `senha` , `email` , `nivel` , `ativo`, `data`, `hora`)  
VALUES ('$nome', '$usuario', '$senha', '$email', $nivel, $ativo, '$data', '$hora')";
    $novaConexao->mysql_query($inserir);

    if (!$novaConexao->mysql_query($inserir)) {
        $mensagemSucesso = new mensagens_form();
        $mensagemSucesso->sucesso();
        echo '<a href="javascript:history.go(-1)">Voltar</a>';
    } else {

        $mensagemErro = new mensagens_form();
        $mensagemErro->erro();
        echo '<a href="javascript:history.go(-1)">Voltar</a>';
    }



    exit();
}
?>



<!DOCTYPE HTML>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">


        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="../js/bootstrap.min.js"></script>

    </head>
    <body>
        <?php
        include '../tela/tela.php';
        $header = new tela();
        $header->header();
        ?>

        <div class="container">
            <div class="row">
                <div class="span2 offset2 well-large">

                    <!--<div class="alert alert-error">
                        <a class="close" data-dismiss="alert" href="#">×</a>Incorrect Username or Password!
                    </div>-->
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset>
                            <div id="legend">
                                <legend class="">Cadastro de usuários</legend>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <label class="control-label"  for="nome">Nome Completo</label>
                                <div class="controls">
                                    <input type="text" id="nome" name="nome" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block">Por favor, forneça o nome completo do usuário</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <label class="control-label"  for="usuario">Nome de usuário</label>
                                <div class="controls">
                                    <input type="text" id="usuario" name="usuario" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block">Nome de usuário pode conter quaisquer letras ou números, sem espaços</p>
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- E-mail -->
                                <label class="control-label" for="email">E-mail</label>
                                <div class="controls">
                                    <input type="text" id="email" name="email" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block">Por favor, forneça seu endereço de e-mail</p>
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password-->
                                <label class="control-label" for="senha">Senha</label>
                                <div class="controls">
                                    <input type="password" id="senha" name="senha" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block"></p>
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Password -->
                                <label class="control-label"  for="senha_confirmacao">Senha (Confirmação)</label>
                                <div class="controls">
                                    <input type="password" id="senha_confirmacao" name="senha_confirmacao" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block">Por favor, confirme a senha.</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <!-- E-mail -->
                                <label class="control-label" for="nivel">Nível</label>
                                <div class="controls">
                                    <input type="text" id="nivel" name="nivel" placeholder="" class="input-xlarge" required="">
                                    <p class="help-block">Por favor, forneça o nível de usuário. <br>1-Normal. 2-Adminstrador</p>
                                </div>
                            </div>

                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success">Gravar Usuário</button>
                                </div>
                            </div>
                        </fieldset>
                    </form> 
                </div>
            </div>
        </div>

    </body>
</html>


