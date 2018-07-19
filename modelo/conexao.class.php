<?php
	/**
	 * A��es de banco de dados (acesso, valida��o, etc.)
	 * @autor Original: Janson Lengstorf
	 * @livro:Pro PHP e jQuery
	 * @arquivo modificado
	*/
	abstract class conexao {
		protected $db;
		
		protected function __construct()
		{
			$dsn="mysql:host=localhost;dbname=turismo";
			try
			{
				$this->db = new PDO($dsn, "root", "");
			}
			catch ( Exception $e )
			{
				die ($e->getMessage());
			}
		}
	}
?>