<?php
include 'tela/tela.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
 <meta charset="utf-8"> 


<!-- JQUERY -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

<!-- TWITTER BOOTSTRAP CSS -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

<!-- TWITTER BOOTSTRAP JS -->
<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<br>
	<br>
	<br>
	<br>
	<br>

	<div class="container">
		<div class="row">
			<div class="span4 offset4 well">
				<img src="img/logoSistema.png" alt="Tim Berners-Lee" />

				<legend>Acesso ao sistema</legend>
				<form method="POST" action="Negocio/validacao.php"
					accept-charset="UTF-8">

					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span><input
							type="text" id="txtUsuario" name="usuario"
							placeholder="nome de usuário">
					</div>
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span><input
							type="password" id="senhatxtSenha" name="senha"
							placeholder="senha">
					</div>



					<label class="checkbox"> </label>
					<button type="submit" name="submit" class="btn btn-info btn-block">Entrar</button>
				</form>
				<strong>Controle de Produções Acadêmicas</strong><br> <br>
				Desenvolvedores: Alan Correa e Melina Borba<br> Apoio: <br> <img
					src="img/IFRS.gif" alt="Tim Berners-Lee" />

			</div>
		</div>

	</div>

</body>
</html>


