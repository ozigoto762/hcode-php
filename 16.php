<?php
$nome = "Marcelo";

function teste(){
	global $nome;
	echo $nome;

}
function teste2(){

	$nome = "Karina";
	echo $nome." agora no teste 2";
}

teste();
echo "<br> ";

teste2();

?>