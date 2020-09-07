	

<!-- ** IMPORTANTE ** -->
<!-- caso precise listar todos alunos esta aqui uma parte separada -->
<!-- ** IMPORTANTE ** -->

<table class="table table-borderless">
	<thead class="">
		<tr>
			<th scope="col"><b>Nome</th>
			<th scope="col"><b>Situação</th>
			<th scope="col"></th>
		</tr>
	</thead> 

	<?php

// incluindo conexao
include "controle/classes/conexao_class.php";
//incluindo alunos
include "controle/classes/aluno_class.php";
$alunoClass = new Aluno();
//Recupera os valores da classe que serão usados na função logar
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


$conexao = new Conexao();
$listaAluno = new ControlaAluno($conexao, $nomeAluno, $idadeAluno, $tel1Aluno, $tel2Aluno, $ruaAluno,
$bairroAluno, $cidadeAluno, $sexoAluno, $situacaoAluno,  $personalAluno, $dataCad);
$listaAluno->readAluno();
foreach ($_SESSION['dados'] as $key => $value) {
	#checagem se o nome do personal é igual o do usuario logado
	if ($value->situacaoAluno == "OK"){
	

?>

	<tbody>
		<tr>
			<td style="color: black;" ><?php echo $value->nomeAluno; ?></td>
			<td style="color: black;" ><?php echo $value->situacaoAluno; ?></td>
		</tr>

	</tbody>


<?php


}// fechando foreach
//fechadno if
}
?>
</table>
