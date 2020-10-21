<?php
class Conexao {
	private $host = 'localhost';
	private $db_name = 'tcc01';
	private $user = 'root';
	private $pass = '';

	public function conectar() {
		try {
				$conexao = new PDO(
					"mysql:host=$this->host;dbname=$this->db_name", //Primeiro parametro host, nome do banco
					"$this->user", // Referencia o usario, atraves do atributo do objeto
					"$this->pass" // Referencia a senha, atraves da senha do objeto
				);
				return $conexao;
		}catch(PDOException $e) { //PDO recebe o erro ($e) por parametro e exibe através do getMessage
				echo '<p>' . $e->getMessage() . '</p>';
			}
		}
}

?>