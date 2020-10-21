<?php

//chamando a conexao
require_once "conexao_class.php";

//classe de usuario
class Aluno {
	public $nomeAluno;
	public $idadeAluno;
	public $tel1Aluno;
	public $tel2Aluno;
	public $ruaAluno;
	public $bairroAluno;
	public $cidadeAluno;
	public $sexoAluno;
	public $situacaoAluno;
	public $personalAluno;
	public $conexao;
	public $dataCad;


	
	//função que retorna o atributo desejado
	public function __get($atributo) {
			return $this->$atributo;
		}
	//função que seta no atributo desejado o valor desejado
	public function __set($atributo, $valor) {
			return $this->$atributo = $valor;
		}	
}

class ControlaAluno{
	public $conexao;
	public $nomeAluno;
	public $idadeAluno;
	public $tel1Aluno;
	public $tel2Aluno;
	public $ruaAluno;
	public $bairroAluno;
	public $cidadeAluno;
	public $sexoAluno;
	public $situacaoAluno;
	public $personalAluno;
	public $dataCad;

		//Função construtora
public function __construct($conexao, $nomeAluno, $idadeAluno, $tel1Aluno, $tel2Aluno,
														$ruaAluno, $bairroAluno, $cidadeAluno, $sexoAluno, $situacaoAluno, $personalAluno, $dataCad) {
	$this->conexao = $conexao->conectar();
	$this->nomeAluno = $nomeAluno;
	$this->idadeAluno = $idadeAluno;
	$this->tel1Aluno = $tel1Aluno;
	$this->tel2Aluno = $tel2Aluno;
	$this->ruaAluno = $ruaAluno;
	$this->bairroAluno = $bairroAluno;
	$this->cidadeAluno = $cidadeAluno;
	$this->sexoAluno = $sexoAluno;
	$this->situacaoAluno = $situacaoAluno;
	$this->personalAluno = $personalAluno;
	$this->dataCad = $dataCad;


}

	public function createAluno(){
		$query = "INSERT INTO aluno (idAluno, nomeAluno, idadeAluno, tel1Aluno, tel2Aluno, ruaAluno,
				 													bairroAluno, cidadeAluno, sexoAluno, situacaoAluno, personalAluno)
							VALUES (null, :nomeAluno, :idadeAluno, :tel1Aluno, :tel2Aluno, :ruaAluno,
							 :bairroAluno, :cidadeAluno, :sexoAluno, :situacaoAluno, :personalAluno)";

		//prepara a query
		$stmt = $this->conexao->prepare($query);

		//seta os valores
		$stmt->bindValue(':nomeAluno', $this->nomeAluno);
		$stmt->bindValue(':idadeAluno', $this->idadeAluno);
		$stmt->bindValue(':tel1Aluno', $this->tel1Aluno);
		$stmt->bindValue(':tel2Aluno', $this->tel2Aluno);
		$stmt->bindValue(':ruaAluno', $this->ruaAluno);
		$stmt->bindValue(':bairroAluno', $this->bairroAluno);
		$stmt->bindValue(':cidadeAluno', $this->cidadeAluno);
		$stmt->bindValue(':sexoAluno', $this->sexoAluno);
		$stmt->bindValue(':situacaoAluno', $this->situacaoAluno);
		$stmt->bindValue(':personalAluno', $this->personalAluno);

		
		$stmt->execute();
		header('location: ../aluno.php');
	}

	public function readAluno(){
			
			$query = "SELECT * FROM aluno";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
		
			$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);

	}

	public function searchAluno(){
		$query = "SELECT * FROM aluno WHERE nomeAluno LIKE '%".$this->nomeAluno."%' ";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);
		header("location:../../busca.php");
	}

	//Função editar aluno
	public function updateAluno($idAluno) {
		$query = "UPDATE aluno SET nomeAluno = :nomeAluno, idadeAluno = :idadeAluno,
								   tel1Aluno = :tel1Aluno, tel2Aluno = :tel2Aluno,
								   ruaAluno = :ruaAluno, bairroAluno = :bairroAluno,
								   cidadeAluno = :cidadeAluno, sexoAluno = :sexoAluno,
								   situacaoAluno = :situacaoAluno, personalAluno =  :personalAluno
								   WHERE idAluno = $idAluno ";
		$stmt = $this->conexao->prepare($query);
		//seta os valores	
		$stmt->bindValue(':nomeAluno', $this->nomeAluno);
		$stmt->bindValue(':idadeAluno', $this->idadeAluno);
		$stmt->bindValue(':tel1Aluno', $this->tel1Aluno);
		$stmt->bindValue(':tel2Aluno', $this->tel2Aluno);
		$stmt->bindValue(':ruaAluno', $this->ruaAluno);
		$stmt->bindValue(':bairroAluno', $this->bairroAluno);
		$stmt->bindValue(':cidadeAluno', $this->cidadeAluno);
		$stmt->bindValue(':sexoAluno', $this->sexoAluno);
		$stmt->bindValue(':situacaoAluno', $this->situacaoAluno);
		$stmt->bindValue(':personalAluno', $this->personalAluno);

		$stmt->execute();

		// redirencionando para a parte de edição
		header('location: ../listAluno.php');
	}

	public function alunoPersonal(){
		$query = "SELECT * FROM aluno WHERE personalAluno LIKE '%".$this->personalAluno."%' ";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);
		header("location:../../busca.php");
	}
	
}