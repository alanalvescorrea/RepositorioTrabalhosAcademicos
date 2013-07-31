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
                        Área administrativa
                    </h3>
                    <div class="tabbable" id="tabs-160262">
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#panel-956905" data-toggle="tab">Trabalhos acadêmicos</a>
                            </li>
                            <li class="active">
                                <a href="#panel-617297" data-toggle="tab">Usuários sistema</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane" id="panel-956905">

                                <br><a href='trabalho_incluir.php' title="incluir" class='sair'>Incluir trabalho</a>

                                <div>
                                    <br><a href='trabalho_atualizar.php' title="incluir" class='sair'>Atualizar trabalho</a>
                                </div>
                                <div>
                                    <br><a href='trabalho_excluir.php' title="incluir" class='sair'>Excluir trabalho</a>

                                </div>

                            </div>
                            <div class="tab-pane active" id="panel-617297">

                                <br><a href='usuario_incluir.php' title="incluir" class='sair'>Incluir usuário</a>

                                <div>
                                    <br><a href='usuarui_atualizar.php' title="incluir" class='sair'>Atualizar usuário</a>
                                </div>
                                <div>
                                    <br><a href='usuario_excluir.php' title="incluir" class='sair'>Excluir usuário</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="span4">
                </div>
            </div>
        </div>

<?php
include("template/".SITE_TEMA."/footer.php");