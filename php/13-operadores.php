<?php

//aritmeticos

$a = 5;
$b = 2;
$c = 10;

$adicao = $a + $b;
echo "$adicao <br>";

$subtracao = $a - $b;
echo "$subtracao <br>";

$multiplicacao = $a * $b;
echo "$multiplicacao <br>";

$divisao  = $c / $b;
echo "$divisao <br>";

$modulo  = $a % $b;
echo "$modulo <br>";

$exponenciacao  = $a ** $b;
echo "$exponenciacao <br>";

echo "<hr>";

// incremento

$valor = 10;

// pré-incremento e decremento
echo ++$valor."<br>";
echo --$valor."<br>";
echo "<hr>";

// pós-decremento e incremento

echo $valor++."<br>";
echo "$valor<br>";
echo $valor--."<br>";
echo "$valor<br>";

// operador de atribuicao

echo "<br><hr><br>";
$a = 10;
$b = 5;
echo $a += $b; // isso pode ser feito com qualquer operador aritmetico

// operadores de comparacao

$temp = 10;

echo "<br><hr><br>";
// igual
if (10 == "10"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// não igual
if ($temp != "11"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// identico
if ($temp === "10"): // são de tipos diferentes
	echo "Positivo";
endif;

echo "<br><hr><br>";
// não identico
if ($temp !== "10"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// diferente
if ($temp <> "11"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// menor que
if ($temp < "11"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// maior que
if ($temp > "11"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// menor ou igual
if ($temp <= "11"):
	echo "Positivo";
endif;

echo "<br><hr><br>";
// maior ou igual
if ($temp >= "11"):
	echo "Positivo";
endif;

// spaceship - se o direito for maior retorna -1 se igual 0 senão 1
var_dump(20 <=> 20);
echo "<br><hr><br>";
var_dump(20 <=> 2);
echo "<br><hr><br>";
var_dump(20 <=> 30);

// operadores lógicos (&& - and, || - or, xor, !)

$idade = 33;
$nome = "Guilherme";

echo "<br><hr><br>";
if (($idade == 33) && ($nome != "João")) {
	echo "Positivo!";
}

echo "<br><hr><br>";
if (($idade == 33) || ($nome == "João")) {
	echo "Positivo!";
}

echo "<br><hr><br>";
// só retorna verdadeiro quando 1 só é verdadeira
if (($idade == 33) xor ($nome == "João")) { 
	echo "Positivo!";
}

echo "<br><hr><br>";
if (!($idade == 33) && ($nome != "João")) {
	echo "Positivo!";
}













