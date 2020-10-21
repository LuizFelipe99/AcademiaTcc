
<!-- ** IMPORTANTE ** -->
<!-- caso precise listar todos alunos esta aqui uma parte separada -->
<!-- ** IMPORTANTE ** -->

<table class="table table-hover">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Matricula</th>
			<th scope="col">Nome</th>
			<th scope="col">Idade</th>
			<th scope="col">Contato</th>
			<th scope="col">Formação</th>
			<th scope="col"></th>
		</tr>
	</thead> 
<?php

// incluindo conexao
include "controle/classes/conexao_class.php";
//incluindo alunos
include "controle/classes/personal_class.php";

$personalClass = new Personal();
//Recupera os valores da classe 
$nomePersonal = $personalClass->__get('nomePersonal');
$idadePersonal = $personalClass->__get('idadePersonal');
$tel1Personal = $personalClass->__get('tel1Personal');
$tel2Personal = $personalClass->__get('tel2Personal');
$ruaPersonal = $personalClass->__get('ruaPersonal');
$bairroPersonal = $personalClass->__get('bairroPersonal');
$cidadePersonal = $personalClass->__get('cidadePersonal');
$sexoPersonal = $personalClass->__get('sexoPersonal');
$formacaoPersonal = $personalClass->__get('formacaoPersonal');




$conexao = new Conexao();

$listaPersonal = new ControlaPersonal($conexao, $nomePersonal, $idadePersonal, $tel1Personal, $tel2Personal, $ruaPersonal,$bairroPersonal,$cidadePersonal,$sexoPersonal, $formacaoPersonal);

$listaPersonal->readPersonal();

foreach ($_SESSION['dados'] as $key => $value) {



?>
<form method="POST" action="../updatePersonal.php">
	<?php
		$nome = $value->nomePersonal;
	?>
	<tbody>
		<tr>

			<th scope="row">
				<input type="text" name="idPersonal" class="form-control" size="1" value="<?php echo $value->idPersonal;?>" readonly="ok">
			</th>
			<td>
				<input type="text" style="background-color: transparent; border-color: transparent;" name="nomePersonal" value="<?php echo $value->nomePersonal; ?> " readonly="ok"> 
			</td>
			<td>
				<input type="text" style="background-color: transparent; border-color: transparent;" name="idadePersonal" value="<?php echo $value->idadePersonal; ?>"readonly="ok">
			</td>
			<td> 
				<input type="text" style="background-color: transparent; border-color: transparent;" name="tel1Personal" value="<?php echo $value->tel1Personal; ?>"readonly="ok">
			</td>
			<td> 
				<input type="text" style="background-color: transparent; border-color: transparent;" name="formacaoPersonal" value="<?php echo $value->formacaoPersonal; ?>"readonly="ok">
			</td>

				<!-- gambiarrando para enviar os dados do aluno completo-->
				<input type="hidden" name="tel2Personal" value="<?php echo $value->tel2Personal;?>">
				<input type="hidden" name="ruaPersonal" value="<?php echo $value->ruaPersonal;?>">
				<input type="hidden" name="bairroPersonal" value="<?php echo $value->bairroPersonal;?>">
				<input type="hidden" name="cidadePersonal" value="<?php echo $value->cidadePersonal;?>">
				<input type="hidden" name="sexoPersonal" value="<?php echo $value->sexoPersonal;?>">

				<td> <button type="submit" class="btn btn-success">Visualizar</button> </td>
			</tr>
		</tbody>
</form>
<?php
// fechando foreach
}
?>
</table>

