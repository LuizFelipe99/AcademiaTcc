<?php
//chamando a conexao
require_once "conexao_class.php";

//classe de usuario
class Usuario {
	public $loginUsuario;
	public $senhaUsuario;
	public $emailUsuario;
	public $nivelUsuario;
	public $nomeUsuario;

	//função que retorna o atributo desejado
	public function __get($atributo) {
			return $this->$atributo;
		}
	//função que seta no atributo desejado o valor desejado
	public function __set($atributo, $valor) {
			return $this->$atributo = $valor;
		}	
} 


// ignorar daqui pra baixo
class ControlaUsuario{
	public $conexao;
	public $loginUsuario;
	public $senhaUsuario;
	public $emailUsuario;
	public $nivelUsuario;
	public $nomeUsuario;

//Função construtora
public function __construct($conexao, $loginUsuario, $senhaUsuario, $emailUsuario, $nivelUsuario, $nomeUsuario) {
	$this->conexao = $conexao->conectar();
	$this->loginUsuario = $loginUsuario;
	$this->senhaUsuario = $senhaUsuario;
	$this->emailUsuario = $emailUsuario;
	$this->nivelUsuario = $nivelUsuario; 
	$this->nomeUsuario = $nomeUsuario;
}

	
	public function createUsuario(){
		$query = "INSERT INTO usuario (idUsuario, loginUsuario, senhaUsuario,
									   emailUsuario, nivelUsuario, nomeUsuario)
							VALUES (null, :loginUsuario, :senhaUsuario, :emailUsuario, :nivelUsuario, :nomeUsuario)";

		//prepara a query
		$stmt = $this->conexao->prepare($query);

		//seta os valores
		$stmt->bindValue(':loginUsuario', $this->loginUsuario);
		$stmt->bindValue(':senhaUsuario', $this->senhaUsuario);
		$stmt->bindValue(':emailUsuario', $this->emailUsuario);
		$stmt->bindValue(':nivelUsuario', $this->nivelUsuario);
		$stmt->bindValue(':nomeUsuario', $this->nomeUsuario);
		$stmt->execute();
		//redireciona para o painel adm
		header('location: ../../index.php');
		}

		public function readUser(){
			
			$query = "SELECT * FROM usuario";
			$stmt = $this->conexao->prepare($query);
			$stmt->execute();
		
			$_SESSION['dados'] = $stmt->fetchAll(PDO::FETCH_OBJ);

	}

}