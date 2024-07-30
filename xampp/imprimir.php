<?php
$xml_produtos=file_get_contentes("loja.xml");
foreach ($xml_produtos->compra as $compra) {
	$total=0;
	foreach ($compra->lista->produto as $produto) {
		echo $produto->descricao."<br>";
		echo $produto->preco."<br>";
		echo $produto->quantidade."<br>";
		$total +=  $produto->preco * $produto->quantidade."<br>";
		echo $total."<br>";
	}
	echo $total."<br>";
}
?>
