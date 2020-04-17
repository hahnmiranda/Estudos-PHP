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

// arrays associativos
echo "<br><br><hr><br>";
$pessoa = array("nome" => "Guilherme", "idade" => 33, "altura" => 1.77);
$pessoa["cidade"] = "Alegrete";
print_r($pessoa);

echo "<br><br><hr><br>";
foreach ($pessoa as $indice => $value) {
	echo $indice.": ".$value."<br>";
}

echo "<br><br><hr><br>";
$times = array(
	"gauchos" => array("Campeao" => "internacional", "vice" => "gremio"),
	"paranaenses" => array("atletico", "curitiba"),
);
// echo $times["gauchos"][0];

foreach ($times["gauchos"] as $indice => $value) {
	echo "$indice : $value <br>";
}




















