<?php

function ehArray($array) {
	if (is_array($array)):
		echo "É um array!";
	else:
		echo "Não é array!";
	endif;
}
$times = array("internacional", "barcelona", "bayern");
$selecoes = array("brasileira", "espanhola", "alemã");
$time = "Internacional";

// is_array - verifica se uma variável é array (retorna true ou false)

echo is_array($times)."<br>";
var_dump(is_array($times));
echo "<br><hr><br>";

ehArray($times);

// in_array - verifica se um valor exite (retorna true ou false)

echo "<br><hr><br>";
echo in_array("internacional", $times);

// array_keys - retorna os indices de um array

echo "<br><hr><br>";
$keys = array_keys($times);
print_r($keys);

// array_values - retorna os valores de um array

echo "<br><hr><br>";
$keys = array_values($times);
print_r($keys);

// array_merge - junta o conteúdo de dois arrays

echo "<br><hr><br>";
$keys = array_merge($times, $selecoes);
print_r($keys);

// array_pop - exclui a ultima posicao do array

echo "<br><hr><br>";
print_r($selecoes);
echo "<br>";
echo array_pop($selecoes);
echo "<br>";
print_r($selecoes);

// array_shift - remove o primeiro elemento do array

echo "<br><hr><br>";
print_r($selecoes);
echo "<br>";
echo array_shift($selecoes);
echo "<br>";
print_r($selecoes);

// array_unshift e array_push - adiciona elementos no inicio e final respectivamente

echo "<br><hr><br>";
print_r($selecoes);
array_unshift($selecoes, "brasileira");
echo "<br>";
print_r($selecoes);
echo "<br>";
array_push($selecoes, "alemã");
print_r($selecoes);

// array_combine - combina o conteudo de dois arrays (um é indice)

echo "<br><hr><br>";
print_r($times);
echo "<br>";
print_r($selecoes);
echo "<br>";
$keys = array_combine($selecoes, $times);
print_r($keys);

// array_sum - soma o conteudo de um array

echo "<br><hr><br>";
$soma = array(5, 6, 10, 9);
echo array_sum($soma);

// explode e implode - separa e junta arrays respectivamente

echo "<br><hr><br>";
$data = "26/02/1987";
echo $data;
echo "<br>";
$explode = explode("/", $data);
print_r($explode);
echo "<br>";
$implode = implode("/", $explode);
echo "$implode";






