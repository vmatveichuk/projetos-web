<?php
$condição=true;
$numero=1;
if ($condição==true){
	funcao();
}
function funcao(){
	echo"eu nao existo qte que o progama<br>";
}
$lista = array(
	'Vermelhas' =>array("      Maca","Tomate","Cereja <br>"),
	 "Laranja"=>array ("       Laranja","pessego","PORRRA<br>"),
	 "Preto"=>array ("cARAI","EITA","porra<br>"),
);
foreach ($lista as $eita =>$porra) {
	echo $eita;
	foreach($porra as $carai){
		echo $carai;
	}
}
function recursividade($numero)
{
if ($numero<20){
	echo "$numero <br>";
	recursion($numero+1);
}
}
recursividade($numero);


?>