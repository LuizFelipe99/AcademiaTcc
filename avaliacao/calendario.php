<?php

// incluindo conexao
include "controle/classes/conexao_class.php";
//incluindo alunos
include "controle/classes/aluno_class.php";

$alunoClass = new Aluno();
//Recupera os valores da classe 
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

?>


<html>
<head>

</head>
<body>



<div class="row">
  <div class="col-sm-5  ">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Agendar Aluno</h5>
        <form method="POST" action="" name="agendaAluno">
        	<div class="form-row">

						<div class="form-group col-md-5">
							<label for="dataAvaliacao" >Data</label>
							<input type="date" name="dataAvaliacao" id="dataAvaliacao" class="form-control">
						</div>
						<div class="form-group col-md-5">
							<label for="horaAvaliacao" >Hora</label>
							<input type="time" name="horaAvaliacao" id="horaAvaliacao" class="form-control">
						</div>

						<div class="form-group col-md-12">                       
              <input type="text" name="teste" class="form-control" list="teste">
              <datalist id="teste" >
                <?php
                  #iniciando PHP para preencher o combobox com os nomes do persnal cadastrado
                  foreach ($_SESSION['dados'] as $key => $value) {
                ?>
                <option><?php
                          echo $value->nomeAluno;
                          #fechando foreach
                          }
                          ?> 
                </option>
              </datalist>
              
  					</div>
						<button type="submit" class="btn btn-success">Verificar Disponibilidade</button>

					</div>       	
        </form>   

      </div>
    </div>
  </div>
  <div class="col-sm-7">
    <div class="card">
      <div class="card-body">

        <div id='calendar'></div>

      </div>
    </div>
  </div>
</div>


</body>
</html>

<?php
#fechando foreach

?>