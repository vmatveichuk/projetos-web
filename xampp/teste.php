<?php 
$lista = array(
	2015 =>array("-vingadores-","deadpool <br>"),
	2016 => array("-doutor estranho-","-capitao america guerra civil <br>"),
	2017 => array("-logan-","-it a coisa-","-piratas do caribe-"),
);
foreach ($lista as $key => $value) {
 	echo $key;
 	foreach ($value as $filmes) {
 		echo $filmes;
 	}
 } 





 ?>