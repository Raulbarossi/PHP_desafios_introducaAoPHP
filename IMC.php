<?php

$altura= 1.8;
$peso= 80;

$imc=$peso/($altura**2);
    echo "seu imc é $imc e isso é considerado ";
if ($imc < 18.5){
    echo "abaixo do peso";
} elseif ($imc <= 25){
    echo "peso ideal";
} elseif ($imc <= 30){
    echo "sobrepeso";
} elseif ($imc <= 35){
    echo "obesidade grau I";
} elseif ($imc <= 40){
    echo "obesidade grau II";
} else {
    echo "obesidade móbida";
}