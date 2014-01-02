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
                        <legend class="breadcrumb">Cadastrar usuário</legend>


                        <form class="form-horizontal" action='usuarioCadastrar.php' method="POST">
                            <fieldset>
                               
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
                                        <input type="email" id="email" name="email" placeholder=""
                                               class="input-xlarge" required="">
                                        <p class="help-block">Por favor, forneça seu endereço de e-mail</p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Password-->
                                    <label class="control-label" for="senha">Senha</label>
                                    <div class="controls">
                                        <input type="password" id="senha" name="senha" placeholder="" class="input-large" required="">
                                        <p class="help-block"></p>
                                    </div>
                                </div>

                                <div class="control-group">
                                    <!-- Password -->
                                    <label class="control-label" for="senha_confirmacao">Senha
                                        (Confirmaçao)</label>
                                    <div class="controls">
                                        <input type="password" id="senha_confirmacao"
                                               name="senha_confirmacao" placeholder="" class="input-large"
                                               required="">
                                        <p class="help-block">Por favor, confirme a senha.</p>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <!-- E-mail -->
                                    <label class="control-label" for="nivel">Nível</label>
                                    <div class="controls">
                                        <input type="number" id="nivel" name="nivel" required="" class="input-mini" min="1" max="2">
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


