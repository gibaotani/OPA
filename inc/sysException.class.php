<?php
require_once "IException.class.php";

// Classe abstrata, não pode ser instanciada, apenas herdada
abstract class sysException extends Exception implements IException {
	
    protected $message = 'Unknown exception';     // Exception message
    private   $string;                            // Unknown
    protected $code    = 0;                       // User-defined exception code
    protected $file;                              // Source filename of exception
    protected $line;                              // Source line of exception
    private   $trace;                             // Unknown
    private   $classe;

    public function __construct($message = null, $code = 0)
    {
        if (!$message) {
            throw new $this('Unknown '. get_class($this));
        }
    	$this->classe = get_class($this);
        parent::__construct($message, $code);
    }
   
    public function __toString()
    {
        $html = <<<HTML
<erro>
	<classe>{$this->classe}</classe>
	<mensagem>{$this->message}<mensagem>
	<arquivo>{$this->file}</arquivo>
	<linha>{$this->line}</linha>
	<trace><pre>{$this->getTraceAsString()}</pre></trace>
</erro>
HTML;
		return $html;
    }
}