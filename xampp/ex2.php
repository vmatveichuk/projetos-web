<?php
	$valor1=30;
	$valor2=20;

	$operacao="+";

	switch ($operacao){
		case "+":
			$resultado=$valor1+$valor2;
			echo "Soma=$resultado";
			break;
		case "x":
			$resultado=$valor1*$valor2;
			echo "Multiplicacao=$resultado";
			break;
		case "-":
			$resultado=$valor1-$valor2;
			echo "Subtração=$resultado";
			break;
		case "%":
			$resultado=$valor1/$valor2;
			echo "Divisao=$resultado";
			break;
	}

?>