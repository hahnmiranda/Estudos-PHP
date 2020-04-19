<?php

function mediaAluno($nome, $n1, $n2, $n3) {
	echo "A média do $nome é: ".(($n1+$n2+$n3)/3);
}

mediaAluno("Guilherme", 7, 7.7, 9.3);