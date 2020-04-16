<?php

// Constantes - podem ser de todos os tipos e tambem arrays

define("NOME", "Guilherme Miranda");
define("IDADE", 33);

define("JOGOS", ['Zelda', 'Mario', 'Heroes']);

echo "Meu nome eh ".NOME." e minha idade eh ".IDADE;
echo "<br><br>";
echo JOGOS[2];
echo "<br><br>";
echo var_dump(JOGOS);

function exibeNome() {
	echo NOME;
}

exibeNome();