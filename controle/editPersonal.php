
<?php
//chamei a classe login que com ela vem a classe conexao e usuario
require "classes/personal_class.php";

$idPersonal = $_POST['idPersonal'];



//Instancia a classe usuario passando $conexao, $login, $senha, $email, $nivel por parametro
$personalClass = new Personal();
//Seta os valores na classe aluno, vindos do front-end
$personalClass->__set('nomePersonal', $_POST['nomePersonal']);
$personalClass->__set('idadePersonal', $_POST['idadePersonal']);
$personalClass->__set('tel1Personal', $_POST['tel1Personal']);
$personalClass->__set('tel2Personal', $_POST['tel2Personal']);
$personalClass->__set('ruaPersonal', $_POST['ruaPersonal']);
$personalClass->__set('bairroPersonal', $_POST['bairroPersonal']);
$personalClass->__set('cidadePersonal', $_POST['cidadePersonal']);
$personalClass->__set('sexoPersonal', $_POST['sexoPersonal']);
$personalClass->__set('formacaoPersonal', $_POST['formacaoPersonal']);


//Recupera os valores da classe que serão usados 
$nomePersonal = $personalClass->__get('nomePersonal');
$idadePersonal = $personalClass->__get('idadePersonal');
$tel1Personal = $personalClass->__get('tel1Personal');
$tel2Personal = $personalClass->__get('tel2Personal');
$ruaPersonal = $personalClass->__get('ruaPersonal');
$bairroPersonal = $personalClass->__get('bairroPersonal');
$cidadePersonal = $personalClass->__get('cidadePersonal');
$sexoPersonal = $personalClass->__get('sexoPersonal');
$formacaoPersonal = $personalClass->__get('formacaoPersonal');



//Instancia a classe conexao
$conexao = new Conexao();

// Insancia a classe ControlaUsuario
$controlaPersonal = new ControlaPersonal($conexao, $nomePersonal, $idadePersonal, $tel1Personal, $tel2Personal,  
									    $ruaPersonal, $bairroPersonal, $cidadePersonal, $sexoPersonal, 
									    $formacaoPersonal);
//chama a função de criar usuario
$controlaPersonal->updatePersonal($idPersonal);

?>