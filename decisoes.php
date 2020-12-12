<?php

$idade = 16;
$numeroDePessoas = 1;

echo "você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado".PHP_EOL;

if ($idade >= 18 ) {
    echo " você tem $idade anos. Pode entrar sozinho";
} else if ($idade >= 16 && $numeroDePessoas>1 ){
        echo "Você tem $idade anos, está acompanhado(a), então pode entrar.";
    }else {
        echo "você só tem $idade anos,então Você não pode entrar";
    }

echo PHP_EOL;
echo "Adeus!";
