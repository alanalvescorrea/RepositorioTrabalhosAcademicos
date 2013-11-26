<?php
include '../negocio/seguranca.php';
include '../tela/tela.php';
require '../interface/html.class.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <?php
        $carregaClasseHtml = new html();
        $carregaClasseHtml->includes();
        $carregaClasseHtml->unicode();
        $carregaClasseHtml->titulo();
        $titulo = new tela ();
        ?>
    </head>

    <body>
        <?php
        $header = new tela ();
        $header->header();
        ?>

        <!-- CLASSE QUE DEFINE O CONTAINER COMO FLUIDO (100%) -->
        <div class="container-fluid">
            <!-- CLASSE PARA DEFINIR UMA LINHA -->
            <div class="row-fluid">
                <!-- COLUNA OCUPANDO 2 ESPAÇOS NO GRID -->
                <?php
                $menuEsquerdo = new tela ();
                $menuEsquerdo->menu_esquerdo();
                ?>
                <!-- COLUNA OCUPANDO 10 ESPAÇOS NO GRID -->
                <br>
                <br>
                <br>
                <div class="span10">
                    <?php echo 'Olá ' . $_SESSION['UsuarioNome'] . '! <br>Nível Acesso:' . $_SESSION['UsuarioNivel']; ?> 
                    <?php echo "<br><a href='../negocio/logout.php'>Sair do sistema</a>"; ?>

                    <hr />

                    <div class="span10">
                        <h4>Trabalhos Acadêmicos</h4>
                        <a href="../trabalhoAcademico/trabalhoAcademicoInterface.php" class="btn btn-primary">
                            <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                        </a>
                        <a href="../trabalhoAcadêmico/trabalho_listar.php" class="btn btn-primary"> <i
                                class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                        </a>
                        <a href="../trabalhoAcadêmico/listar_trabalho.php" class="btn btn-primary"> <i
                                class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                        </a>
                        <a href="../trabalhoAcadêmico/" class="btn btn-primary">
                            <i class="icon-trash icon-white"></i><span><strong>Excluir</strong></span>        	
                        </a>
                        <?php
                        if ($_SESSION ['UsuarioNivel'] == 2) {
                            $menuRestrito =
                                    '<h4><br>Gerência de Usuários</h4>
                                              
                                               <a href="../negocio/trabalho_cadastrar.php" class="btn btn-primary">
                                                 <i class="icon-pencil icon-white"></i> <span><strong>Cadastrar</strong></span>
                                               </a>
                                               <a href="trabalho_listar.php" class="btn btn-primary"> <i
                                                 class="icon-eye-open icon-white"></i> <span><strong>Consultar</strong></span>
                                               </a>
                                               <a href="listar_trabalho.php" class="btn btn-primary"> <i
                                                 class="icon-edit icon-white"></i> <span><strong>Editar</strong></span>
                                               </a>
                                               <a href="#" class="btn btn-primary">
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
            $rodape = new tela ();
            $rodape->rodape();
            ?>
        </div>

    </div>

</body>
</html>


