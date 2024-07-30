<?php
	$numero=57;
	switch($numero){
		case $numero%10==0:
		echo "numero divisivel por 10";
		case $numero%5==0:
		echo "numero divisivel por 5";
		case $numero%2==0:
		echo "numero divisivel por 2";
		default:
		echo "nao é divisivel por nenhum destes";

	}



?>