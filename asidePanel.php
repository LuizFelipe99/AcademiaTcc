
<?php
//VERIFICA A SESSAO DO USUARIO E EXIBE NO PAINEL

      if((!isset ($_SESSION['loginUsuario']) == false) AND (!isset ($_SESSION['nivelUsuario']) == false) ){
        $usuario = $_SESSION['loginUsuario'];
        $nivel = $_SESSION['nivelUsuario'];
      }else{

      }


?>
<!-- quando precisar de editar alguma coisa do menu venho direto aqui e mudo os caminhos que muda em todos automaticamente -->
     <aside class="left-sidebar" data-sidebarbg="skin5">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav" class="p-t-30">
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="home.php" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Dashboard</span></a></li>
                       <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-receipt"></i><span class="hide-menu">Aluno </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="aluno.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Adicionar aluno </span></a></li>
                                
                                <li class="sidebar-item"><a href="listAluno.php" class="sidebar-link"><i class="mdi mdi-table-edit"></i><span class="hide-menu"> Lista de Alunos </span></a></li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-face"></i><span class="hide-menu">Personal </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="listaEspecifica.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu"> Meus Alunos </span></a></li>                       
                                 <?php
                                        // se o nivel do usuario for = 1 quer dizer que ele é um adm
                                        if($nivel == '1'){
                                  ?>
                                    <li class="sidebar-item"><a href="personal.php" class="sidebar-link"><i class="mdi mdi-table-edit"></i>
                                    <span class="hide-menu"> 

                                    Cadastrar Personal 

                                </span></a></li>

                                <li class="sidebar-item"><a href="listPersonal.php" class="sidebar-link"><i class="mdi mdi-table-edit"></i>
                                    <span class="hide-menu"> 

                                    Visualizar Personal
                                </span></a></li>


                                <?php
                                        }
                                    ?>

                                
                            </ul>
                        </li>  

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cash-multiple"></i><span class="hide-menu">Financeiro </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="financeiro.php" class="sidebar-link"><i class="mdi mdi-note-outline"></i><span class="hide-menu">Alunos </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-table-edit"></i>
                                    <span class="hide-menu">
                                    Personal 
                                </span></a></li>
                            </ul>
                        </li>  

                        <li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-format-line-style"></i><span class="hide-menu">Avaliação </span></a>
                            <ul aria-expanded="false" class="collapse  first-level">
                                <li class="sidebar-item"><a href="avaliacoes.php" class="sidebar-link"><i class="mdi mdi-calendar"></i><span class="hide-menu">Agendar Avaliação </span></a></li>
                                <li class="sidebar-item"><a href="#" class="sidebar-link"><i class="mdi mdi-account-card-details"></i>
                                    <span class="hide-menu">
                                    Avaliação do dia 
                                </span></a></li>
                            </ul>
                        </li>  



        </aside>        