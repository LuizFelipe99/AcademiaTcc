<!-- script de limparcampos -->


<script type="text/javascript">
	function limpa() {
	if(document.getElementById('nomePersonal').value!="") {
		document.getElementById('nomePersonal').value="";
		document.getElementById('idadePersonal').value="";
		document.getElementById('tel1Personal').value="";
		document.getElementById('tel2Personal').value="";
		document.getElementById('ruaPersonal').value="";
		document.getElementById('bairroPersonal').value="";
		document.getElementById('cidadePersonal').value="";
    document.getElementById('selectSexo').value="SELECIONE";
    document.getElementById('formacaoPersonal').value = "";
	}

}

	function maiuscula(z){
        v = z.value.toUpperCase();
        z.value = v;
    }
</script>
<form method="POST" name="personalForm" action="../controle/createPersonal.php">
	<div class="form-row">
		<div class="form-group col-md-10">
			<label for="nomePersonal">Nome</label>
			<input type="text" class="form-control" name="nomePersonal" id="nomePersonal" placeholder="Nome do Personal"onkeyup="maiuscula(this)">
		</div>

		<div class="form-group col-md-2">
			<label for="idadePersonal">Idade</label>
			<input type="text" class="form-control" name="idadePersonal" id="idadePersonal" placeholder="25" on keyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-6">
			<label for="tel1Personal">Telefone 1</label>
			<input type="text" class="form-control" name="tel1Personal" id="tel1Personal" placeholder="(11) 00000-9999" onkeyup="maiuscula(this)">
		</div>    
		<div class="form-group col-md-6">
			<label for="tel2Personal">Telefone 2</label>
			<input type="text" class="form-control" name="tel2Personal" id="tel2Personal" placeholder="(11) 00000-9999" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7">
			<label for="ruaPersonal">Endereço</label>
			<input type="text" class="form-control"  name="ruaPersonal" id="ruaPersonal" placeholder="R. Belo Horizonte n° 78" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-5" >
			<label for="bairroPersonal" >Bairro</label>
			<input type="text" class="form-control" name="bairroPersonal" id="bairroPersonal" placeholder="Centro" onkeyup="maiuscula(this)">
		</div>
		<div class="form-group col-md-7" >
			<label for="cidadePersonal" >Cidade</label>
			<input type="text" class="form-control" st name="cidadePersonal" id="cidadePersonal" placeholder="Manhuaçu" onkeyup="maiuscula(this)">
		</div>						
		<div class="form-group col-md-5">
			<label for="selectSexo">Sexo</label>
			<select id="selectSexo" name="sexoPersonal" class="form-control">
				<option selected>SELECIONE</option>
				<option>MASCULINO</option>
				<option>FEMININO</option>
				<option>OUTRO</option>
			</select>
		</div>
		<div class="form-group col-md-12" >
			<label for="formacaoPersonal" >Formação</label>
			<input type="text" class="form-control" name="formacaoPersonal" id="formacaoPersonal" placeholder="Formação Academica" onkeyup="maiuscula(this)">
		</div>
	</div>
		<!-- BOTOES DE SALVAR E LIMPAR O FORMULARIO -->
		<button type="submit" class="btn btn-success">Salvar</button>
		<button type="button" class="btn btn-warning" onclick="limpa()" >Limpar</button>						
</form>	