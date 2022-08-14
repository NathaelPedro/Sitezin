<?php
					/* tipos básicos*/

$nome= "Hcode";//string

$sit= 'wwww.hcode.com.br';//sting com aspas simples

$ano= 1990;//número

$salario= 5500.99;//ponto flutuante
				  //O ponto significa um ponto flutuante!

$bloqueado= false;//boleano

					/* tipos básicos*/

					/* tipos compostos*/
$frutas= array("abacaxi", "laranja","manga"); //tipo array
echo $frutas[2]; //para chamar o valor de um array!

echo "<br/>"; //Nova linha

					/* Orientação objeto.*/
$nascimento= new DateTime(); //Declaração de objeto
var_dump($nascimento);
echo "<br/>";
					/*Tipos especiais*/

$arquivo= fopen("tipoDEdados.php", "r"); //Stream
var_dump($arquivo);

					/*Nulo e vazio*/
					
$nulo= Null; 	//variável nulo (ausencia de valor)
$vazio= ""; 	//variavel vazia

?>