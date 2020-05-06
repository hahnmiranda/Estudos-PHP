<?php
// criando cookie
setcookie('user', 'Guilherme', time()+3600);
setcookie('email', 'guilherme.h@gmail.c', time()+3600);
setcookie('ultima_pesquisa', 'tenis adidas', time()+3600);

var_dump($_COOKIE);

// para remover os COOKIE, basta colocar valor negativo após a função time()
setcookie('email', 'guilherme.h@gmail.c', time()-1);

var_dump($_COOKIE);

echo "<hr>";

// exibindo cookie
echo $_COOKIE['ultima_pesquisa'];




