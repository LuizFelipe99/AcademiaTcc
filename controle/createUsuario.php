
<?php
//chamei a classe login que com ela vem a classe conexao e usuario
require "classes/usuario_class.php";



//Instancia a classe usuario passando $conexao, $login, $senha, $email, $nivel por parametro
$usuarioClass = new Usuario();
//Seta os valores na classe usuario, vindos do front-end
$usuarioClass->__set('loginUsuario', $_POST['loginUsuario']);
$usuarioClass->__set('senhaUsuario', $_POST['senhaUsuario']);
$usuarioClass->__set('emailUsuario', $_POST['emailUsuario']);
$usuarioClass->__set('nivelUsuario', $_POST['nivelUsuario']);
$usuarioClass->__set('nomeUsuario', $_POST['nomeUsuario']);

//Recupera os valores da classe que serão usados na função logar
$loginUsuario = $usuarioClass->__get('loginUsuario');
$senhaUsuario = $usuarioClass->__get('senhaUsuario');
$emailUsuario = $usuarioClass->__get('emailUsuario');
$nivelUsuario = $usuarioClass->__get('nivelUsuario');
$nomeUsuario = $usuarioClass->__get('nomeUsuario');

//Instancia a classe conexao
$conexao = new Conexao();

// Insancia a classe ControlaUsuario
$controlaUser = new ControlaUsuario($conexao, $loginUsuario, $senhaUsuario, $emailUsuario, $nivelUsuario, 
	$nomeUsuario);
//chama a função de criar usuario
$controlaUser->createUsuario();

?>