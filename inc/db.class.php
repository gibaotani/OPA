<?php
include_once "defs.inc.php";
require_once "DBException.class.php";

// Herda todos os atributos e métodos da classe mysqli (http://php.net/manual/en/book.mysqli.php)
class db extends mysqli {
	
	// Customizando o construtor para _encapsular_ os dados da conexão
	function __construct()
	{
		// Chama o construtor do pai (mysqli) com os parâmetros requeridos
		parent::__construct(DB_HOST,DB_USER,DB_PASS,DB_DB);
		
		// Tratamento de erros de conexão, seleção de DB e outros
		if (mysqli_connect_error()) {
	        throw new DBException('Connect Error (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());    
        }
	}
}//Fim da classe
?>