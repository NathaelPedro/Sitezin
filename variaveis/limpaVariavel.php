<?php

$dataNascimento= "21/07/2001";
/*$nomeCompleto= "Pedro Nathael Ayres da Silva";

echo $nomeCompleto;*/

echo $dataNascimento;

echo "<br/>";
//quebra a linha

unset($dataNascimento);

//limpa a variável

if(isset($dataNascimento))
{

echo $dataNascimento;
/*Se o que tiver entro dos parenteses do isset for verdadeiro
então aparecera oque está dentro dos parenteses*/

}

?>