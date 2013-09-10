<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
?>
<?php
if (isset($_POST['nome'])) {
    @$nome = strip_tags($_POST['nome']);
    @$email = strip_tags($_POST['email']);
    @$observacao = strip_tags($_POST['observacao']);
    echo "Nome		=" . $nome . "</br>";
    echo "Email		=" . $email . "</br>";
    echo "Observação	=" . $observacao . "</br>";
    echo "<span class=\"label label-info\" >Dados cadastrados com sucesso</span>";
    echo '<br><br><a href="#" onclick="window.close() " >Continuar cadastro</a>';

    include ('../persistencia/classe_conexao.php');
    $novaConexao = new conexao();
    $novaConexao->conecta();

    $inserir = "INSERT INTO `instituicao` ( `nome`, `email` , `observacao`)  
      VALUES ('$nome', '$email', '$observacao')";
    $novaConexao->mysql_query($inserir);
    exit();
}
?>


<!DOCTYPE html> 
<html lang="en"> 
    <head> 
        <meta charset="utf-8"> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <link href="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.2/css/bootstrap-combined.min.css" rel="stylesheet"> 
        <script src="http://www.bootstrapcdn.com/twitter-bootstrap/2.2.1/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        $headerNovo = new tela();
        $headerNovo->header();
        ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php
                $menuEsquerdoNovo = new tela();
                $menuEsquerdoNovo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br><br><br>
                <div class="span10">
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '!'; ?> 

                    <?php echo "<a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />  
                    <legend class="breadcrumb">Nova instituição de ensino</legend>


                    <div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary">Cadastrar</a></p></div>
                    <!-- model content -->	
                    <div id="form-content" class="modal hide fade in" style="display: none; ">
                        <div class="modal-header">
                            <a class="close" data-dismiss="modal">×</a>
                            <h3>Nova instituição de ensino</h3>
                        </div>
                        <div>
                            <form class="instituicao">
                                <fieldset>
                                    <div class="modal-body">
                                        <ul class="nav nav-list">
                                            <li class="nav-header">Nome</li>
                                            <li><input class="input-xlarge" value="nome instituicao" type="text" name="nome"></li>
                                            <li class="nav-header">Email</li>
                                            <li><input class="input-xlarge" value="mail@mail.com" type="text" name="email"></li>
                                            <li class="nav-header">Observação</li>
                                            <li><textarea class="input-xlarge" name="observacao" rows="3"> Informações adicionais sobre o aluno.
                                                </textarea></li>
                                        </ul> 
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-success" id="submit">Gravar</button>
                            <a href="#" class="btn" data-dismiss="modal">Fechar</a>
                        </div>
                    </div>

                    <script>
                        $(function() {
                            //twitter bootstrap script
                            $("button#submit").click(function() {
                                $.ajax({
                                    type: "POST",
                                    url: "instituicao_cadastrar.php",
                                    data: $('form.instituicao').serialize(),
                                    success: function(msg) {
                                        $("#thanks").html(msg)
                                        $("#form-content").modal('hide');
                                    },
                                    error: function() {
                                        alert("failure");
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
            <?php
            $novoRodape = new tela();
            $novoRodape->rodape();
            ?>
    </body>
</html>
 
  
  
