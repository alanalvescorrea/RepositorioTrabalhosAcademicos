<?php
include 'acessoSeguranca.php';
require 'html.class.php';
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
                        <hr />  
                        <legend class="breadcrumb">Editar Trabalhos Acadêmicos Cadastrados</legend>

                        <?php
                        require 'persistencia/classe_conexao.php';
                        $novaConexao = new conexao();
                        $novaConexao->conecta();
                        $id = $_GET['id']; // Recebendo o valor vindo do link

                        $resultado = mysql_query("SELECT * FROM trabalho_academico WHERE id = " . $id . " "); // Há variável $resultado faz uma consulta em nossa tabela selecionando somente o registro desejado
                        while ($linha = mysql_fetch_array($resultado)) { //Já a instrução while faz um loop entre todos os registros e armazena seus valores na variável $linha
                            ?>

                            <form class="form-horizontal" method="post" action="trabalhoAlterarUpdate.php" >
                                <input type="hidden" name="id" value="<?php echo $linha['id']; ?>" /> <!– passando o valor da id em um campo oculto –>

                                <!-- editar titulo -->
                                <div class="control-group">
                                    <label class="control-label"  for="titulo">Título do trabalho:</label>
                                    <div class="controls">
                                        <input type="text" name="titulo" value="<?php echo $linha['titulo']; ?>" class="input-xxlarge"/> <br /><!– mostrando dentro do form o valor do campo nome –>
                                    </div>
                                </div>


                                <div class="control-group">
                                    <!-- botão de acesso -->
                                    <div class="controls">
                                        <button class="btn btn-success">Atualizar Informações</button>

                                    </div>
                                </div>

                            </form>

                            <?php
                        }
                        ?> 

                    </div>
                </div>



            </div>
            <br>

        </div>
    </div>
    <?php
    $rodape = new html ();
    $rodape->rodape();
    ?>
</body>
</html>


