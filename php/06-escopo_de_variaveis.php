<?php

// Escopo Global
$nome = "Guilherme Miranda";

function exibeNome() {
	global $nome;
	echo $nome;
}

exibeNome();

echo "<hr>";

function exibeCidade() {
	// Escopo Local
	global $cidade;
	$cidade = "Alegrete";
}

exibeCidade();
echo $cidade;

echo "<hr>";

$a = 1;
$b = 3;
$c = 7;

function soma() {
	echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}

soma();
echo "<br><br>";

function soma2() {
	global $a, $b, $c;
	echo $a + $b + $c;
}

soma2();