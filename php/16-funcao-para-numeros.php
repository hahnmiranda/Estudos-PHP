<?php

// number_format - formata um número
$db = 1234.56;
$preco = number_format($db, 2, ",", ".");
echo "O valor do produto é: R$ $preco";

// round - arredonda valores
echo "<br><hr><br>";
echo round(3.55)."<br>";
echo round(3.49);

// ceil - arredonda valores para cima
echo "<br><hr><br>";
echo ceil(3.1);

// floor - arredonda sempre para baixo
echo "<br><hr><br>";
echo floor(3.9);

// rand - gera numeros aleatorios em uma faixa
echo "<br><hr><br>";
echo rand(1, 20)."<br>";
echo rand(1, 20)."<br>";
echo rand(1, 20)."<br>";