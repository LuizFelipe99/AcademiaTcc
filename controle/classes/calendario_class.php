<?php

//chamando a conexao
require_once "conexao_class.php";

//classe de usuario
class Personal {
  public $nomePersonal;
  public $idadePersonal;
  public $tel1Personal;
  public $tel2Personal;
  public $ruaPersonal;
  public $bairroPersonal;
  public $cidadePersonal;
  public $sexoPersonal;
  public $formacaoPersonal;
	public $conexao;

	
	//função que retorna o atributo desejado
	public function __get($atributo) {
			return $this->$atributo;
		}
	//função que seta no atributo desejado o valor desejado
	public function __set($atributo, $valor) {
			return $this->$atributo = $valor;
		}	
}

class ControlaPersonal{
  public $conexao;
  public $nomePersonal;
  public $idadePersonal;
  public $tel1Personal;
  public $tel2Personal;
  public $ruaPersonal;
  public $bairroPersonal;
  public $cidadePersonal;
  public $sexoPersonal;
  public $formacaoPersonal;
		//Função construtora
public function __construct($conexao, $nomePersonal, $idadePersonal, $tel1Personal, $tel2Personal,
														$ruaPersonal, $bairroPersonal, $cidadePersonal, $sexoPersonal, $formacaoPersonal) {
	$this->conexao = $conexao->conectar();
	$this->nomePersonal = $nomePersonal;
	$this->idadePersonal = $idadePersonal;
	$this->tel1Personal = $tel1Personal;
	$this->tel2Personal = $tel2Personal;
	$this->ruaPersonal = $ruaPersonal;
	$this->bairroPersonal = $bairroPersonal;
	$this->cidadePersonal = $cidadePersonal;
	$this->sexoPersonal = $sexoPersonal;
	$this->formacaoPersonal = $formacaoPersonal;

}

	public function createPersonal(){
		$query = "INSERT INTO personal (idPersonal, nomePersonal, idadePersonal, tel1Personal, tel2Personal, ruaPersonal,
				 													bairroPersonal, cidadePersonal, sexoPersonal, formacaoPersonal)
							VALUES (null, :nomePersonal, :idadePersonal, :tel1Personal, :tel2Personal, :ruaPersonal,
							 :bairroPersonal, :cidadePersonal, :sexoPersonal, :formacaoPersonal)";

		//prepara a query
		$stmt = $this->conexao->prepare($query);

		//seta os valores
		$stmt->bindValue(':nomePersonal', $this->nomePersonal);
		$stmt->bindValue(':idadePersonal', $this->idadePersonal);
		$stmt->bindValue(':tel1Personal', $this->tel1Personal);
		$stmt->bindValue(':tel2Personal', $this->tel2Personal);
		$stmt->bindValue(':ruaPersonal', $this->ruaPersonal);
		$stmt->bindValue(':bairroPersonal', $this->bairroPersonal);
		$stmt->bindValue(':cidadePersonal', $this->cidadePersonal);
		$stmt->bindValue(':sexoPersonal', $this->sexoPersonal);
		$stmt->bindValue(':formacaoPersonal', $this->formacaoPersonal);
		
		$stmt->execute();
		header('location: ../../personalPanel.php');
		}

	public function readAluno(){
			
			$query = "SELECT * FROM personal";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
			$numeros = mysql_num_rows($stmt);
			$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);

	}

	public function searchPersonal(){
		$query = "SELECT * FROM aluno WHERE nomeAluno LIKE '%".$this->nomeAluno."%' ";
		$stmt = $this->conexao->prepare($query);
		$stmt->execute();
		$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);
	}
	
}