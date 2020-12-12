<?php 

// calculo do IMC
$peso = 60;

$altura = 1.90;

$imc = (($peso)/($altura**2));

if ( $imc <= 16){
    echo "seu IMC é $imc e vc estar em Subpeso severo";
    } elseif ($imc >= 16 || $imc < 19.9) {
        echo "seu peso é $imc e você está com imc em subpeso";
    } else {
        echo "Seu IMC é  $imc e ele está normal";
    }
       