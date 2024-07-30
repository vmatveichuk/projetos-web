<?php
	$nome="Augusto";
	$idade=50;

	echo "$nome <br>";
	echo "$idade anos <br>";


	if ($idade>60) {
		echo "Nao paga a passagem do busão";
	}
	elseif($idade==60){
		echo "que sorte a sua!Nao precisa paga a passagem do busao";
	}
	else{
		echo "Ainda tera que pagar a passagem do busao";
	}

?>