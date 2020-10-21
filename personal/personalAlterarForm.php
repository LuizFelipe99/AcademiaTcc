


<?php


// instanciando e chamando a função de selecionar os personal para colocar na select

// incluindo conexao
include "controle/classes/conexao_class.php";

//incluindo alunos
include "controle/classes/usuario_class.php";
//recebendo os dados vindos do front

$idPersonal = $_POST['idPersonal'];
$nomePersonal = $_POST['nomePersonal'];
$idadePersonal = $_POST['idadePersonal'];
$tel1Personal = $_POST['tel1Personal'];
$formacaoPersonal = $_POST['formacaoPersonal'];
# os que nao foram exibidos
$tel2Personal = $_POST['tel2Personal'];
$ruaPersonal = $_POST['ruaPersonal'];
$bairroPersonal = $_POST['bairroPersonal'];
$cidadePersonal = $_POST['cidadePersonal'];
$sexoPersonal = $_POST['sexoPersonal'];




$userClass = new Usuario();
//Recupera os valores da classe 
$loginUsuario = $userClass->__get('loginUsuario');
$senhaUsuario = $userClass->__get('senhaUsuario');
$emailUsuario = $userClass->__get('emailUsuario');
$nivelUsuario = $userClass->__get('nivelUsuario');
$nomeUsuario = $userClass->__get('nomeUsuario');


$conexao = new Conexao();

$listaUser = new ControlaUsuario($conexao, $loginUsuario, $senhaUsuario, $emailUsuario, $nivelUsuario, $nomeUsuario);

$listaUser->readUser();


?>
<!-- função para deixar texto grande-->
<script type="text/javascript">
	function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }


</script>

<form method="POST" name="personalForm" action="../controle/editPersonal.php">
	<input type="hidden" name="idPersonal"  value="<?php echo $idPersonal;?>">
	<div class="form-row">
		<div class="form-group col-md-10">
			<label for="nomePersonal">Nome</label>
			<input type="text" class="form-control" name="nomePersonal" id="nomePersonal" placeholder="Nome do aluno" value="<?php echo$nomePersonal;?>"  onkeyup="maiuscula(this)">
		</div>

		<div class="form-group col-md-2">
			<label for="idade">Idade</label>
			<input type="text" class="form-control" name="idadePersonal" id="idadePersonal" placeholder="18" value="<?php echo$idadePersonal;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-6">
			<label for="tel1Personal">Telefone 1</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel1Personal" id="tel1Personal" placeholder="(11) 00000-9999" value="<?php echo$tel1Personal;?>" >
		</div>    
		<div class="form-group col-md-6">
			<label for="tel2Personal">Telefone 2</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel2Personal" id="tel2Personal" placeholder="(11) 00000-9999" value="<?php echo$tel2Personal;?>">
		</div>
		<div class="form-group col-md-7">
			<label for="ruaPersonal">Endereço</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="ruaPersonal" id="ruaPersonal" placeholder="R. Belo Horizonte n° 78" value="<?php echo$ruaPersonal;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-5" >
			<label for="bairroPersonal" >Bairro</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="bairroPersonal" id="bairroPersonal" placeholder="Centro" value="<?php echo$bairroPersonal;?>" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7" >
			<label for="cidadePersonal" >Cidade</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="cidadePersonal" id="cidadePersonal" placeholder="Manhuaçu" value="<?php echo$cidadePersonal;?>" onkeyup="maiuscula(this)">
		</div>						
		<div class="form-group col-md-5">
			<label for="selectSexo">Sexo</label>
			<select id="selectSexo" name="sexoPersonal" class="form-control">
				<option selected><?php echo$sexoPersonal;?></option>
			</select>
		</div>
		<div class="form-group col-md-7" >
			<label for="formacaoPersonal" >Formação</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="formacaoPersonal" id="formacaoPersonal" placeholder="Manhuaçu" value="<?php echo$formacaoPersonal;?>" onkeyup="maiuscula(this)">
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