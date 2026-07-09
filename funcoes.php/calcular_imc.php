<?php

function calcularIMC($peso, $altura){
    return $peso / ($altura * $altura);
}

$peso = 62;
$altura = 1.72;

echo "Peso: $peso kg<br>";
echo "Altura: $altura m<br>";
echo "IMC = " . calcularIMC($peso, $altura);