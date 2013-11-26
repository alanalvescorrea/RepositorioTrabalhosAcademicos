<?php

/**
 * Esta classe contém funções para exibir fragmentos em html 
 * que compõem as páginas do sistemas.
 *
 * @author Alan Alves Correa
 */
class html {

    function metaTag() {
        ?>
        <meta name="description" content="Repositorio digital de trabalhos acadêmicos">
        <meta name="keywords" content="educação,mestrado,doutorado, monografia, biblioteca digital">
        <meta name="author" content="projeto polosap">

        <?php
    }

    function viewport() {
        ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>

        <?php
    }

    function includes() {
        ?>

        <!-- JQUERY -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.7.1.min.js"><\/script>')</script>

        <!-- TWITTER BOOTSTRAP CSS -->
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" />

        <!-- TWITTER BOOTSTRAP JS -->
        <script src="../js/bootstrap.min.js"></script>
        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- DropDownPlugin -->
        <link href="css/ddlevelsmenu-base.css" rel="stylesheet">
        <link href="css/ddlevelsmenu-topbar.css" rel="stylesheet">
        <!-- FlexSlider -->
        <link href="css/flexslider.css" rel="stylesheet">

        <!-- ParallelSlider -->
        <link href="css/slider.css" rel="stylesheet">
        <!-- prettyPhoto -->
        <link href="css/prettyPhoto.css" rel="stylesheet">
        <!-- Font awesome CSS -->
        <link href="css/font-awesome.min.css" rel="stylesheet">		
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- Color CSS -->
        <link href="css/color.css" rel="stylesheet">
        <!-- Favicon -->
        <link rel="shortcut icon" href="#">

        <?php
    }

    function cabecalho() {
        ?>
        <div class="header">
            <div class="container">
                <div class="row">

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-text">
                            <!-- LOGO -->
                            <h3>Ptolomeu</h3>
                            <p>Repositório virtual de trabalhos acadêmicos</p>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Navegação -->
                        <div class="navi">
                            <div id="ddtopmenubar" class="mattblackmenu">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="service.html">Sobre o sistema</a></li>
                                    <li><a href="about.html">Buscar trabalhos</a></li>
                                    <li><a href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>             
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    function topoSistema() {
        ?>
        <div class="row-fluid">
            <div class="span12">
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container">
                            <br><img src="../img/logoSistema.png" alt="Tim Berners-Lee" align="right"/>
                            <h2>Repositório Trabalhos Acadêmicos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
    }

    function menu_esquerdo() {
        include 'seguranca.php';
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

    function rodape() {
        ?>
        <div class="well well-small">
            CopyLeft 2013 | Projeto Polosap
        </div>

        <?php
    }

    function informarSessao() {
        echo 'Olá ' . $_SESSION['UsuarioNome'] . '! <br>Nível Acesso:' . $_SESSION['UsuarioNivel'];

        echo "<br><a href='index.php'>Sair do sistema</a>";
        ?>
        <hr />
        <?php
    }

    function titulo() {
        ?>
        <title>Ptolomeu</title>

        <?php
    }

    function menssagemErroLogin() {
        ?>
        <link href="css/alert.css" rel="stylesheet" type="text/css" />
        <div class="alerts">
            <div class="alert-message warning">
                <a class="close" href="#"></a>
                <strong>
                    <a href="../login.php" class="alert-link">Sabemos que isso é chato, mas os dados informados estão incorretos. Tente novamente :( </a>
                </strong>

            </div>
        </div>

        <?php
    }

    function carregarJavascrip() {
        ?>
        <!-- Javascript arquivos -->
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap JS -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Isotope -->
        <script src="js/isotope.js"></script>
        <!-- Respond JS for IE8 -->
        <script src="js/respond.min.js"></script>
        <!-- HTML5 Support for IE -->
        <script src="js/html5shiv.js"></script>
        <!-- Modernizer -->
        <script src="js/modernizr.custom.28468.js"></script>

        <!-- Custom JS -->
        <script src="js/custom.js"></script>

        <?php
    }

    function unicode() {
        ?>
        <meta charset="UTF-8">
        <?php
    }

}
?>

