<?php 
require_once "sysException.class.php";

// Exception customizada para erros de DB. 
class DBException extends sysException {
	function __construct($msg = null, $codigo = 0) {
		parent::__construct($msg, $codigo);
		// TODO Emitir aviso por e-mail para o DBA responsável.
	}
}