


<?php

//recebendo os dados vindos do front
$idAluno = $_POST['nunmMatricula'];
$nomeAluno = $_POST['nomeAluno'];
$personalAluno = $_POST['personalAluno'];
$tel1Aluno = $_POST['tel1Aluno'];
$situacaoAluno = $_POST['situacaoAluno'];
$idadeAluno = $_POST['idadeAluno'];
$tel2Aluno = $_POST['tel2Aluno'];
$ruaAluno = $_POST['ruaAluno'];
$bairroAluno = $_POST['bairroAluno'];
$cidadeAluno = $_POST['cidadeAluno'];
$sexoAluno = $_POST['sexoAluno'];
$dataCad = $_POST['dataCad'];



// instanciando e chamando a função de selecionar os personal para colocar na select

// incluindo conexao
include "controle/classes/conexao_class.php";
//incluindo personal
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


?>
<!-- função para deixar texto grande-->
<script type="text/javascript">
	function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }


</script>

<form method="POST" name="alunoForm" action="../controle/editAluno.php">
	<input type="hidden" name="id"  value="<?php echo $idAluno;?>">
	<div class="form-row">
		<div class="form-group col-md-10">
			<label for="nomeAluno">Nome</label>
			<input type="text" class="form-control" name="nomeAluno" id="nomeAluno" placeholder="Nome do aluno" value="<?php echo$nomeAluno;?>"  onkeyup="maiuscula(this)">
		</div>

		<div class="form-group col-md-2">
			<label for="idade">Idade</label>
			<input type="text" class="form-control" name="idadeAluno" id="idadeAluno" placeholder="18" value="<?php echo$idadeAluno;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-6">
			<label for="tel1Aluno">Telefone 1</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel1Aluno" id="tel1Aluno" placeholder="(11) 00000-9999" value="<?php echo$tel1Aluno;?>" >
		</div>    
		<div class="form-group col-md-6">
			<label for="tel2Aluno">Telefone 2</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel2Aluno" id="tel2Aluno" placeholder="(11) 00000-9999" value="<?php echo$tel2Aluno;?>">
		</div>
		<div class="form-group col-md-7">
			<label for="ruaAluno">Endereço</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="ruaAluno" id="ruaAluno" placeholder="R. Belo Horizonte n° 78" value="<?php echo$ruaAluno;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-5" >
			<label for="bairroAluno" >Bairro</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="bairroAluno" id="bairroAluno" placeholder="Centro" value="<?php echo$bairroAluno;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7" >
			<label for="cidadeAluno" >Cidade</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="cidadeAluno" id="cidadeAluno" placeholder="Manhuaçu" value="<?php echo$cidadeAluno;?>" onkeyup="maiuscula(this)">
		</div>						
		<div class="form-group col-md-5">
			<label for="selectSexo">Sexo</label>
			<select id="selectSexo" name="sexoAluno" class="form-control">
				<option selected><?php echo$sexoAluno;?></option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="selectSituacao">Situação</label>
			<select id="selectSituacao" name="situacaoAluno" class="form-control">
				<option selected>OK</option>
				<option>NÃO</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="personalAluno">Personal</label>
			<select id="personalAluno" name="personalAluno" class="form-control">

					<option selected><?php echo $personalAluno; ?></option>
				<?php
				#iniciando PHP para preencher o combobox com os nomes do persnal cadastrado
				foreach ($_SESSION['dados'] as $key => $value) {

				?>
				<option><?php echo $value->nomePersonal; ?></option>

				<?php
				#fechando foreach
					}
				?>
			</select>
		</div>
		<div class="form-group col-md-3" >
			<label for="dataCad" >Data de Criação</label>
			<input type="text" readonly="true" class="form-control" name="dataCad" id="dataCad" value="<?php echo $dataCad;?>" >
		</div>	
	</div>


		<!-- BOTOES DE SALVAR E LIMPAR O FORMULARIO -->
		<button type="submit" class="btn btn-success">Salvar</button>
		<button type="button" class="btn btn-warning" onclick="limpa()" >Limpar</button>						
</form>	

<?php

#fechano foreach
#}
?>