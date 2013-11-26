<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';

// A sessão precisa ser iniciada em cada página diferente
if (! isset ( $_SESSION ))
	session_start ();

$nivel_necessario = 2;

// Verifica se não há a variável da sessão que identifica o usuário
if (! isset ( $_SESSION ['UsuarioID'] ) or ($_SESSION ['UsuarioNivel'] < $nivel_necessario)) {
	// Destrói a sessão por segurança
	session_destroy ();
	// Redireciona o visitante de volta pro login
	header ( "Location: ../index.php" );
	exit ();
}

if (isset ( $_POST ['nome'] )) {
	$nome = strip_tags ( $_POST ['usuario'] );
	$usuario = strip_tags ( $_POST ['usuario'] );
	$email = strip_tags ( $_POST ['email'] );
	$senha = strip_tags ( $_POST ['senha'] );
	$senha_confirmacao = strip_tags ( $_POST ['senha_confirmacao'] );
	$nivel = strip_tags ( $_POST ['nivel'] );
	
	$nome = $_POST ['nome'];
	$usuario = $_POST ['usuario'];
	$email = $_POST ['email'];
	$senha = sha1 ( $_POST ['senha'] );
	$senha_confirmacao = sha1 ( $_POST ['senha_confirmacao'] );
	$nivel = $_POST ['nivel'];
	$ativo = 1;
	$data = date ( "Y-m-d" );
	$hora = date ( "H:i:s" );
	
	if ($senha != $senha_confirmacao) {
		echo '<SCRIPT LANGUAGE="JavaScript" TYPE="text/javascript">
                    alert ("Senhas informadas divergem. Informe senhas iguais!")
              </SCRIPT>';
		echo '<script language= "JavaScript"> location.href="usuario_cadastrar.php"</script>';
	}
	
	include ('../persistencia/classe_conexao.php');
	include 'classe_mensagens_formularios.php';
	$novaConexao = new conexao ();
	$novaConexao->conecta ();
	
	$inserir = "INSERT INTO `usuarios` (`nome`, `usuario` , `senha` , `email` , `nivel` , `ativo`, `data`, `hora`)  
VALUES ('$nome', '$usuario', '$senha', '$email', $nivel, $ativo, '$data', '$hora')";
	$novaConexao->mysql_query ( $inserir );
	
	if (! $novaConexao->mysql_query ( $inserir )) {
		$mensagemSucesso = new mensagens_form ();
		$mensagemSucesso->sucesso ();
		echo '<a href="javascript:history.go(-1)">Voltar</a>';
	} else {
		
		$mensagemErro = new mensagens_form ();
		$mensagemErro->erro ();
		echo '<a href="javascript:history.go(-1)">Voltar</a>';
	}
	
	exit ();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<link
	href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css"
	rel="stylesheet">
<script
	src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
</head>
<body>
        <?php
								$header = new tela ();
								$header->header ();
								?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
	<div class="container-fluid">
		<!-- CLASSE PARA DEFINIR UMA LINHA -->
		<div class="row-fluid">
			<!-- COLUNA OCUPANDO 2 ESPAÃ‡OS NO GRID -->
                <?php
																$menuEsquerdo = new tela ();
																$menuEsquerdo->menu_esquerdo ();
																?>
                <!-- COLUNA OCUPANDO 10 ESPAÃ‡OS NO GRID -->
			<br>
			<br>
			<br>
			<div class="span10">
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 
                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />
				<legend class="breadcrumb">Trabalhos Acadêmicos Cadastrados</legend>




				<form class="form-horizontal" action='' method="POST">
					<fieldset>
						<div id="legend">
							<legend class="">Cadastro de usuários</legend>
						</div>
						<div class="control-group">
							<!-- Username -->
							<label class="control-label" for="nome">Nome Completo</label>
							<div class="controls">
								<input type="text" id="nome" name="nome" placeholder=""
									class="input-xlarge" required="">
								<p class="help-block">Por favor, forneça o nome completo do
									usuário</p>
							</div>
						</div>
						<div class="control-group">
							<!-- Username -->
							<label class="control-label" for="usuario">Nome de usuário</label>
							<div class="controls">
								<input type="text" id="usuario" name="usuario" placeholder=""
									class="input-xlarge" required="">
								<p class="help-block">Nome de usuário pode conter quaisquer
									letras ou números, sem espaços</p>
							</div>
						</div>

						<div class="control-group">
							<!-- E-mail -->
							<label class="control-label" for="email">E-mail</label>
							<div class="controls">
								<input type="text" id="email" name="email" placeholder=""
									class="input-xlarge" required="">
								<p class="help-block">Por favor, forneça seu endereço de e-mail</p>
							</div>
						</div>

						<div class="control-group">
							<!-- Password-->
							<label class="control-label" for="senha">Senha</label>
							<div class="controls">
								<input type="password" id="senha" name="senha" placeholder=""
									class="input-xlarge" required="">
								<p class="help-block"></p>
							</div>
						</div>

						<div class="control-group">
							<!-- Password -->
							<label class="control-label" for="senha_confirmacao">Senha
								(Confirmação)</label>
							<div class="controls">
								<input type="password" id="senha_confirmacao"
									name="senha_confirmacao" placeholder="" class="input-xlarge"
									required="">
								<p class="help-block">Por favor, confirme a senha.</p>
							</div>
						</div>
						<div class="control-group">
							<!-- E-mail -->
							<label class="control-label" for="nivel">Nível</label>
							<div class="controls">
								<input type="text" id="nivel" name="nivel" placeholder=""
									class="input-xlarge" required="">
								<p class="help-block">
									Por favor, forneça o nível de usuário. <br>1-Normal.
									2-Adminstrador
								</p>
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
            <?php
												$rodape = new tela ();
												$rodape->rodape ();
												?>
    

</body>
</html>
