<?php 
$conta1 = [
    'Titular' => 'vinicius',
    'Saldo' => 1000
];
$conta2 = [
    'Titular' => 'João',
    'Saldo' => 2000
];
$conta3 = [
    'Titular' => 'Pedro',
    'Saldo' => 3000
];
$conta4 = [
    'Titular' => 'Cintya',
    'Saldo' => 5000
];

$contascorrentes = ['$conta1', '$conta2', '$conta3', '$conta4' ];

foreach($contascorrentes as $conta ){
    echo $conta ['titular'] .PHP_EOL;
}