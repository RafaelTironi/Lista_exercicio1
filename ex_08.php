<?php

function ordenarNomes($nomes){

$lista = explode(",", $nomes);

sort($lista);

return $lista;
}

$nomes = "Juana, Rafael, Luiz, Nicole";

echo "Nomes: $nomes <br>";
echo "Nomes em ordem alfabética: $lista <br>";