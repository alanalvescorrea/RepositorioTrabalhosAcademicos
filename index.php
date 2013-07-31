<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Acesso ao sistema</title>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
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
    </body>
</html>
