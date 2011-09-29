<head>
	<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
</head>
<?php
require_once 'inc/itemDeConsumo.class.php';


$itemDeConsumo = new itemDeConsumo(); 	// Instancia um item de consumo

if ($itemDeConsumo->buscarPorId($_GET["id"])) {
	// Gera o HTML (sintaxe HEREDOC)
	print <<<HTML
<ul>
	<li>Código de barras: {$itemDeConsumo->getId()}</li>
	<li>Descrição: {$itemDeConsumo->getDescricao()}</li>
	<li>Preço: {$itemDeConsumo->getValor()}</li>
</ul>
HTML;
} else {
	print "<ul><li>Nenhum produto encontrado.</li><ul>";
}
