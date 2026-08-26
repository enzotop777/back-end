<?php

$usuario = "enzo";
$idade = 27;

if($idade < 13){
    echo " cadastro nao permitido";
}
else if ($idade >= 13 && $idade <16){
    echo "so pode usar a plataforma com controle dos pais!";
}
else{
    echo "plataforma liberada!!!";
}
?>