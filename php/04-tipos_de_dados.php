<?php

/*********** Escalares ***********/

// string

$nome = "Olá mundo";
var_dump($nome);

if(is_string($nome)):
	echo "Eh uma string";
else:
	echo "Nao eh string";
endif;

echo "<hr>";

// int - inteiro

$idade = 33;
var_dump($idade);

if(is_int($idade)):
	echo "Eh um inteiro";
else:
	echo "Nao eh inteiro";
endif;

echo "<hr>";

// float - numero quebrado

$altura = 1.77;
var_dump($altura);

if(is_float($altura)):
	echo "Eh um float";
else:
	echo "Nao eh float";
endif;

echo "<hr>";

$admin = false;
var_dump($admin);

if(is_bool($admin)):
	echo "Eh um booleano";
else:
	echo "Nao eh booleano";
endif;

echo "<hr>";

/*********** Compostos ***********/

// array

$carros = array("Gol", "Uno", "Camaro", 12, 20.3, true);
var_dump($carros);

if(is_array($carros)):
	echo "Eh um array";
else:
	echo "Nao eh array";
endif;

echo "<hr>";

// object

class Cliente {
	public $nome;
	public function atribuirNome($nome){
		$this->$nome = $nome;
	}
}

$cliente = new Cliente();
var_dump($cliente);

echo "<br>";

$cliente->atribuirNome("Guilherme");
var_dump($cliente);

if(is_object($cliente)):
	echo "Eh um objeto";
else:
	echo "Nao eh objetos";
endif;

echo "<hr>";

/*********** Especiais ***********/

// NULL

$especial = NULL;
var_dump($especial);

// resource - verei mais tarde