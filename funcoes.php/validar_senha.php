<?php

function validarSenha($senha){

    if(strlen($senha) >= 8){
        return "Senha forte";
    }else{
        return "Senha fraca";
    }

}

$senha = 1234567;

echo "Senha: $senha <br>";
echo validarSenha($senha);