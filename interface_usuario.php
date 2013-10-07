<?php
include ('Persistencia/classe_conexao.php');
include 'Negocio/classe_mensagens_formularios.php';
include 'tela/tela.php';

// ConexÃ£o e consulta ao Mysql
$novaConexao = new conexao ();
$novaConexao->conecta ();

@$busca = $_POST ['palavra']; // palavra que o usuario digitou

$consulta = "SELECT * FROM trabalho_academico WHERE titulo LIKE '%$busca%'"; // faz a busca com as palavras enviadas
$novaConexao->mysql_query ( $consulta );

if (empty ( $consulta )) { // Se nao achar nada, lanÃ§a essa mensagem
	echo "Nenhum registro encontrado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
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
								$headerNovo = new tela ();
								$headerNovo->header ();
								?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
	<div class="container-fluid">
		<!-- CLASSE PARA DEFINIR UMA LINHA -->
		<div class="row-fluid">
			<!-- COLUNA OCUPANDO 2 ESPAÃ‡OS NO GRID -->

			<!-- COLUNA OCUPANDO 10 ESPAÃ‡OS NO GRID -->
			<br> <br> <br>
			<div class="span10">
				<hr />
				<legend class="breadcrumb">Seja Bem-Vindo ao Repositório de Trabalho
					Acadêmicos</legend>
				<center>
					<form action=" " method="post">
						<input type="text" name="palavra" required="" class="input-xlarge" />
						<div class="control-group">

							<div class="controls">
								<button class="btn btn-success">Pesquisar</button>
							</div>
						</div>
					</form>
				</center>

                    <?php
																				
						if (empty ( $busca )) {
						echo "<center>Por favor, insira um termo para sua pesquisa.</center>";
							exit ();
							}
																				
							while ( $dados = $novaConexao->resultado () ) {
							$string = $dados [resumo];
							$string = substr ( $string, 0, 150 );
							echo '<hr>';
							echo "<strong>$dados[titulo]</strong>.<br> ";
							echo " <i>Resumo:</i> $string ...<br />";
						    echo " <i>Autor:</i> $dados[aluno]<br>";
						    echo " <i>Orientador:</i> $dados[orientador]<br />";
							echo "<i>Data Apresentação: </i>" . strftime ( "%d/%m/%Y ", strtotime ( @$dados [data] ) ) . "<br>";
							echo " <i>Área:</i> $dados[area]<br />";
						    echo " <i>Palavras-Chave:</i> $dados[palavras_chave]<br />";
						    echo "<a href=\" $dados[local_pdf]\" >Arquivo Completo</a>";
						    echo '<hr>';
																				}
																				?>

                </div>
                <?php
																?>
            </div>

</body>
</html>
