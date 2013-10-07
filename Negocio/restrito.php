<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
?>
<!DOCTYPE HTML>
<html lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">        
<?php
$titulo = new tela ();
$titulo->titulo ();
?>

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
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '! <br>Nível Acesso:'.$_SESSION['UsuarioNivel'] ; ?> 

                    <?php echo "<br><a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />
				<h4>Trabalhos Acadêmicos</h4>
				<div class="span1">
					<a href="../negocio/trabalho_cadastrar.php" class="btn btn-primary">
						<i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
					</a>
				</div>
				<div class="span1">
					<a href="trabalho_listar.php" class="btn btn-primary"> <i
						class="icon-eye-open icon-white"></i> <span><strong>Listar</strong></span>
					</a>
				</div>
				<div class="span1">
					<a href="listar_trabalho.php" class="btn btn-primary"> <i
						class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
					</a>
				</div>
				<!--
                    <div class="span1">
                        <a href="#" class="btn btn-primary">
                            <i class="icon-trash icon-white"></i>
                            <span><strong>Excluir</strong></span>        	
                        </a>
                    </div>
                    -->
			</div>

		</div>
	</div>
        <?php
								$rodape = new tela ();
								$rodape->rodape ();
								?>
    </body>
</html>


