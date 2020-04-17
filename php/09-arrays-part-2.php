<?php

//Arrays
$carros = array('camaro', 'ferrari','BMW');
print_r($carros);
$carros[] = "Hilux";
echo "<br><br>";
print_r($carros);

echo "<br><br>";
$jogos = array(5=>'Heroes', 6=>'Mario', 7=>'Zelda');
$jogos[15] = "Starcraft";
$jogos[] = "Diablo";
print_r($jogos);

echo "<br><br>";
echo $jogos[16];

echo "<br><br>";
$nomes = ['Guilherme', 'Isabel', 'Trais'];
print_r($nomes);

echo "<br><br><hr><br><br>";
echo count($nomes);
$totalCarros = count($carros);
echo "<br> $totalCarros";

echo "<br><br><hr><br>";
$contador = 0;
foreach ($carros as $valor) {
	echo "[".$contador."] = ".$valor."<br>";
	$contador += 1;
}
