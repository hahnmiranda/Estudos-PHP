<?php

/*

$GLOBALS - acessa variaveis globais
$_SERVER - informacoes sobre endereco de scripts
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION

*/

// $GLOBALS
$x = 10;
$y = 15;

function soma() {
	echo $GLOBALS["x"] + $GLOBALS["y"];
}
soma();
echo "<br><hr><br>";

// $_SERVER
echo $_SERVER['PHP_SELF']."<br>";
echo $_SERVER['SERVER_NAME']."<br>";
echo $_SERVER['SCRIPT_FILENAME']."<br>";
echo $_SERVER['DOCUMENT_ROOT']."<br>";
echo $_SERVER['SERVER_PORT']."<br>";
echo $_SERVER['REMOTE_ADDR']."<br>";

// _POST e _GET estão na pasta teste_globais

// os FILTERS estão na pasta filters em teste_globais



