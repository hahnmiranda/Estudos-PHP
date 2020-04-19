<?php

// if, elseif, else

$numero = 50;

if($numero == 10):
	echo "Numero é igual a 10!";
elseif($numero <= 9):
	echo "Número é menor ou igual a 9!";
else:
	echo "Número é maior que 10!";
endif;

echo "<br><br>";
$media = 7;
echo ($media >= 7) ? "Aprovado" : "Reprovado";

// switch case

echo "<br><hr><br>";
$cor = "verd";

switch ($cor) {
	case 'vermelho':
		echo "A cor é vermelha";
		break;

	case 'verde':
		echo "A cor é verde";
		break;

	case 'amarela':
		echo "A cor é amarela";
		break;
	
	default:
		echo "A cor não é vermelha, verde nem amarela";
		break;
}