<?php

class Conexao {

	private $host = 'host';
	private $dbname = 'nome_db';
	private $user = 'root';
	private $pass = 'pass';

	public function conectar() {
		try {

			$conexao = new PDO(
				"mysql:host=$this->host;dbname=$this->dbname",
				"$this->user",
				"$this->pass"				
			);

			return $conexao;


		} catch (PDOException $e) {
			echo '<p>'.$e->getMessege().'</p>';
		}
	}
}

?>