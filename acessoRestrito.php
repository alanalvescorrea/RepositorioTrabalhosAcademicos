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
                        <h4>Trabalhos Acadêmicos</h4>
                        <a href="trabalhoFormulario.php" class="btn btn-primary">
                            <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                        </a>
                        <a href="trabalhoConsultar.php" class="btn btn-primary"> <i
                                class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                        </a>
                        <a href="trabalhoEditarListar.php" class="btn btn-primary"> <i
                                class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                        </a>
                        <a href="trabalhoExcluir.php" class="btn btn-primary">
                            <i class="icon-trash icon-white"></i><span><strong>Excluir</strong></span>        	
                        </a>
                        <br><br>
                        <?php
                        if ($_SESSION ['UsuarioNivel'] == 2) {
                            $menuRestrito =
                                    '<h4><br>Gerência de Usuários</h4>
                                              
                                               <a href="usuarioFormulario.php" class="btn btn-primary">
                                                 <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                                               </a>
                                               <a href="usuarioConsultar.php" class="btn btn-primary"> <i
                                                 class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                                               </a>
                                               <a href="usuarioEditarListar.php" class="btn btn-primary"> <i
                                                 class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                                               </a>
                                               <a href="usuarioExcluir.php" class="btn btn-primary">
                                                 <i class="icon-trash icon-white"></i>
                                                 <span><strong>Excluir</strong></span>        	
                                               </a>
                                             ';
                        }
                        echo $menuRestrito;
                        ?>
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


