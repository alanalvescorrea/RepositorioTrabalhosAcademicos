<?php
include("template/default/header.php");
?>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span4">
                </div>
                <div class="span4">
                    <div class="page-header">
                        <h3>
                            <span>Repositório Acadêmico</span>
                        </h3>
                    </div>

                    <h3 class="text-center">
                        Login:
                    </h3>
                    <form class="form-horizontal" method="post" action="login.php">
                        <div class="control-group">
                            <label class="control-label" for="inputEmail">Nome de usuário</label>
                            <div class="controls">
                                <input name="login" type="text" size="30" maxlength="255" />
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="inputPassword">Senha</label>
                            <div class="controls">
                                <input name="senha"  id="senha" type="password" size="30" maxlength="255" />
                            </div>
                        </div>
                        <div class="control-group">
                            <div class="controls">
                                <label class="checkbox"></label> <button type="submit" class="btn">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="span4">
                </div>
            </div>
        </div>
<?php
include("templates/default/footer.php");