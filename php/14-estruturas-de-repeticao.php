<?php

// While e Do While

$contador = 1;

while ($contador <= 5) {
	echo "$contador <br>";
	$contador++;
}

$contador = 1;

echo "<br><hr><br>";
$valores = array();
do {
	echo "$contador<br>";
	array_push($valores, $contador);
	$contador++;
} while ($contador <= 5);

// for e foreach
echo "<br><hr><br>";
for ($contador = 1; $contador <= 5; $contador++) { 
	echo "$contador<br>";
}

echo "<br><hr><br>";
foreach ($valores as $indice => $valor):
	echo "[".$indice."] = ".$valor."<br>";
endforeach;