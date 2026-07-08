<?php

function calcularIdade($anoNascimento){
    return date("Y") - $anoNascimento;
}

$anoNascimento = 2009;

echo "Ano de nascimento: $anoNascimento";

echo "Idade: " .calcudarIdade($anoNascimento);