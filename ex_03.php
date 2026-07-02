<?php

function mascararCPF($cpf){

  $mascararCpf = substr($cpf, 0, 0) . "***.***.*" . substr($cpf, -5);
    return $mascararCpf;

}

$cpf = "123.456.789-67";

echo "CPF original: $cpf <br>";
echo "CPF mascarado: ". mascararCPF($cpf) . "<br>";