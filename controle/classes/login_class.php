<?php
//Trazendo a pagina de conexao
require_once "conexao_class.php";
//Trazendo a classe usuario
require_once "usuario_class.php";

//Classe de login
class Login {
	private $conexao; //atributo que recebe a conexao
 	private $loginUsuario; //atributo que recebe o nome de usuario
 	private $senhaUsuario; //atributo que recebe a senha
 	//Função construtora que recebe conexao, user e senha;
 	public function __construct($conexao, $loginUsuario, $senhaUsuario) {
 		$this->conexao = $conexao->conectar();
 		$this->loginUsuario = $loginUsuario;
 		$this->senhaUsuario = $senhaUsuario;
	}
	//Função logar
	public function logar(){
		//Verifica se existe algum registro no banco em que usuario e senha são iguais aos encaminhados
		$query = "SELECT idUsuario,loginUsuario,senhaUsuario,nivelUsuario FROM usuario
							WHERE loginUsuario = :loginUsuario 
							AND senhaUsuario = :senhaUsuario";
		$stmt = $this->conexao->prepare($query);
		$stmt->bindValue(':loginUsuario', $this->loginUsuario);
		$stmt->bindValue(':senhaUsuario', $this->senhaUsuario);
		$stmt->execute();
		//se alguma linha for afetada na consulta, significa que deu certo
		if($stmt->rowCount() == 1) {
			//linha retornada da consulta
			$dados = $stmt->fetch(PDO::FETCH_ASSOC);
			//starta a sessao
			session_start();
			$_SESSION['loginUsuario'] = $dados['loginUsuario'];
			$_SESSION['nivelUsuario'] = $dados['nivelUsuario'];
			//Redireciona o usuario		
			header('location:../../home.php');
		}else {
			//Redireciona para a index novamente para login
			$_SESSION['messageError'] = '<p> Dados Invalidos </p>';
 			header('location:../../index.php');
			
		}
	}
}
?>