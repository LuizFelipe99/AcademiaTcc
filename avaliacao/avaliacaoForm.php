
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>






<div class="card">
  <h5 class="card-header" style="text-align: center;" >Avaliação</h5>
  <div class="card-body">
    <form>
	<div class="form-row">
		<div class="form-group col-md-6">
			<label for="avaliador" >Avaliador</label>
			<input type="text" name="avaliador" id="avaliador" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="avaliado">Avaliado</label>
			<input type="text" name="avaliador" id="avaliado" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label for="dataNasc">Data de nascimento</label>
			<input type="date" name="dataNasc" id="dataNasc" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label for="peso">Peso (kg)</label>
			<input type="number" name="peso" id="peso" class="form-control">
		</div>

		<div class="form-group col-md-2">
			<label for="altura">Altura (cm)</label>
			<input type="number" name="altura" id="altura" class="form-control">
		</div>

		<div class="form-group col-md-6">
			<label for="historico">Hisotrico Clinico</label>
			<input type="text" name="historico" id="historico" class="form-control">
		</div>
	</div>

	<!-- começando os PERIMETROS-->
	<hr>
	 <h5 class="card-header" style="text-align: center;" >Perímetros</h5>


<img class="imageBody"  src="../image/corpo.png">
	
	<div class="container " >


	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="antebracoD">Antebraço Direito</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1  ladoEsquerdo" >
			<label for="braco">Antebraço Esquerdo</label>
			<input type="number" name="braco" id="braco" class="form-control " >
		</div>
	</div>

	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="antebracoD">Braço Direito</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1 ladoEsquerdo " >
			<label for="braco">Braço Esquerdo</label>
			<input type="number" name="braco" id="braco" class="form-control " >
		</div>
	</div>


	<div class="form-row">			
		<div class="form-group col-md-1">
			<label for="antebracoD">Torax</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1  ">
			<label for="antebracoD">Cintura</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>
	</div>


	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="antebracoD">Abdomen</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1  ">
			<label for="antebracoD">Quadril</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>
	</div>

	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="antebracoD">Coxa Direita</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1 ladoEsquerdo ">
			<label for="antebracoD">Coxa Esquerda</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>
	</div>

	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="antebracoD">Panturrilha Direita</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>

		<div class="form-group col-md-1 ladoEsquerdo ">
			<label for="antebracoD">Panturrilha Esquerda</label>
			<input type="number" name="antebracoD" id="antebracoD" class="form-control">
		</div>
	</div>

	</div>

<br><br><br><br><br><br>
	 <h5 class="card-header" style="text-align: center;" >Composição Corporal</h5>
		
	 <div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="subescapular">Subescapular</label>
			<input type="number" name="subescapular" id="subescapular" class="form-control">
		</div>

		<div class="form-group col-md-1">
			<label for="tricipital">Tricipital</label>
			<input type="number" name="tricipital" id="tricipital" class="form-control">
		</div>

		<div class="form-group col-md-1 ">
			<label for="peitoral">Peitoral</label>
			<input type="number" name="peitoral" id="peitoral" class="form-control">
		</div>	

<!-- colocando na coluna do " meio " -->
		<div class="form-group col-md-2 meio ">
			<label for="gorduraTot"><b>Gordura Total</b></label>
			<input type="number" name="gorduraTot" id="gorduraTot"   class="form-control">
		</div>		

		<div class="form-group col-md-4 meio ">
			<label for="gorduraTot"><b>Observação</b></label>
			<input type="number" name="gorduraTot" id="gorduraTot"   class="form-control">
		</div>		
				
	</div>

	<div class="form-row">	

		<div class="form-group col-md-1 ">
			<label for="coxa">Coxa</label>
			<input type="number" name="coxa" id="coxa" class="form-control">
		</div>				
		<div class="form-group col-md-1">
			<label for="abdominal">Abdominal</label>
			<input type="number" name="abdominal" id="abdominal" class="form-control">
		</div>

		<div class="form-group col-md-1  ">
			<label for="axMedia">Axiliar Med.</label>
			<input type="number" name="axMedia" id="axMedia" class="form-control">
		</div>
		<!-- colocando na coluna do "meio" -->
		<div class="form-group col-md-2 meio ">
			<label for="Gpct"><b>%G</b></label>
			<input type="number" name="Gpct" id="Gpct" class="form-control">
		</div>

		<div class="form-group col-md-4 meio ">
			<label for="gorduraTot"><b>Observação</b></label>
			<input type="number" name="gorduraTot" id="gorduraTot"   class="form-control">
		</div>	
									
	</div>

	<div class="form-row">			
		<div class="form-group col-md-1  ">
			<label for="coxaSup">Coxa Sup.</label>
			<input type="number" name="coxaSup" id="coxaSup" class="form-control">
		</div>

		<div class="form-group col-md-1">
			<label for="coxaMed">Coxa Media</label>
			<input type="number" name="coxaMed" id="coxaMed" class="form-control">
		</div>

		<div class="form-group col-md-1  ">
			<label for="supraIli">Supra Iliaca</label>
			<input type="number" name="supraIli" id="supraIli"  class="form-control">
		</div>		

			<!-- colocando na coluna do "meio" -->
		<div class="form-group col-md-2 meio ">
			<label for="pesoMagr"><b>Peso Magro</b></label>
			<input type="number" name="pesoMagr" id="pesoMagr" class="form-control">
		</div>		


		<div class="form-group col-md-4 meio ">
			<label for="gorduraTot"><b>Observação</b></label>
			<input type="number" name="gorduraTot" id="gorduraTot"   class="form-control">
		</div>			
	</div>


</form>








		

</body>
</html>




