
<?php
// incluindo conexao
include "controle/classes/conexao_class.php";
//incluindo alunos
include "controle/classes/usuario_class.php";

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

<!-- script de limparcampos -->


<script type="text/javascript">
	function limpa() {
	if(document.getElementById('nomeAluno').value!="") {
		document.getElementById('nomeAluno').value="";
		document.getElementById('idadeAluno').value="";
		document.getElementById('alunoTel1').value="";
		document.getElementById('alunoTel2').value="";
		document.getElementById('enderecoAluno').value="";
		document.getElementById('bairroAluno').value="";
		document.getElementById('cidadeAluno').value="";
		document.getElementById('selectSexo').value="SELECIONE";
	}

}


    	
// INICIO FUNÇÃO DE MASCARA MAIUSCULA
function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
//FIM DA FUNÇÃO MASCARA MAIUSCULA
</script>
<form method="POST" name="alunoForm" action="../controle/createAluno.php">
	<div class="form-row">
		<div class="form-group col-md-10">
			<label for="nomeAluno">Nome</label>
			<input type="text" class="form-control" required name="nomeAluno" id="nomeAluno" placeholder="Nome do aluno"  onkeyup="maiuscula(this)">
		</div>

		<div class="form-group col-md-2">
			<label for="idade">Idade</label>
			<input type="text" class="form-control" required name="idadeAluno" id="idadeAluno" placeholder="18"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-6">
			<label for="tel1Aluno">Telefone 1</label>
			<input type="text" class="form-control" required name="tel1Aluno" id="tel1Aluno" placeholder="(11) 00000-9999">
		</div>    
		<div class="form-group col-md-6">
			<label for="tel2Aluno">Telefone 2</label>
			<input type="text" class="form-control" required name="tel2Aluno" id="tel2Aluno" placeholder="(11) 00000-9999">
		</div>
		<div class="form-group col-md-7">
			<label for="ruaAluno">Endereço</label>
			<input type="text" class="form-control" required name="ruaAluno" id="ruaAluno" placeholder="R. Belo Horizonte n° 78"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-5" >
			<label for="bairroAluno" >Bairro</label>
			<input type="text" class="form-control" required name="bairroAluno" id="bairroAluno" placeholder="Centro"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7" >
			<label for="cidadeAluno" >Cidade</label>
			<input type="text" class="form-control" required name="cidadeAluno" id="cidadeAluno" placeholder="Manhuaçu"onkeyup="maiuscula(this)">
		</div>						
		<div class="form-group col-md-5">
			<label for="selectSexo">Sexo</label>
			<select id="selectSexo" name="sexoAluno" required class="form-control">
				<option selected>SELECIONE</option>
				<option>MASCULINO</option>
				<option>FEMININO</option>
				<option>OUTRO</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="selectSituacao">Situação</label>
			<select id="selectSituacao" required name="situacaoAluno" class="form-control">
				<option selected>OK</option>
				<option>NÃO</option>
			</select>
		</div>

		<div class="form-group col-md-3">
			<label for="personalAluno">Personal</label>
			<select id="personalAluno"required  name="personalAluno" class="form-control">
				<?php
				foreach ($_SESSION['dados'] as $key => $value) {

				?>
				<option><?php echo $value->loginUsuario; ?></option>

				<?php
			}?>
			<option>OUTROS</option>
			</select>
		</div>
		<div class="form-group col-md-3" >
			<label for="dataCad" >Data de Criação</label>
			<input type="text" class="form-control" name="dataCad" id="dataCad" value="<?php echo date("d/m/Y"); ?>">
		</div>	


		
	</div>
		<!-- BOTOES DE SALVAR E LIMPAR O FORMULARIO -->
		<button type="submit" class="btn btn-success" onclick="verificaVazio()">Salvar</button>
		<button type="button" class="btn btn-warning" onclick="limpa()" >Limpar</button>						
</form>	