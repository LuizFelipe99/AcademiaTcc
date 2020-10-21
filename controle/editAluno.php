
<?php
//chamei a classe login que com ela vem a classe conexao e usuario
require "classes/aluno_class.php";

$idAluno = $_POST['id'];

echo $idAluno;

//Instancia a classe usuario passando $conexao, $login, $senha, $email, $nivel por parametro
$alunoClass = new Aluno();
//Seta os valores na classe aluno, vindos do front-end
$alunoClass->__set('nomeAluno', $_POST['nomeAluno']);
$alunoClass->__set('idadeAluno', $_POST['idadeAluno']);
$alunoClass->__set('tel1Aluno', $_POST['tel1Aluno']);
$alunoClass->__set('tel2Aluno', $_POST['tel2Aluno']);
$alunoClass->__set('ruaAluno', $_POST['ruaAluno']);
$alunoClass->__set('bairroAluno', $_POST['bairroAluno']);
$alunoClass->__set('cidadeAluno', $_POST['cidadeAluno']);
$alunoClass->__set('sexoAluno', $_POST['sexoAluno']);
$alunoClass->__set('situacaoAluno', $_POST['situacaoAluno']);
$alunoClass->__set('personalAluno', $_POST['personalAluno']);
$alunoClass->__set('dataCad', $_POST['dataCad']);

//Recupera os valores da classe que serão usados 
$nomeAluno = $alunoClass->__get('nomeAluno');
$idadeAluno = $alunoClass->__get('idadeAluno');
$tel1Aluno = $alunoClass->__get('tel1Aluno');
$tel2Aluno = $alunoClass->__get('tel2Aluno');
$ruaAluno = $alunoClass->__get('ruaAluno');
$bairroAluno = $alunoClass->__get('bairroAluno');
$cidadeAluno = $alunoClass->__get('cidadeAluno');
$sexoAluno = $alunoClass->__get('sexoAluno');
$situacaoAluno = $alunoClass->__get('situacaoAluno');
$personalAluno = $alunoClass->__get('personalAluno');
$dataCad = $alunoClass->__get('dataCad');



//Instancia a classe conexao
$conexao = new Conexao();

// Insancia a classe ControlaUsuario
$controlaAluno = new ControlaAluno($conexao, $nomeAluno, $idadeAluno, $tel1Aluno, $tel2Aluno, $ruaAluno,
                         $bairroAluno, $cidadeAluno, $sexoAluno, $situacaoAluno, $personalAluno, $dataCad);
//chama a função de criar usuario
$controlaAluno->updateAluno($idAluno);

?>