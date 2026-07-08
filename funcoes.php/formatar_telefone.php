<?php

function formatarTelefone($telefone){
    return "(" . substr($telefone, 0, 2) . ") " .
           substr($telefone, 2, 5) . "-" .
           substr($telefone, 7);
}

$telefone = 479997489599;

echo "O telefone era: $telefone";
echo "O telefone ficou:" .formatarTelefone($telefone);