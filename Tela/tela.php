<?php

class tela {
    
    
    /* RODAPE************************************************** */
    function rodape() {
        echo "CopyLeft 2013";
    }

    /* HEADER************************************************** */
    function header() {

        echo '<div class="row-fluid">
                 <div class="span12">
                     <div class="navbar">
                         <div class="navbar-inner">
                             <div class="container">
                                <h2>Repositório Trabalhos Acadêmicos</h2>
                             </div>
                        </div>
                    </div>
                </div>
            </div>';
    }

    /* TITULO************************************************** */
    function titulo() {

        echo '<title>RTA</title>';
    }

    /* MENU ESQUERDO************************************************** */
    function menu_esquerdo() {
        echo'
        <div class="span2">
             <h2> Menu </h2>
                <ul class="nav nav-tabs nav-stacked">
                    <li>
                        <a href="trabalho_cadastrar.php">
                            <i class="icon-book"></i>
                                Cadastrar novo trabalho
                        </a>
                   </li>
                    <li>
                        <a href="aluno_cadastrar.php">
                            <i class="icon-user"></i>
                                Cadastrar novo aluno
                        </a>
                    </li>
                     <li>
                        <a href="orientador_cadastrar.php">
                            <i class="icon-briefcase"></i>
                                Cadastrar novo orientador
                        </a>
                    </li>
                    <li>
                        <a href="instituicao_cadastrar.php">
                            <i class="icon-home"></i>
                                Cadastrar nova instituição
                        </a>
                    </li>
                    <li>
                        <a href="trabalho_listar.php">
                            <i class="icon-star"></i>
                                Listar trabalhos cadastrados
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-star"></i>
                                Lorem ipsum
                        </a>
                    </li>
            </ul>
        </div>
';
    }
}

?>
