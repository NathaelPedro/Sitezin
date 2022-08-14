<?php

$nome= "<strong>gaules<strong>";

function teste (){
	global $nome;
	echo $nome;
}

function teste2(){
	$nome= "O impostor";
	echo $nome. " agora ta no teste2";

}

teste();
echo "</br>";
teste2();
?>