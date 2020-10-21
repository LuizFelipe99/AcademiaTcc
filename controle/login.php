
<?php
//chamei a classe login que com ela vem a classe conexao e usuario
require_once "classes/login_class.php";


//Instancia a classe usuario
$usuarioClass = new Usuario();
//Seta os valores na classe usuario, vindos do front-end
$usuarioClass->__set('loginUsuario', $_POST['loginUsuario']);
$usuarioClass->__set('senhaUsuario', $_POST['senhaUsuario']);

//Recupera os valores da classe que serão usados na função logar
$login = $usuarioClass->__get('loginUsuario');
$senha = $usuarioClass->__get('senhaUsuario');
//Instancia a classe conexao

$conexao = new Conexao();
//Instancia a classe login passando conexao, usuario e senha por parametro

$login = new Login($conexao, $login, $senha);
//Executa a função logar da classe LOGIN
$login->logar();

?>