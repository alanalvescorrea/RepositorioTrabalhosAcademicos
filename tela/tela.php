<?php

class tela {
    /* RODAPE************************************************** */

    function rodape() {
        ?>
        <div class="well well-small">
            CopyLeft 2013 | Projeto Polosap
        </div>

        <?php
    }

    /* HEADER************************************************** */

    function header() {
        $logo = '<br><img src="../img/logoSistema.png" alt="Tim Berners-Lee" align="right"/>';

        echo '<div class="row-fluid">
                 <div class="span12">
                     <div class="navbar">
                         <div class="navbar-inner">
                             <div class="container">
        		' . $logo . '
                                <h2>Repositório Trabalhos Acadêmicos</h2>
                             </div>
                        </div>
                    </div>
                </div>
            </div>';
    }

    /* TITULO************************************************** */

    function titulo() {
        echo '<title>Ptolomeu</title>';
    }

    /* MENU ESQUERDO************************************************** */

    function menu_esquerdo() {
        include '../negocio/seguranca.php';
        $tipoUsuario = $_SESSION ['UsuarioNivel'];

        if ($_SESSION ['UsuarioNivel'] == 2) {
            $menuRestrito = '<li>
        		
                        <a href="usuario_cadastrar.php">
                            <i class="icon-plus"></i>
                                Cadastrar usuário
                        </a>
                    </li>      ';
        }

        echo '
        <div class="span2">
             <h2> Menu </h2>
                <ul class="nav nav-tabs nav-stacked">
                
                    <li>
                        <a href="restrito.php">
                            <i class="icon-home"></i>
                                Menu Principal
                        </a>
                    </li>
                    <li>
                        <a href="trabalho_cadastrar.php">
                            <i class="icon-book"></i>
                                Cadastrar trabalho
                        </a>
                   </li>
                    <li>
                        <a href="aluno_cadastrar.php">
                            <i class="icon-user"></i>
                                Cadastrar aluno
                        </a>
                    </li>
                     <li>
                        <a href="orientador_cadastrar.php">
                            <i class="icon-briefcase"></i>
                                Cadastrar orientador
                        </a>
                    </li>
                    <li>
                        <a href="instituicao_cadastrar.php">
                            <i class="icon-certificate"></i>
                                Cadastrar instituição
                        </a>
                    </li>
                    <li>
                        <a href="trabalho_listar.php">
                            <i class="icon-list-alt"></i>
                                Listar Trabalhos
                        </a>
                    </li>
                    <li>
                        <a href="listar_trabalho.php">
                            <i class="icon-edit"></i>
                                Editar
                        </a>
                    </li>
                    <li>
                        <a href="../interface_usuario.php">
                            <i class="icon-globe"></i>
                                Web
                        </a>
                    </li>

				
				' . $menuRestrito . '
				 
                                          			
            </ul>
        </div>';
    }

    function quem_somos() {
        echo '<center>';
        echo 'Sistema de Controle de Trabalhos Academicos';
        echo '</center>';
    }

}
?>
