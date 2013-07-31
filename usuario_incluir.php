<?php
session_start();
include("template/".SITE_TEMA."/header.php");
?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <h3 class="text-center">
                        Repositório Acadêmico
                    </h3>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span4">
                </div>
                <div class="span4">
                    <h3 class="text-center">
                        Cadastro de Usuário
                    </h3>
                    <form class="form-horizontal" action="usuario_processar.php" method="post" name="cadastro" id="cadastro">
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Novo usuário</legend>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="nome">Nome Completo</label>
                                <div class="controls">
                                    <input id="nome" name="nome" type="text" placeholder="nome completo" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="email">Email</label>
                                <div class="controls">
                                    <input id="email" name="email" type="text" placeholder="nome@mail.com" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="tel">Telefone</label>
                                <div class="controls">
                                    <input id="tel" name="tel" type="text" placeholder="05199887766" class="input-xlarge">

                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="control-group">
                                <label class="control-label" for="login">Nome de usuário</label>
                                <div class="controls">
                                    <input id="login" name="login" type="text" placeholder="nome de usuário" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="control-group">
                                <label class="control-label" for="senha">Senha</label>
                                <div class="controls">
                                    <input id="senha" name="senha" type="password" placeholder="senha" class="input-xlarge" required="">

                                </div>
                            </div>

                            <!-- Textarea -->
                            <div class="control-group">
                                <label class="control-label" for="observacao">Observação</label>
                                <div class="controls">                     
                                    <textarea id="observacao" name="observacao">Espaço para informações adicionais e comentários</textarea>
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="control-group">
                                <label class="control-label" for="cadastrar"></label>
                                <div class="controls">
                                    <button id="cadastrar" name="cadastrar" class="btn btn-primary">Gravar usuário</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>

                </div>
                <div class="span4">
                </div>
            </div>
        </div>
<?php
include("template/".SITE_TEMA."/footer.php");