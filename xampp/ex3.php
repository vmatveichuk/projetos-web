<?php
$lista=array(
	2015=>array ("-Deadpool-","-Homen-Formiga-","-Mad-max-" ,"-Avengers era de ultron-","-star wars o despertar da força <br><br>"),
	2016=>array("-Logan-","-Avengers guerra civil-","-internet o filme-","-Jorrada nas estrelas<br><br>"),
	2017=>array("-Guardioes da galaxia VOL.2-","-Liga da justiça-"."-It:A coisa","corra!<br><br>")
);
foreach ($lista as $ano => $filmes) {
	echo  $ano;
	foreach($filmes as $filmess){
		echo $filmess;
	}
}

?>