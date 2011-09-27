<?php
require_once 'inc/itemDeConsumo.class.php';


$itemDeConsumo = new itemDeConsumo(); 	// Instancia um item de consumo
$itemDeConsumo->buscarPorId(2);			// Busca determinado item


// Gera o HTML (sintaxe HEREDOC)
print <<<HTML
<ul>
	<li>Código de barras: {$itemDeConsumo->getId()}</li>
	<li>Descrição: {$itemDeConsumo->getDescricao()}</li>
	<li>Preço: {$itemDeConsumo->getValor()}</li>
</ul>
HTML;