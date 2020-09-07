<?php

$id = $_POST['nunmMatricula'];
echo '</br>'.$id;


?>

<form method="POST" name="alunoForm" action="../controle/createAluno.php">
	<div class="form-row">
		<div class="form-group col-md-10">
				<label for="nomeAluno">Nome</label>
			<input type="text" class="form-control" name="nomeAluno" id="nomeAluno" placeholder="Nome do aluno"  onkeyup="maiuscula(this)">
		</div>

		<div class="form-group col-md-2">
			<label for="idade">Idade</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="idadeAluno" id="idadeAluno" placeholder="18"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-6">
			<label for="tel1Aluno">Telefone 1</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel1Aluno" id="tel1Aluno" placeholder="(11) 00000-9999">
		</div>    
		<div class="form-group col-md-6">
			<label for="tel2Aluno">Telefone 2</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="tel2Aluno" id="tel2Aluno" placeholder="(11) 00000-9999">
		</div>
		<div class="form-group col-md-7">
			<label for="ruaAluno">Endereço</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="ruaAluno" id="ruaAluno" placeholder="R. Belo Horizonte n° 78"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-5" >
			<label for="bairroAluno" >Bairro</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="bairroAluno" id="bairroAluno" placeholder="Centro"onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7" >
			<label for="cidadeAluno" >Cidade</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="cidadeAluno" id="cidadeAluno" placeholder="Manhuaçu"onkeyup="maiuscula(this)">
		</div>						
		<div class="form-group col-md-5">
			<label for="selectSexo">Sexo</label>
			<select id="selectSexo" name="sexoAluno" class="form-control">
				<option selected>SELECIONE</option>
				<option>MASCULINO</option>
				<option>FEMININO</option>
				<option>OUTRO</option>
			</select>
		</div>
		<div class="form-group col-md-3">
			<label for="selectSituacao">Situação</label>
			<select id="selectSituacao" name="situacaoAluno" class="form-control">
				<option selected>OK</option>
				<option>NÃO</option>
			</select>
		</div>
		<div class="form-group col-md-5" >
			<label for="personalAluno" >Personal</label>
			<input type="text" class="form-control" style="text-transform:uppercase;" name="personalAluno" id="personalAluno" placeholder="PERSONAL"onkeyup="maiuscula(this)">
		</div>
	</div>
		<!-- BOTOES DE SALVAR E LIMPAR O FORMULARIO -->
		<button type="submit" class="btn btn-success">Salvar</button>
		<button type="button" class="btn btn-warning" onclick="limpa()" >Limpar</button>						
</form>	