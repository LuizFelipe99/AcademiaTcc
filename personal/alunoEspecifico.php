

<!-- ** IMPORTANTE ** -->
<!-- caso precise listar todos alunos esta aqui uma parte separada -->
<!-- ** IMPORTANTE ** -->

<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Matricula</th>
			<th scope="col">Nome</th>
			<th scope="col">Personal</th>
			<th scope="col">Contato</th>
			<th scope="col">Situação</th>
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
	if ($value->personalAluno == $usuario){
	

?>
<form method="POST" action="updateAluno.php">

	<tbody>
		<tr>
			<th scope="row"><input type="text" style="background-color: transparent; border-color: transparent;"name="nunmMatricula" class="form-control" size="1" value="<?php echo $value->idAluno;?>" readonly="ok"> </th>
				<td> 
					<input type="text" class="form-control" style="background-color: transparent; border-color: transparent;" name="nomeAluno" value="<?php echo $value->nomeAluno; ?>"readonly="ok"> 
				</td>

				<td> 
					<input type="text" class="form-control" value="<?php echo $value->personalAluno; ?>" name="personalAluno" style="background-color: transparent; border-color: transparent;" readonly="ok"> 
				</td>

				<td> 
					<input type="text" name="tel1Aluno" style="background-color: transparent; border-color: transparent;" value="<?php echo $value->tel1Aluno; ?>" readonly="ok"> 
				 </td>

				<td> <input type="text" name="situacaoAluno" style="background-color: transparent; border-color: transparent;" value="<?php echo $value->situacaoAluno; ?>" readonly="ok" > </td>
				<td> <button type="submit" class="btn btn-success" >Visualizar</button> </td>
			</tr>



				<!-- gambiarrando para enviar os dados do aluno completo-->
				<input type="hidden" name="idadeAluno" value="<?php echo $value->idadeAluno;?>">
				<input type="hidden" name="tel2Aluno" value="<?php echo $value->tel2Aluno;?>">
				<input type="hidden" name="ruaAluno" value="<?php echo $value->ruaAluno;?>">
				<input type="hidden" name="bairroAluno" value="<?php echo $value->bairroAluno;?>">
				<input type="hidden" name="cidadeAluno" value="<?php echo $value->cidadeAluno;?>">
				<input type="hidden" name="sexoAluno" value="<?php echo $value->sexoAluno;?>">
				<input type="hidden" name="dataCad" value="<?php echo $value->dataCad;?>">

		</tbody>
		</form>
<?php


}// fechando foreach
//fechadno if
}
?>
</table>

