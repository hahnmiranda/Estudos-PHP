<?php

$nome = $_GET['nome'];
$email = $_GET['email'];

echo "Meu nome é $nome e meu email é $email. <br><br>";

echo "<br><hr><br>";

echo "Sua idade é: ".$_GET['idade']." e seu sobrenome é: ".$_GET['sobrenome']."<br><br>";

var_dump($_GET);

