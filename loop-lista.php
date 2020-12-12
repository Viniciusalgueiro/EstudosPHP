<?php

$idadeList = ['arroz','feijão','sopa','açucar','limão','soja',8,21];

echo count($idadeList);

for ($i = 0; $i <7; $i++) {
    echo $idadeList[$i] .PHP_EOL;
}